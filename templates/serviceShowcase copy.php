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
  background-color: #0C0503;
  margin: 0;
  /* scroll-behavior: smooth; */
}

:root {
  --black: #0C0503;
  --white: #E6E6E6;
  --accent: #FAEFDF;
  --grey: #292929;
  --light-grey: #CCCCCC;

  --font-primary: "Aloevera Display", sans-serif; /* Paragraphs */
  --font-secondary: "the-seasons";                /* Headings */
  --font-monospace: "Fira Code", monospace;
  --font-headings: var(--font-display);
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
  gap: 12px;
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
  display: flex;
  flex-direction: column;
  gap: 8px;
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

.left-column .nav-links li{
  margin-bottom: 8  px;
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

.carousel.is-infinite {
  cursor: grab;
  touch-action: pan-y;
  user-select: none;
  -webkit-user-select: none;
}

.carousel.is-infinite.is-dragging {
  cursor: grabbing;
}

.carousel.is-infinite .carousel-track {
  position: relative;
  display: block;
  height: 400px;
  transition: none;
}

.carousel.is-infinite .carousel-track img {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  max-width: none;
  height: 400px;
  flex: none;
  user-select: none;
  -webkit-user-drag: none;
  pointer-events: none;
  will-change: transform;
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

  .carousel.is-infinite .carousel-track,
  .carousel.is-infinite .carousel-track img {
    height: 300px;
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
    gap: 12px; /* Smaller gap between stacked nav links */
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

  .carousel.is-infinite .carousel-track,
  .carousel.is-infinite .carousel-track img {
    height: 200px;
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
          <li><a href="#section5">2D 3D Design</a></li>
          <li><a href="#section6">Architectural Designing</a></li>
          <li><a href="#section7">GYM Interior Designers</a></li>
          <li><a href="#section8">Hotel Interior Designers</a></li>
          <li><a href="#section9">Villa Interior Designers</a></li>
        </ul>
      </nav>
      <button class="contact-btn" onclick="window.location.href='contact-us-2'">Contact Us</button>
    </div>


    <!-- Right Column -->
    <div class="right-column">
      <!-- Section Containers -->
      <?php
      $sectionOneCarouselImages = [
        ["src" => "assets/images/services/Ala Restraunt_Corona Camera005.webp", "alt" => "Commercial interior designers"],
        ["src" => "assets/images/residential/1_Post.webp", "alt" => "Luxury interior designers in Delhi"],
        ["src" => "assets/images/residential/fAMILY ROOM_Corona Camera007.webp", "alt" => "Luxury interior designers"],
        ["src" => "assets/images/residential/FF_Seating area_Camera002.webp", "alt" => "Luxury interior designers in Delhi"],
        ["src" => "assets/images/residential/Father's Room View 01.webp", "alt" => "Residential interior designers in Delhi"],
      ];
      ?>
      <div class="section-container" id="section1">
        <h2>Home layouts tailored to your lifestyle.</h2>
        <div class="carousel">
          <!-- Carousel Images -->
          <div class="carousel-track">
            <?php foreach ($sectionOneCarouselImages as $image): ?>
              <img src="<?= htmlspecialchars($image['src'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($image['alt'], ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($image['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy" draggable="false">
            <?php endforeach; ?>
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
            <a href="residential-interior-desigining" class="learn-more-link">Learn More</a>
      </div>

      <div class="section-container" id="section2">
        <h2>Designs that bring your team together.</h2>
        <div class="carousel">
          <div class="carousel-track">
            <img src="assets/images/commercial/9.webp" alt="Interior designers in Delhi" title="Interior designers in Delhi" loading="lazy">
                    <img src="assets/images/commercial/10.webp" alt="Best interior designers in Delhi" title=" Best interior designers in Delhi" loading="lazy">
                    <img src="assets/images/commercial/8.webp" alt="Top interior designers in Delhi" title="Top interior designers in Delhi" loading="lazy">
                    <img src="assets/images/commercial/4.webp" alt="Interior Designer in Delhi" title="Interior Designer in Delhi" loading="lazy">
                    <img src="assets/images/commercial/d1.jpg" alt="Home Interior Designers" title="Home Interior Designers" loading="lazy">
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
                    <a href="commercial-interior-design" class="learn-more-link">Learn More</a>
      </div>

      <div class="section-container" id="section3">
        <h2>New vibes, same address.</h2>
        <div class="carousel">
          <div class="carousel-track">
            <img src="assets/images/renovation/Majlis_NEW-0224_Corona Camera004.webp" alt="Residential Designers in Delhi" title="Residential Designers in Delhi" loading="lazy">
                  <img src="assets/images/renovation/Living Room Final Render_001 copy.webp" alt="Modern Interior Designers" title="Modern Interior Designers" loading="lazy">
                  <img src="assets/images/renovation/Kitchen View 02.webp" alt="Interior design services in Delhi" title="Interior design services in Delhi" loading="lazy">
                  <img src="assets/images/renovation/MASTER BED ROOM Camera004.webp" alt="Residential interior designers" title="Residential interior designers" loading="lazy">
                  <img src="assets/images/renovation/Living Room Final Render_001 copy.webp" alt="Commercial interior designers in Delhi" title="Commercial interior designers in Delhi" loading="lazy">
                  <img src="assets/images/renovation/Master Bedroom View02_.webp" alt="Residential interior designers in Delhi" title="Residential interior designers in Delhi" loading="lazy">

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
          <p>A home renovation is an opportunity to reimagine your space, preserve its character, and give it a renewed sense of identity. At The Thekedaar, we approach every transformation with thoughtful planning, creative vision, and meticulous execution. For us, renovation goes beyond a makeover; it is about honouring the original architecture and intention of a space while introducing a refined new perspective. We believe the soul of an existing space should never be compromised. Its history, character, and individuality remain at the heart of everything we create. It's not just work for us;</p>
        </div>
                    <a href="/renovation-2" class="learn-more-link">Learn More</a>

      </div>

      <div class="section-container" id="section4">
        <h2>Fits your space. follows your style</h2>
        <div class="carousel">
          <div class="carousel-track">
           <img src="assets/images/services/kitchen002_Corona Camera002.webp" alt="Commercial interior designers" title="Commercial interior designers" loading="lazy">
                  <img src="assets/images/modular/chair.webp" alt="Luxury interior designers in Delhi" title="Luxury interior designers in Delhi" loading="lazy">
                  <img src="assets/images/modular/cloths.webp" alt="Luxury interior designers" title="Luxury interior designers" loading="lazy">
                  <img src="assets/images/modular/homeInteriror.webp" alt="Interior designers in Delhi" title="Interior designers in Delhi" loading="lazy">
                  <img src="assets/images/modular/greenchair.webp" alt="Best interior designers in Delhi" title=" Best interior designers in Delhi" loading="lazy">
                  <img src="assets/images/modular/living.webp" alt="Top interior designers in Delhi"  title="Top interior designers in Delhi" loading="lazy">

          </div>
        </div>
        <div class="info-container">
          <h3>Customized Furniture, exclusively for you</h3>
          <p>Tailor every detail to match your taste and lifestyle with our customized furniture. Designed to blend
            functionality with elegance, each piece is thoughtfully crafted to suit your unique preferences, making
            every space truly yours. Experience the perfect balance of design, comfort, and durability in every
            creation.</p>
        </div>

                           <a href="modular-furniture-2" class="learn-more-link">Learn More</a>

      </div>

      <div class="section-container" id="section5">
        <h2>2D 3D Design</h2>
        <div class="carousel">
          <!-- Carousel Images -->
          <div class="carousel-track">
            <img src="/assets/images/process/analyzing-architectural-designs-on-computer-monito-2025-03-06-15-12-47-ut2.webp" alt="Commercial interior designers" title="Commercial interior designers" loading="lazy">
            </div>
        </div>
        <div class="info-container">
          <h3>Transform Your Space with Expert 2D & 3D Designs</h3>
          <p>Present day technology is so advanced that it allows us to generate realistic 2D-3D interior images of your house</p>
        </div>
        
                           <a href="/2d-3d-design-2" class="learn-more-link">Learn More</a>
      </div>

      <div class="section-container" id="section6">
        <h2>Architectural Designing</h2>
        <div class="carousel">
          <!-- Carousel Images -->
          <div class="carousel-track">
            <img src="/images/about us.webp" alt="Commercial interior designers" title="Commercial interior designers" loading="lazy">
            </div>
        </div>
        <div class="info-container">
          <h3>Building Timeless Structures with Innovative Architectural Design</h3>
          <p>Present day technology is so advanced that it allows us to generate realistic 2D-3D interior images of your house. 2D layouts design is the creation of two-dimensional images for various applications like electrical, mechanical and different fittings of architecture in a residential or commercial space. It is basically the layout or diagram of property or space from above where 3D models are a potent tool for interior designers to effectively communicate designs to their clients via three-dimensional visualization, increasing project approval rates. 3D interior design shifts the control to the hands of clients by enabling them to alter or transform designs. By using 2D-3D conversions, it provides a high resolution and detailed view of the house or space and make it more appealing and alluring. With Thekedaars, it’s easy to create beautiful 3D house plans. We provide high-quality 2D and 3D Floor plans quickly and easily.</p>
        </div>
        
                           <a href="/architectural-desigining-2" class="learn-more-link">Learn More</a>
      </div>

      <div class="section-container" id="section7">
        <h2>GYM Interior Designers</h2>
        <div class="carousel">
          <!-- Carousel Images -->
          <div class="carousel-track">
            <img src="/assets/images/commercial/2.webp" alt="Commercial interior designers" title="Commercial interior designers" loading="lazy">
            </div>
        </div>
        <div class="info-container">
          <h3>Designing Functional and Stylish Interiors for Modern Gyms</h3>
          <p>If you have recently purchased space for your commercial fitness center and want to make it beautiful and functional, go nowhere and hire the best interior designs. But if you want to renovate your current Gym and enhance the training experience of your members, you may need a creative interior designer.</p>
        </div>
        
                           <a href="/luxury-gym-interior-designers" class="learn-more-link">Learn More</a>
      </div>

      <div class="section-container" id="section8">
        <h2>Hotel Interior Designers</h2>
        <div class="carousel">
          <!-- Carousel Images -->
          <div class="carousel-track">
            <img src="assets/images/services/Ala Restraunt_Corona Camera005.webp" alt="Commercial interior designers" title="Commercial interior designers" loading="lazy">
            </div>
        </div>
        <div class="info-container">
          <h3>Creating Luxurious and Comfortable Interiors for Hotels</h3>
          <p>Every area in hospitality interiors is now designed with a specific purpose in mind to meet the needs of all guests, whether they want to stay in their rooms or see hotels as a new place to conduct business, network, socialize, or unwind.</p>
        </div>
        
                           <a href="/luxury-hotel-interior-designers" class="learn-more-link">Learn More</a>
      </div>

      <div class="section-container" id="section9">
        <h2>Villa Interior Designers</h2>
        <div class="carousel">
          <!-- Carousel Images -->
          <div class="carousel-track">
            <img src="assets/images/about1.png" alt="Commercial interior designers" title="Commercial interior designers" loading="lazy">
            </div>
        </div>
        <div class="info-container">
          <h3>Crafting Elegant and Personalized Interiors for Your Villa</h3>
          <p>An interior designer is a licensed member of a world organization of design professionals that spreads joy and fulfills aspirations. Both the practice of interior decoration and a range of design courses are taught to them.</p>
        </div>
            <a href="/luxury-villa-interior-designers-in-delhi" class="learn-more-link">Learn More</a>
      </div>

    </div>
  </section>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/Draggable.min.js"></script>
<script>
/*
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
*/
</script>

<script>
(() => {
  if (typeof gsap === 'undefined' || typeof Draggable === 'undefined') return;
  gsap.registerPlugin(Draggable);

  document.querySelectorAll('.carousel').forEach(carousel => {
    const track = carousel.querySelector('.carousel-track');
    const slides = Array.from(track.querySelectorAll('img'));
    if (slides.length < 2) return;

    carousel.classList.add('is-infinite');

    const proxy = document.createElement('div');
    proxy.setAttribute('aria-hidden', 'true');
    proxy.style.cssText = 'position:absolute;width:1px;height:1px;visibility:hidden;pointer-events:none;';
    carousel.appendChild(proxy);

    const offset = { x: 0 };
    let slideWidth = carousel.clientWidth;
    let dragStartX = 0;
    let offsetAtPress = 0;
    let lastSampleX = 0;
    let lastSampleTime = 0;
    let velocity = 0;
    let momentumTween;

    function positionSlides() {
      if (!slideWidth) return;

      const loopWidth = slideWidth * slides.length;
      slides.forEach((slide, index) => {
        const x = ((index * slideWidth + offset.x + slideWidth) % loopWidth + loopWidth) % loopWidth - slideWidth;
        gsap.set(slide, { x });
      });
    }

    function updateSlideWidth() {
      slideWidth = carousel.clientWidth;
      positionSlides();
    }

    carousel.addEventListener('dragstart', event => event.preventDefault());

    Draggable.create(proxy, {
      type: 'x',
      trigger: carousel,
      minimumMovement: 3,
      allowNativeTouchScrolling: true,
      onPress: function() {
        if (momentumTween) momentumTween.kill();
        carousel.classList.add('is-dragging');
        dragStartX = this.x;
        offsetAtPress = offset.x;
        lastSampleX = offset.x;
        lastSampleTime = performance.now();
        velocity = 0;
      },
      onDrag: function() {
        offset.x = offsetAtPress + this.x - dragStartX;

        const now = performance.now();
        const elapsed = now - lastSampleTime;
        if (elapsed > 0) {
          const measuredVelocity = ((offset.x - lastSampleX) / elapsed) * 1000;
          velocity = velocity * 0.65 + measuredVelocity * 0.35;
        }
        lastSampleX = offset.x;
        lastSampleTime = now;
        positionSlides();
      },
      onRelease: function() {
        carousel.classList.remove('is-dragging');

        const momentumDistance = gsap.utils.clamp(-slideWidth * 2, slideWidth * 2, velocity * 0.3);
        const targetOffset = Math.round((offset.x + momentumDistance) / slideWidth) * slideWidth;
        if (Math.abs(targetOffset - offset.x) < 0.5) return;

        momentumTween = gsap.to(offset, {
          x: targetOffset,
          duration: 0.85,
          ease: 'power3.out',
          onUpdate: positionSlides
        });
      }
    });

    updateSlideWidth();
    if ('ResizeObserver' in window) {
      const resizeObserver = new ResizeObserver(updateSlideWidth);
      resizeObserver.observe(carousel);
    } else {
      window.addEventListener('resize', updateSlideWidth);
    }
  });
})();
</script>










<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>

<script>
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
</script>





</body>

</html>