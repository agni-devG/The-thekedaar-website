<div class="portfolio-header">
  <h1 class="portfolio-title">We let our work speak for us</h1>
  <a href="portfolio" class="portfolio-btn">View Our Portfolio</a>
</div>

<section class="portfolio-slider-section">
  <!-- TRACK -->
  <div class="portfolio-track">
    <!-- Slides -->
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/FF_Seating area_Camera002.webp');"></div>
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/Afra_s Bedroom_updated_Camera001.webp');"></div>
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/Bedroom view-01.webp');"></div>
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/BEAKY_Salon_Main_area_View-02.webp');"></div>
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/2_Post.webp');"></div>
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/Ground Floor.1_recover_last_Corona Camera003_09-23.webp');"></div>
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/Living Room Final Render Camera006.webp');"></div>
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/Living Room Final Render Camera007.webp');"></div>
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/Father%27s%20Room%20View%2001.webp');"></div>
    <div class="portfolio-slide" style="background-image:url('assets/images/portfolio/AutoBackup01 final_Corona Camera012.webp');"></div>
  </div>


  <!-- Indicators (clickable) -->
  <div class="portfolio-indicators">
    <!-- keep your 17 spans; JS will use as many as there are slides -->
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

<style>
:root { --portfolio-slide-duration: 5000ms; }

/* Header / CTA */
.portfolio-header {
  margin-top: 210px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 2;
  position: relative;
}
.portfolio-title { margin-left: 15px; }
.portfolio-btn {
  color: var(--white);
  padding: 10px 22px;
  font-weight: 600;
  text-decoration: none;
  transition: 0.3s;
}

.portfolio-title{
  margin-bottom:20px;

}
.portfolio-btn:hover { border-bottom: 2px solid white; }

/* Section */
.portfolio-slider-section {
  height: 650px;
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 60px;
  color: var(--white);
  margin: 0 15px 210px;
}

/* Track / Slides */
.portfolio-track {
  position: absolute;
  inset: 0;
  display: flex;
  transition: transform 0.6s ease;
}
.portfolio-slide {
  height: 643px;
  background-size: cover;
  background-position: bottom center;
  flex: 0 0 100%;
}

/* Indicators */
.portfolio-indicators {
  position: absolute;
  bottom: 15px;
  right: 20px;
  display: flex;
  gap: 6px;
  z-index: 3;
}
.portfolio-indicator {
  width: 20px;
  height: 3px;
  background: rgba(255,255,255,.4);
  border-radius: 2px;
  position: relative;
  cursor: pointer;
  overflow: hidden;
  transition: width .3s ease;
}
.portfolio-indicator::after {
  content: "";
  position: absolute;
  inset: 0 100% 0 0;
  background: #fff;
  transition: inset var(--portfolio-slide-duration) linear;
}
.portfolio-indicator.active { width: 50px; }
.portfolio-indicator.active::after { inset: 0 0 0 0; }

/* Mobile */
@media (max-width: 992px) {
  .portfolio-slider-section {
    height: 43vh;
    padding: 0 2px;
    margin: 10px 0;
  }
  .portfolio-header {
    flex-direction: column;
    text-align: center;
    gap: 20px;
  }
  .portfolio-title {
    font-size: 36px;
    order: 1;
    text-align: left;
    margin-left: 8px;
  }
  .portfolio-btn { order: 3; text-align: left; }
  .portfolio-slide {
    flex: 0 0 100%;
    max-width: 100%;
    height: 240px;
    background-size: cover;
    background-position: bottom center;
  }
  .portfolio-indicator {
    width: 2px;
    height: 3px;
  }
}

</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".portfolio-slider-section");
  const track = section.querySelector(".portfolio-track");
  const slides = Array.from(track.querySelectorAll(".portfolio-slide"));
  const indicatorsWrapper = section.querySelector(".portfolio-indicators");

  // Generate indicators dynamically
  let indicators = [];
  indicatorsWrapper.innerHTML = "";
  slides.forEach((_, i) => {
    const span = document.createElement("span");
    span.className = "portfolio-indicator" + (i === 0 ? " active" : "");
    indicatorsWrapper.appendChild(span);
    indicators.push(span);
  });

  const DURATION = 5000; // 5s
  section.style.setProperty("--portfolio-slide-duration", DURATION + "ms");

  let index = 0, timer;

  function setActiveIndicator(i){
    indicators.forEach(el => el.classList.remove("active"));
    const dot = indicators[i];
    void dot.offsetWidth; // restart animation
    dot.classList.add("active");
  }

  function goTo(i, {restart=true} = {}){
    index = (i + slides.length) % slides.length;
    track.style.transform = `translateX(-${index * 100}%)`;
    setActiveIndicator(index);
    if(restart) restartAuto();
  }

  function next(){ goTo(index + 1, {restart:false}); }
  function startAuto(){ timer = setInterval(next, DURATION); }
  function stopAuto(){ clearInterval(timer); }
  function restartAuto(){ stopAuto(); startAuto(); }

  // Indicators click
  indicators.forEach((dot, i) => dot.addEventListener("click", () => goTo(i)));

  // Drag / swipe
  let startX = 0, dragging = false;
  track.addEventListener("pointerdown", e => { dragging = true; startX = e.clientX; stopAuto(); });
  window.addEventListener("pointerup", e => {
    if(!dragging) return;
    const delta = e.clientX - startX;
    dragging = false;
    if(delta < -50) goTo(index + 1);
    else if(delta > 50) goTo(index - 1);
    else restartAuto();
  });

  // Init
  goTo(0, {restart:false});
  startAuto();
});

</script>
