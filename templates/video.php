<section class="video-slider-section">
  <div class="swiper video-slider">
    <div class="swiper-wrapper">

      <!-- Video 1 -->
      <div class="swiper-slide">
        <iframe src="https://player.vimeo.com/video/1116048567?autoplay=0&loop=1&muted=0&controls=0" 
                frameborder="0" 
                allow="autoplay; fullscreen; picture-in-picture" 
                allowfullscreen></iframe>
      </div>

      <!-- Video 2 -->
      <div class="swiper-slide">
        <iframe src="https://player.vimeo.com/video/1116048609?autoplay=0&loop=1&muted=0&controls=0" 
                frameborder="0" 
                allow="autoplay; fullscreen; picture-in-picture" 
                allowfullscreen></iframe>
      </div>

      <!-- Video 3 -->
      <div class="swiper-slide">
        <iframe src="https://player.vimeo.com/video/1116048621?autoplay=0&loop=1&muted=0&controls=0" 
                frameborder="0" 
                allow="autoplay; fullscreen; picture-in-picture" 
                allowfullscreen></iframe>
      </div>

      <!-- Add the rest (4–9) similarly -->
      <div class="swiper-slide">
        <iframe src="https://player.vimeo.com/video/1116048638?autoplay=0&loop=1&muted=0&controls=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="swiper-slide">
        <iframe src="https://player.vimeo.com/video/1116048690?autoplay=0&loop=1&muted=0&controls=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="swiper-slide">
        <iframe src="https://player.vimeo.com/video/1116048718?autoplay=0&loop=1&muted=0&controls=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="swiper-slide">
        <iframe src="https://player.vimeo.com/video/1116048587?autoplay=0&loop=1&muted=0&controls=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="swiper-slide">
        <iframe src="https://player.vimeo.com/video/1116048746?autoplay=0&loop=1&muted=0&controls=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="swiper-slide">
        <iframe src="https://player.vimeo.com/video/1116048669?autoplay=0&loop=1&muted=0&controls=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</section>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
.video-slider-section {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  background-color: #000;
  margin: 150px 8px 151px 8px; /* ✅ consistent margins */
  padding: 0;
}

.video-slider {
  width: 100%;
  height: auto; /* ✅ allow natural height */
}

.swiper-wrapper {
  display: flex;
  box-sizing: border-box;
  padding: 0 14px;
}

.swiper-slide {
  flex: 0 0 auto;
  width: 356px;
  aspect-ratio: 9 / 16;  /* ✅ Keep vertical video ratio */
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 28px;
  background: #000;
  position: relative;
  cursor: grab;
}

.swiper-slide:last-child {
  margin-right: 0;
}

.swiper-slide iframe {
  width: 100%;
  height: 100%;
  border: none;
  display: block;
  pointer-events: none;
}

.video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 10;
  cursor: pointer;
}

/* ================= MOBILE RESPONSIVENESS ================= */
@media (max-width: 992px) {
  .video-slider-section {
    margin: 80px 8px; /* smaller spacing on mobile */
  }

  .swiper-slide {
    width: 90%; /* ✅ videos nearly full width on mobile */
    aspect-ratio: 9 / 16; /* ✅ maintain TikTok/Reel style */
    margin-right: 16px;
  } 
  .swiper-slide iframe {
    pointer-events: auto; /* Allow tapping on iframe */
  }

  .video-overlay {
    display: none; /* Hide overlay on mobile so users can interact */
  }
  .video-slider {
    overflow-x: auto; /* Ensure horizontal scroll works */
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
  }
}

</style>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script>

<script>
const swiper = new Swiper(".video-slider", {
  direction: "horizontal",
  slidesPerView: "auto",
  spaceBetween: 28,
  freeMode: true,
  grabCursor: true,
  autoplay: false,
  loop: false,
  breakpoints: {}
});

// Store Vimeo players
const vimeoPlayers = [];

const isMobile = window.innerWidth <= 992;

document.querySelectorAll('.swiper-slide').forEach((slide, index) => {
  const iframe = slide.querySelector('iframe');
  const player = new Vimeo.Player(iframe);
  vimeoPlayers.push(player);

  // Pause all videos initially
  player.pause();

  if (isMobile) {
    // MOBILE: Always show controls, remove overlay
    iframe.src = iframe.src.replace('controls=0', 'controls=1');
    iframe.style.pointerEvents = 'auto';
  } else {
    // DESKTOP: Keep original behavior with overlay and hover
    const overlay = document.createElement('div');
    overlay.classList.add('video-overlay');
    slide.appendChild(overlay);

    // Click overlay to play/pause
    overlay.addEventListener('click', () => {
      vimeoPlayers.forEach((otherPlayer, otherIndex) => {
        if (index !== otherIndex) otherPlayer.pause();
      });

      player.getPaused().then(paused => paused ? player.play() : player.pause());
    });

    // Hover shows controls
    slide.addEventListener('mouseenter', () => {
      iframe.src = iframe.src.replace('&controls=0', '&controls=1');
    });

    slide.addEventListener('mouseleave', () => {
      player.getPaused().then(paused => {
        if (paused) iframe.src = iframe.src.replace('&controls=1', '&controls=0');
      });
    });

    // Hide controls if paused and mouse leaves
    player.on('pause', () => {
      if (!slide.matches(':hover')) iframe.src = iframe.src.replace('&controls=1', '&controls=0');
    });

    // Ensure initial controls hidden
    iframe.src = iframe.src.replace('controls=0', 'controls=0');
  }
});

</script>