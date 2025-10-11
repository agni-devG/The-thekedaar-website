<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="services.css">
  <link rel="stylesheet" href="https://use.typekit.net/cmr7pve.css">
  <title>Document</title>


  <style>

/* ======================= Global Reset & Variables ======================= */
html, body  {
  overflow-x: hidden;
  background-color: #080808;
  margin: 0;
  /* scroll-behavior: smooth; */
}

:root {
  --black: #080808;
  --white: #E6E6E6;
  --accent: #FAEFDF;
  --grey: #292929;
  --light-grey: #CCCCCC;

  --font-primary: "Aloevera Display", sans-serif; /* Paragraphs */
  --font-secondary: "the-seasons";                /* Headings */
  --font-monospace: "Fira Code", monospace;
  --font-headings: var(--font-secondary);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* ======================= Typography ======================= */

h1, h2, h3 {
  font-family: var(--font-headings);
  
}

/* Paragraphs */
p {
  color: var(--black);
  font-size: 16px;
  line-height: 110%;
}

/* Navigation Text */
a {
  font-size: 16px;
  line-height: 100%;
}

.n2 {
  font-size: 14px;
  line-height: 100%;
}

/* Buttons & CTAs */
.cta-lrg {
  font-size: 16px;
  line-height: 100%;
  font-weight: 600;
}

.cta-sml {
  font-size: 14px;
  line-height: 100%;
  font-weight: 600;
}

/* Desktop Heading Scale */
h1 { font-size: 52px; line-height: 100%; }
h2 { font-size: 48px; line-height: 110%; }
h3 { font-size: 32px; line-height: 110%; }

.h1-md { font-size: 40px; line-height: 100%; }
.h2-md { font-size: 36px; line-height: 100%; }

/* Responsive Typography */
@media (max-width: 992px) {
  p { font-size: 14px; line-height: 110%; }
  h2 { font-size: 28px; line-height: 110%; }
  h3 { font-size: 24px; line-height: 110%; }
}

/* ======================= Local Fonts ======================= */
@font-face {
  font-family: 'Aloevera Display';
  src: url('./Aloevera_display/WOFF/AloeveraDisplay-Thin.woff') format('woff');
  font-weight: 100;
  font-style: normal;
}

@font-face {
  font-family: 'Aloevera Display';
  src: url('./Aloevera_display/WOFF/AloeveraDisplay-Light.woff') format('woff');
  font-weight: 300;
  font-style: normal;
}

@font-face {
  font-family: 'Aloevera Display';
  src: url('./Aloevera_display/WOFF/AloeveraDisplay-Regular.woff') format('woff');
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: 'Aloevera Display';
  src: url('./Aloevera_display/WOFF/AloeveraDisplay-Medium.woff') format('woff');
  font-weight: 500;
  font-style: normal;
}

@font-face {
  font-family: 'Aloevera Display';
  src: url('./Aloevera_display/WOFF/AloeveraDisplay-SemiBold.woff') format('woff');
  font-weight: 600;
  font-style: normal;
}

@font-face {
  font-family: 'Aloevera Display';
  src: url('./Aloevera_display/WOFF/AloeveraDisplay-Bold.woff') format('woff');
  font-weight: 700;
  font-style: normal;
}

@font-face {
  font-family: 'Aloevera Display';
  src: url('./Aloevera_display/WOFF/AloeveraDisplay-ExtraBold.woff') format('woff');
  font-weight: 800;
  font-style: normal;
}

@font-face {
  font-family: 'Aloevera Display';
  src: url('./Aloevera_display/WOFF/AloeveraDisplay-Black.woff') format('woff');
  font-weight: 900;
  font-style: normal;
}

/* ======================= Services Section Layout ======================= */
.services-showcase {
  display: grid;
  grid-template-columns: 3fr 7fr; /* left and right columns */
  padding: 16px;
  gap: 17%;
  min-height: 90vh;
  background-color: var(--accent);
  margin: 0;
  align-items: start;
}

.no-smooth {
  transform: none !important;
}

.learn-more-link {
    font-size: 14px;
  }

/* Left Column */
.left-column {
  padding: 16px;
  /* position: sticky; */
  top: 16px;
  align-self: start;
  height: 90vh;
  display: flex;
  flex-direction: column;
  /* transform: none; */
}

.left-column .contact-btn {
  margin-top: auto;
  font-size: 16px;
  font-family: 'Aloevera Display', Arial, sans-serif;
  text-decoration: underline;
  font-weight: 600;
  text-align: left;
  color: #000;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: transparent;
}

/* Nav List */
.left-column .nav-links ul {
  font-family: 'Aloevera Display';
  font-weight: 400;
  font-size: 18px;
  list-style: none;
  padding-top: 20px;
  width: 307px;
}

/* Nav Links */
.left-column .nav-links a {
  text-decoration: none;
  color: #424242;
  transition: color 0.3s;
  font-size:24px;
}

.left-column .nav-links a:hover {
  color: #000;
}

/* Right Column */
.right-column {
  padding: 16px;
  max-width: 900px;
  display: flex;
  flex-direction: column;
  justify-self: end;
}

.right-column h2 {
  color: var(--black);

  font-size: 48px;
  line-height: 100%;
  font-weight: 400; 
  margin: 20px 0 26px 0;

}

.right-column h3 {
    color: var(--black);
font-size: 32px;
    line-height: 100%;
    font-weight: 400;
    margin-bottom: 18px;
    margin-top: 12px;   

}

.right-column button {
  background-color: transparent;
  text-decoration: underline;
  font-size: 16px;
  font-family: 'Aloevera Display', Arial, sans-serif; 
  font-weight: 600;
  border: none;
  padding: 0;
  cursor: pointer;
}

/* Section Container */
.section-container {
  margin-bottom: 96px;
}

/* ======================= Carousel ======================= */
.carousel {
  position: relative;
  overflow: hidden;
  width: 100%;
  cursor: grab;
}

.carousel-track {
  display: flex;
  transition: transform 0.5s ease-in-out;
  gap: 0px;
  scroll-snap-type: x mandatory;
}


.info-container{
  /* color: var(--black); */
}
.carousel-track img {
  width: 100%;
  max-width: 100%;
    flex: 0 0 100%;      /* each image = 1 slide */

  height: 400px;
  flex-shrink: 0;
  object-fit: cover;
  scroll-snap-align: start;
}

.top-text {
  display: block;
  /* font-size: 16px; */
  font-weight: 400;
  margin: 0 0 55px 0;
  /* text-transform: uppercase; */
  letter-spacing: 1.2px;
  color: var(--black);
  font-family: 'Inter', sans-serif; /* fixed fallback */
  font-style: italic;  
  width: 180px;            /* added semicolon */
    border-bottom: 1px solid rgba(0,0,0,0.1);
}

.carousel:hover {
  cursor: grabbing;
}

/* Mobile adjustments */
@media (max-width: 992px) {
  .services-showcase {
    grid-template-columns: 1fr; /* Stack columns */
    padding: 16px; /* Consistent padding */
    gap: 30px; /* Reduced gap when stacked */
  }

  /* Left Column (now at the top) */
  .left-column {
    position: relative; /* Remove sticky behavior for smaller screens */
    top: 0; /* Reset top */
    height: auto; /* Reset height */
    padding: 16px 0; /* Adjust padding */
    order: 0; /* Ensure it appears before the right column */
    width: auto; /* Allow it to take full width */
    max-width: none;
    flex-wrap: wrap; /* Allow nav items to wrap if screen is too small */
    justify-content: center; /* Center nav items */
    flex-direction: column;
        align-items: baseline;
    gap: 20px; /* Space between nav links and button */
  }

  .left-column .nav-links ul {
    display: flex; /* Make nav items horizontal */
    flex-wrap: wrap; /* Allow items to wrap */
    justify-content: center;
    padding: 0; /* Remove top padding */
    margin-bottom: 0; /* Remove any default bottom margin */
    gap: 7px; /* Space between individual nav items */
  }

  .left-column .nav-links li {
      margin: 0; /* Remove any default list item margins */
  }

  .left-column .nav-links a {
      font-size: 16px; /* Adjust nav link font size */
      padding: 0; /* Remove vertical padding from block links */
  }

  .left-column .top-text {
      display: none; /* Hide "Services we provide" on smaller screens if desired */
  }

  .left-column .contact-btn {
    margin-top: 0; /* Reset margin */
    text-align: center; /* Center the button */
    font-size: 16px;
  }


  /* Right Column (now below the left) */
  .right-column {
    padding: 0; /* Adjust padding if needed, often full width */
    max-width: 100%; /* Allow to take full width */
    justify-self: stretch; /* Stretch to fill grid cell */
  }

  .right-column h2 {
    
color: var(--black);
    font-size: 28px; /* Tablet heading size */
    margin: 10px 0 20px 0; /* Adjust margins */
  }

  .right-column h3 {
      color: var(--black);
    font-size: 22px; /* Tablet sub-heading size */
    margin-top: 25px;
    margin-bottom: 10px;
  }

  .right-column p {
    font-size: 15px; /* Tablet paragraph size */
  }

  .section-container {
    margin-bottom: 60px; /* Reduce spacing between sections */
  }

  .carousel-track img {
      object-fit: cover;   /* keep aspect ratio */

    height: 300px; /* Adjust carousel image height for tablets */
  }
}

/* --- Mobile (e.g., max-width: 576px) --- */
@media (max-width: 576px) {
  .services-showcase {
    padding: 10px; /* Smaller padding */
    gap: 20px; /* Smaller gap */
  }

  .left-column {
         
        position: relative;
        padding: 10px 0;
        flex-direction: column;
        align-items: baseline;
  }

  .left-column .nav-links ul {
    flex-direction: column; /* Stack nav links vertically */
    gap: 5px; /* Smaller gap between stacked nav links */
  }

  .left-column .nav-links a {
      font-size: 14px; /* Even smaller nav links */
  }

  .left-column .contact-btn {

    font-size: 14px;
  }

  .right-column h2 {
    color: var(--black);
    font-size: 24px; /* Mobile heading size */
    margin: 5px 0 15px 0;
  }

  .right-column h3 {
      color: var(--black);
    font-size: 18px; /* Mobile sub-heading size */
    margin-top: 20px;
    margin-bottom: 8px;
  }

  .right-column p {
    font-size: 14px; /* Mobile paragraph size */
  }

  .section-container {
    margin-bottom: 40px; /* Even smaller spacing between sections */
  }

  .carousel-track img {
      object-fit: cover;   /* keep aspect ratio */

    height: 200px; /* Adjust carousel image height for mobiles */
  }
}

  </style>
</head>

<body>
  <section class="services-showcase no-smooth">
    <!-- Left Column -->
    <div class="left-column">
      <nav class="nav-links">
         <span class="top-text">Services we provide</span>

        <ul>
          <li><a href="#section1">Residential Designing</a></li>
          <li><a href="#section2">Commercial Interior Design</a></li>
          <li><a href="#section3">Renovation</a></li>
          <li><a href="#section4">Modular Furniture</a></li>
        </ul>
      </nav>
      <button class="contact-btn">Contact Us</button>
    </div>


    <!-- Right Column -->
    <div class="right-column">
      <!-- Section Containers -->
      <div class="section-container" id="section1">
        <h2>Home layouts tailored to your lifestyle.</h2>
        <div class="carousel">
          <!-- Carousel Images -->
          <div class="carousel-track">
            <img src="assets/images/services/Ala Restraunt_Corona Camera005.webp">
  <img src="assets/images/residential/1_Post.webp">
  <img src="assets/images/residential/fAMILY ROOM_Corona Camera007.webp">
  <img src="assets/images/residential/FF_Seating area_Camera002.webp">
  <img src="assets/images/residential/Father's Room View 01.webp">
          </div>
        </div>
        <div class="info-container">
          <h3>Its not “Just A House”</h3>
          <p>For us our home is super close to our heart. It is not just a place where we reside but also a place where
            our relationships nurtures. Because of this very reason, wishing for an elegant and beautifully decorated
            home is a justifiable desire to have.
            To fulfill this humane desire, there comes a significant role of an interior designing firm, whose expertise
            includes smartness, intelligence, and perfection in their craft. And to find such a splendid interior
            designing firm is like trying to measure the depth of an ocean. In simpler words, it is very difficult.</p>
        </div>
        <div class="info-container">
          <h3>An experience of a Lifetime</h3>
          <p>To make this work easier, here comes our role. We at The Thekedaar make sure to deliver supremely
            beautifully, well-designed interior residential complexes to our clients. With us, our clients not only get
            a premium class of Residential interior designing services demanded but will also get a lifetime experience
            desired.</p>
        </div>
                           <a href="residentialservice-2.php" class="learn-more-link">Learn More</a>
      </div>

      <div class="section-container" id="section2">
        <h2>Designs that bring your team together.</h2>
        <div class="carousel">
          <div class="carousel-track">
            <img src="assets/images/commercial/9.webp" alt="Elegant residential living room">
                    <img src="assets/images/commercial/10.webp" alt="Modern residential bedroom">
                    <img src="assets/images/commercial/8.webp" alt="Stylish residential kitchen">
                    <img src="assets/images/commercial/4.webp" alt="Stylish residential kitchen">
                    <img src="assets/images/commercial/d1.jpg" alt="Stylish residential kitchen">
          </div>
        </div>
        <div class="info-container">
          <h3>Spaces That Work and Inspire</h3>
          <p>The right office design does more than look good — it boosts mood, focus, and how people feel at work. From
            open layouts to cozy corners, we shape spaces where teams actually want to show up and do their best.</p>
        </div>
        <div class="info-container">
          <h3>Designed Around Your Brand</h3>
          <p>Every element is planned to reflect your brand’s personality — from the colors and textures to the way
            people move through the space. The result? A workplace that feels on-brand, works better, and leaves a
            lasting impression.</p>
        </div>
                    <a href="renovation-2.php" class="learn-more-link">Learn More</a>
      </div>

      <div class="section-container" id="section3">
        <h2>New vibes, same address.</h2>
        <div class="carousel">
          <div class="carousel-track">
            <img src="assets/images/renovation/Majlis_NEW-0224_Corona Camera004.webp" alt="Elegant residential living room">
                  <img src="assets/images/renovation/Living Room Final Render_001 copy.webp" alt="Modern residential bedroom">
                  <img src="assets/images/renovation/Kitchen View 02.webp" alt="Stylish residential kitchen">
                  <img src="assets/images/renovation/MASTER BED ROOM Camera004.webp" alt="Stylish residential kitchen">
                  <img src="assets/images/renovation/Living Room Final Render_001 copy.webp" alt="Stylish residential kitchen">
                  <img src="assets/images/renovation/Master Bedroom View02_.webp" alt="Stylish residential kitchen">

          </div>
        </div>
        <div class="info-container">
          <h3>Your satisfaction comes first</h3>
          <p>Technology has had a meaningful impact on the renovation process, increasing the importance and strength of
            the planning stage. The availability of online design tools has improved visualization of the changes, at a
            fraction of the cost of hiring a professional interior designer. We renovate, renew, restore, refresh, and
            rejuvenate all mean to make like new. </p>
        </div>
        <div class="info-container">
          <h3>We got a big bag filled with experience</h3>
          <p>The thrill of a home renovation can quickly be diminished by unforeseen circumstances, stretched budgets,
            and other unexpected issues. The good news is that our company takes care of these problems with the best
            solutions ever possible. For us, it’s not just renovation, it’s a house makeover by restoring its original
            state or by honoring it by its original intention. With our company the soul of the old space will never be
            compromised. Its not work for us,</p>
        </div>
                    <a href="commercialservice-2.php" class="learn-more-link">Learn More</a>

      </div>

      <div class="section-container" id="section4">
        <h2>Fits your space. follows your style</h2>
        <div class="carousel">
          <div class="carousel-track">
           <img src="assets/images/services/kitchen002_Corona Camera002.webp" alt="Elegant residential living room">
                  <img src="assets/images/modular/chair.webp" alt="Modern residential bedroom">
                  <img src="assets/images/modular/cloths.webp" alt="Stylish residential kitchen">
                  <img src="assets/images/modular/homeInteriror.webp" alt="Stylish residential kitchen">
                  <img src="assets/images/modular/greenchair.webp" alt="Stylish residential kitchen">
                  <img src="assets/images/modular/living.webp" alt="Stylish residential kitchen">

          </div>
        </div>
        <div class="info-container">
          <h3>Customized Furniture, exclusively for you</h3>
          <p>Tailor every detail to match your taste and lifestyle with our customized furniture. Designed to blend
            functionality with elegance, each piece is thoughtfully crafted to suit your unique preferences, making
            every space truly yours. Experience the perfect balance of design, comfort, and durability in every
            creation.</p>
        </div>

                           <a href="modular-furniture-2.php" class="learn-more-link">Learn More</a>

      </div>
    </div>
  </section>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/Draggable.min.js"></script>
<script>
document.querySelectorAll('.carousel').forEach(carousel => {
  const track = carousel.querySelector('.carousel-track');
  const slides = Array.from(track.children);
  let index = 0;
  let slideWidth = carousel.clientWidth;
  let intervalId;
  const swipeThreshold = 50; // Minimum px movement to trigger slide change

  // --- Show slide instantly ---
  function showSlide(i) {
    index = (i + slides.length) % slides.length;
    track.style.transition = "transform 0.5s ease-in-out";
    track.style.transform = `translateX(${-index * slideWidth}px)`;
  }

  // --- Auto-play ---
  function startAutoPlay() {
    stopAutoPlay();
    intervalId = setInterval(() => showSlide(index + 1), 3000);
  }

  function stopAutoPlay() {
    if (intervalId) clearInterval(intervalId);
  }

  // --- Update slide width on resize ---
  function updateSlideWidth() {
    slideWidth = carousel.clientWidth;
    slides.forEach(slide => slide.style.width = slideWidth + "px");
    showSlide(index);
  }

  // --- Drag / Swipe Detection (jump only, no follow) ---
  let startX = 0;

  track.addEventListener('mousedown', dragStart);
  track.addEventListener('touchstart', dragStart, { passive: false });
function dragStart(e) {
    e.preventDefault(); // ✅ Prevent default image dragging
    stopAutoPlay();
    startX = e.type.includes('mouse') ? e.clientX : e.touches[0].clientX;

    document.addEventListener('mouseup', dragEnd);
    document.addEventListener('touchend', dragEnd);
}


  function dragEnd(e) {
    const endX = e.type.includes('mouse') ? e.clientX : e.changedTouches[0].clientX;
    const delta = endX - startX;

    if (delta < -swipeThreshold) showSlide(index + 1); // swipe left → next
    else if (delta > swipeThreshold) showSlide(index - 1); // swipe right → prev
    else showSlide(index); // too small → snap back

    startAutoPlay();

    document.removeEventListener('mouseup', dragEnd);
    document.removeEventListener('touchend', dragEnd);
  }

  // --- Initialize carousel ---
  updateSlideWidth();
  showSlide(0);
  startAutoPlay();
  window.addEventListener('resize', updateSlideWidth);
});
</script>










<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>

<!-- <script>
  // Register ScrollTrigger plugin
  gsap.registerPlugin(ScrollTrigger);

  // Get the elements
  const leftColumn = document.querySelector('.left-column');
  const servicesShowcase = document.querySelector('.services-showcase');

  // Use matchMedia to apply ScrollTrigger only on desktop
  ScrollTrigger.matchMedia({
    // Desktop screens
    "(min-width: 768px)": function() {
      ScrollTrigger.create({
        trigger: servicesShowcase,
        start: "top top",
        end: () => `bottom bottom`,
        pin: leftColumn,
        pinSpacing: false,
      });
    },
    
    // Mobile screens
    "(max-width: 767px)": function() {
      // Do nothing; left column scrolls normally
    }
  });
</script> -->

<script>
window.addEventListener("load", function() {
  const smoother = ScrollSmoother.get();
  if (!smoother) return;

  // Watch for the section to appear in the DOM
  const observer = new MutationObserver(() => {
    const section = document.querySelector(".services-showcase");
    const leftCol = document.querySelector(".left-column");

    if (section && leftCol) {
      // Pin the left column
      ScrollTrigger.create({
        trigger: section,
        start: "top top",
        end: () => section.offsetHeight - leftCol.offsetHeight,
        pin: leftCol,
        pinSpacing: false,
        scroller: smoother.content,
        scrub: true
      });

      observer.disconnect(); // stop observing once done
    }
  });

  observer.observe(document.body, { childList: true, subtree: true });
});
</script>



</body>

</html>