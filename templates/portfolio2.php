<div class="container cta-content">
  <h1>Residential</h1>
</div>

<!-- Section 1 -->
<section class="portfolio-cta-section">
  <div class="portfolio-carousel">
  <!-- 1 -->
  <div class="carousel-slide active" style="background-image: url('assets/images/portfolio/residential/1_Post.webp');"></div>

  <!-- 2 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/residential/2_Post.webp');"></div>

  <!-- 3 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/residential/6_Post.webp');"></div>

  <!-- 4 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/residential/Cam_02.webp');"></div>

  <!-- 5 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/residential/fAMILY ROOM_Corona Camera007.webp');"></div>

  <!-- 6 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/residential/Father\'s Room View 01.webp');"></div>

  <!-- 8 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/residential/Living Room Final Render Camera001.webp');"></div>

  <!-- 11 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/residential/Majlis__Corona Camera005.webp');"></div>

  <!-- 12 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/residential/Majlis_NEW-01_Corona Camera002.webp');"></div>

  <!-- 14 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/residential/WhatsApp Image 2025-04-28 at 1.17.28 PM (7).webp');"></div>
</div>


  <!-- Progress Indicators -->
  <div class="carousel-indicators">
    <span class="indicator active"></span>
    <span class="indicator active"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
   
  </div>
    
</section>
<div class="container cta-content">
  <h1>Commercial</h1>
</div>
<!-- Section 2 -->
<section class="portfolio-cta-section">
<div class="portfolio-carousel">
  <!-- 4 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/commercial/Del-Mar_Nakheel Camera005.webp');"></div>

  <!-- 5 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/commercial/DELMAR_Interior_VIEW_004.webp');"></div>

  <!-- 6 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/commercial/Gym.webp');"></div>

  <!-- 7 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/commercial/hotel lobby.webp');"></div>

  <!-- 8 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/commercial/Office_Corona Camera004.webp');"></div>

  <!-- 11 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/commercial/Sallora_FF_Cam_003.webp');"></div>
</div>


  <!-- Progress Indicators -->
  <div class="carousel-indicators">
    <span class="indicator active"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    
  </div>
</section>


<div class="container cta-content">
  <h1>Renovation</h1>
</div>
<!-- Section 3 -->
<section class="portfolio-cta-section">
<div class="portfolio-carousel">
  <!-- 1 -->
  <div class="carousel-slide active" style="background-image: url('assets/images/portfolio/renovation/Dining Area View 04.webp');"></div>

  <!-- 2 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/renovation/Kitchen View 02.webp');"></div>

  <!-- 3 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/renovation/Living area view 1.webp');"></div>

  <!-- 4 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/renovation/Living Room Final Render_001 copy.webp');"></div>

  <!-- 6 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/renovation/Majlis_NEW-0224_Corona Camera004.webp');"></div>

  <!-- 8 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/renovation/Master Bedroom View02_.webp');"></div>

  <!-- 11 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/renovation/Master Bedroom-004.webp');"></div>

  <!-- 13 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/renovation/Mothers room view 04.webp');"></div>

  <!-- 14 -->
  <div class="carousel-slide" style="background-image: url('assets/images/portfolio/renovation/Terrace_Camera002.webp');"></div>
</div>


  <!-- Progress Indicators -->
  <div class="carousel-indicators">
    <span class="indicator active"></span>
    <!-- <span class="indicator"></span> -->
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
    <span class="indicator"></span>
   
  </div>
</section>



<style>
  
.portfolio-cta-section {
  height: 659px;
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: space-between;
  align-items: center;
  /* padding: 0 60px; */
  color: var(--white);
  margin-left:15px;
    margin-right:15px;
}

.portfolio-carousel {
    position: relative;
  overflow: hidden;

  display: flex;
  width: 100%;
  height: 100%;
  transition: transform 0.6s ease;
}

.carousel-slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: bottom;
  transform: translateX(100%);
  opacity: 0;
  transition: transform 0.7s ease-in-out, opacity 0.7s ease-in-out;
  z-index: 1;
}

/* incoming slide */
.carousel-slide.active {
  transform: translateX(0);
  opacity: 1;
  z-index: 2;
}

/* outgoing slide */
.carousel-slide.exit {
  transform: translateX(-100%);
  opacity: 0;
  z-index: 1;
}





.carousel-slide.exit {
  transform: translateX(-100%);
  z-index: 1;
}


.cta-content {
    margin-top: 20px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  z-index: 2;
  position: relative;
}

.cta-content h1 {
    margin-bottom: 30px;
    margin-top: 70px;
  /* font-size: 48px; */
margin: 15px;
margin-top: 154px;
}

.cta-link {
    
    margin-top: 80px;
  color: var(--white);
  border-bottom: 1px solid var(--white);
  padding: 10px 22px;
  text-decoration: none;
  font-weight: 600;
  transition:.3s;
}

