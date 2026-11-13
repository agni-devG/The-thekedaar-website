
<section class="video-section">
  <div class="video-carousel swiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide" data-video="1116048567">
        <div class="video-card"></div>
      </div>

      <div class="swiper-slide" data-video="1116048609">
        <div class="video-card"></div>
      </div>

      <div class="swiper-slide" data-video="1116048621">
        <div class="video-card"></div>
      </div>

      <div class="swiper-slide" data-video="1116048638">
        <div class="video-card"></div>
      </div>

      <div class="swiper-slide" data-video="1116048690">
        <div class="video-card"></div>
      </div>

      <div class="swiper-slide" data-video="1116048718">
        <div class="video-card"></div>
      </div>

      <div class="swiper-slide" data-video="1116048587">
        <div class="video-card"></div>
      </div>

      <div class="swiper-slide" data-video="1116048746">
        <div class="video-card"></div>
      </div>

      <div class="swiper-slide" data-video="1116048669">
        <div class="video-card"></div>
      </div>

    </div>
  </div>
</section>

<!-- Fullscreen video modal -->
<div class="video-modal" id="videoModal">
  <button class="modal-close" aria-label="Close video">
    &times;
  </button>
  <div class="modal-content" id="modalContent"></div>
</div>

<style>

  
.video-section {
  width: 100%;
  overflow: hidden;
  margin: 120px 40px;
}

.video-carousel {
  width: 100%;
  overflow: visible;
  cursor: grab;
  user-select: none;
}

.video-carousel:active {
  cursor: grabbing;
}

.video-carousel .swiper-slide {
  width: 340px;
  height: auto;
}

.video-card {
  width: 100%;
  aspect-ratio: 9 / 16;
  overflow: hidden;
  position: relative;
  /* background: #171717; */
  border-radius: 8px;
  cursor: pointer;
}

.video-card iframe {
 width: 100%;
  height: 100%;
  border: 0;
  display: block;
  pointer-events: none;
}

/* Fullscreen modal */

.video-modal {
  position: fixed;
  inset: 0;
  z-index: 99999;
  background: rgba(0, 0, 0, 0.96);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 40px;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease,
              visibility 0.3s ease;
}

.video-modal.active {
  opacity: 1;
  visibility: visible;
}

.modal-content {
   width: auto;
  height: 90vh;
  aspect-ratio: 9 / 16;
  max-width: 90vw;
  position: relative;
}

.modal-content iframe {
  width: 100%;
  height: 100%;
  border: 0;
}

.modal-close {
  position: absolute;
  top: 25px;
  right: 35px;
  z-index: 2;
  background: transparent;
  border: 0;
  color: white;
  font-size: 42px;
  cursor: pointer;
  line-height: 1;
}

@media (max-width: 768px) {
  .video-carousel .swiper-slide {
    width: 78vw;
  }

  .video-modal {
    padding: 15px;
  }

  .modal-content {
    aspect-ratio: 16 / 9;
  }

  .modal-close {
    top: 15px;
    right: 20px;
  }
}




</style>


<script>
  
document.addEventListener("DOMContentLoaded", () => {

  // Load Swiper
  const swiper = new Swiper(".video-carousel", {
    slidesPerView: "auto",
    spaceBetween: 18,
    grabCursor: true,
    speed: 700,
    freeMode: {
      enabled: true,
      momentum: true,
      momentumRatio: 0.8,
    },
    preventClicks: true,
    preventClicksPropagation: true,
  });

  const slides = document.querySelectorAll(
    ".video-carousel .swiper-slide"
  );

  const modal = document.getElementById("videoModal");
  const modalContent = document.getElementById("modalContent");
  const closeBtn = document.querySelector(".modal-close");

  let modalPlayer = null;
  let activeModal = false;

  // Vimeo embed URL
  function getVimeoURL(id) {
    return `https://player.vimeo.com/video/${id}?background=1&autopause=0&playsinline=1`;
  }

  // Store Vimeo players
  const players = new Map();

  // Create a Vimeo player inside a slide
  function loadVideo(slide) {
    if (slide.dataset.loaded) return;

    const id = slide.dataset.video;
    const card = slide.querySelector(".video-card");

    const iframe = document.createElement("iframe");

    iframe.src = getVimeoURL(id);
    iframe.allow = "autoplay; fullscreen; picture-in-picture";
    iframe.setAttribute("allowfullscreen", "");
    iframe.setAttribute("title", "Vimeo video");

    card.appendChild(iframe);

    slide.dataset.loaded = "true";

    const player = new Vimeo.Player(iframe);

    players.set(slide, player);

    player.ready().then(() => {
      if (slide.dataset.visible === "true") {
        player.play().catch(() => {});
      } else {
        player.pause().catch(() => {});
      }
    });
  }

  // Observe visible slides
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        const slide = entry.target;
        const isVisible = entry.isIntersecting;

        slide.dataset.visible = isVisible ? "true" : "false";

        // Load videos as they approach the carousel viewport
        if (isVisible) {
          loadVideo(slide);
        }

        const player = players.get(slide);

        if (player) {
          if (isVisible && !activeModal) {
            player.play().catch(() => {});
          } else {
            player.pause().catch(() => {});
          }
        }
      });
    },
    {
      root: document.querySelector(".video-carousel"),
      rootMargin: "100px",
      threshold: 0.1,
    }
  );

  slides.forEach((slide) => observer.observe(slide));

  // Open fullscreen modal
  slides.forEach((slide) => {

    const card = slide.querySelector(".video-card");

    card.addEventListener("click", () => {

      const id = slide.dataset.video;

      activeModal = true;

      // Pause carousel videos
      players.forEach((player) => {
        player.pause().catch(() => {});
      });

      // Create modal video
      modalContent.innerHTML = "";

      const iframe = document.createElement("iframe");

      iframe.src = getVimeoURL(id);
      iframe.allow = "autoplay; fullscreen; picture-in-picture";
      iframe.setAttribute("allowfullscreen", "");
      iframe.setAttribute("title", "Fullscreen Vimeo video");

      modalContent.appendChild(iframe);

      modal.classList.add("active");
      document.body.style.overflow = "hidden";

      modalPlayer = new Vimeo.Player(iframe);

      modalPlayer.ready().then(() => {
        modalPlayer.play().catch(() => {});
      });

    });

  });

  // Close modal
  function closeModal() {

    if (!activeModal) return;

    activeModal = false;

    modal.classList.remove("active");
    document.body.style.overflow = "";

    if (modalPlayer) {
      modalPlayer.destroy();
      modalPlayer = null;
    }

    modalContent.innerHTML = "";

    // Resume visible carousel videos
    slides.forEach((slide) => {
      const player = players.get(slide);

      if (player && slide.dataset.visible === "true") {
        player.play().catch(() => {});
      }
    });
  }

  closeBtn.addEventListener("click", closeModal);

  // Close when clicking outside video
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeModal();
    }
  });

  // Close with Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      closeModal();
    }
  });

  if (!swiper.allowClick) return;

});

</script>


<!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Vimeo Player SDK -->
<script src="https://player.vimeo.com/api/player.js"></script>