.cta-link:hover {
   border: 1px solid var(--white);
  /* color: var(--black); */
}

/* Progress Indicators */
.carousel-indicators {
  position: absolute;
  bottom: 20px;   /* distance from bottom edge */
  right: 20px;    /* stick to right corner */
  display: flex;
  gap: 6px;
  z-index: 3;
}

.indicator {
  margin: top 12px;
  width: 20px;
  height: 3px;
  background: rgba(255, 255, 255, 0.4);
  border-radius: 2px;
  overflow: hidden;
  position: relative;
  transition: width 0.3s ease; /* smooth width expansion */
}

.indicator::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 0%;
  background: var(--white);
  transition: width linear;
}

.indicator.active {
  width: 50px; /* expanded size */
}

.indicator.active::after {
  width: 100%;
  transition: width 5s linear; /* slide duration */
}


/* =====================
   Responsive Styling
===================== */

/* Tablets */


/* Mobile */

/* Desktop default */
/*  */

/* Mobile */
@media (max-width: 992px) {

  .portfolio-cta-section {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0;
    margin: 0;
    height: auto;
    position: relative;
  }

  /* H1 */
  .cta-content h1 {
    order: 1;
    font-size: 36px;
    margin: 20px 0 10px 8px;
    width: 100%;
    text-align: left;
  }

  /* Carousel */
  .portfolio-carousel {
    order: 2;
    width: 100%;
    height: auto;
    position: relative; /* slides inside are absolute */
    
        aspect-ratio: 16 / 9;  /* keeps proportional height */
margin-bottom: 8px; /* space between carousel and indicators */
  }

  .carousel-slide {
     position: absolute;
    top: 0;
    left: 0;
    width: 100%;         /* full width */
    height: 100%;        /* auto adjust */
    background-size: cover;
    background-position: center;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
  }

  .carousel-slide.active {
    opacity: 1;
  }

  /* Indicators immediately below carousel */
  .carousel-indicators {
    order: 3;
    position: relative; /* normal flow, below carousel */
    display: flex;
    gap: 6px;
    margin: 23px 0 10px 0; /* spacing below carousel */
    justify-content: flex-end; /* align to right */
    width: 100%;
  }

  .indicator {
    width: 5px;
    height: 2px;
    background: rgba(255, 255, 255, 0.4);
    border-radius: 2px;
    overflow: hidden;
    position: relative;
    transition: width 0.3s ease;
  }

  .indicator.active {
    width: 30px;
  }

  /* CTA Link */
  .cta-link {
    order: 4;
    font-size: 14px;
    padding: 8px 16px;
    margin: 0 0 20px 0;
    text-align: left;
  }
}

</style>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".portfolio-cta-section");
  const DURATION = 5000; // 5s per slide

  sections.forEach(section => {
    const track = section.querySelector(".portfolio-carousel");
    const slides = Array.from(track.children);
    let indicators = Array.from(section.querySelectorAll(".indicator"));

    // sync indicators with slides
    if (indicators.length !== slides.length) {
      const wrap = section.querySelector(".carousel-indicators");
      wrap.innerHTML = "";
      indicators = slides.map((_,i) => {
        const dot = document.createElement("span");
        dot.className = "indicator" + (i===0 ? " active" : "");
        wrap.appendChild(dot);
        return dot;
      });
    }

    let index = 0;
    let timer;

    function setActiveIndicator(i){
      indicators.forEach(dot => dot.classList.remove("active"));
      const dot = indicators[i];
      void dot.offsetWidth; // restart fill animation
      dot.classList.add("active");
    }

  function goTo(i, {restart=true} = {}) {
  const current = slides[index];
  current.classList.remove("active");
  current.classList.add("exit");

  // Remove exit after animation ends
  current.addEventListener("transitionend", () => {
    current.classList.remove("exit");
  }, { once: true });

  index = (i + slides.length) % slides.length;
  const next = slides[index];
  next.classList.add("active");

  setActiveIndicator(index);
  if (restart) restartAuto();
}



    function next(){ goTo(index+1, {restart:false}); }
    function startAuto(){ timer = setInterval(next, DURATION); }
    function stopAuto(){ clearInterval(timer); }
    function restartAuto(){ stopAuto(); startAuto(); }

    // indicators click
    indicators.forEach((dot,i)=>dot.addEventListener("click",()=>goTo(i)));

    // swipe / drag
    let startX = 0, dragging = false;
    track.addEventListener("pointerdown", e => { dragging = true; startX = e.clientX; stopAuto(); });
    window.addEventListener("pointerup", e => {
      if(!dragging) return;
      const delta = e.clientX - startX;
      dragging = false;
      if(delta < -50) goTo(index+1); else if(delta>50) goTo(index-1); else restartAuto();
    });

    // init
    goTo(0, {restart:false});
    startAuto();
  });
});

</script>
