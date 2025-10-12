<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index" />
    <meta content="FOLLOW, INDEX, ALL" name="robots" />


    <title>Portfolio - thethekedaar</title>
  <meta name="description" content="We believe that your home should tell you the story of who you are and be a collection of what you love. We believe that it should be able to connect the client&nbsp;...">
  <meta name="keywords" content="Portfolio Interior Design, Luxury Interior Designers Portfolio, Portfolio Interior Designers">
  <meta property="og:title" content="Portfolio - Thethekedaar" />
  <meta property="og:description" content="We believe that your home should tell you the story of who you are and be a collection of what you love. We believe that it should be able to connect the client&nbsp;..." />
  <meta property="og:url" content="https://thethekedaar.in/portfolio" />
  <meta property="og:image" content="./images/portfolio/work3.jpg" />
  <link rel="canonical" href="https://thethekedaar.in/portfolio">
    

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/fav.png">
    <link rel="icon" type="image/x-icon" href="/assets/images/fav.png">

    <!-- Adobe Font (Headings) -->
  <link rel="stylesheet" href="https://use.typekit.net/cmr7pve.css">

  <!-- Google Font (Fira Code for monospace only) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">

    <!-- Font Awesome (for social icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>

        /* ======================= Enhance Section Slider Styles ======================= */

/* Keep the existing styles for the main section container */
.enhance-section {
    padding: 100px 0;
    background-color: #121212;
}

/* Styles for the content within each slide */
.enhance-slider .slider-item {
    text-align: center;
}

.enhance-slider .slider-item .section-title {
    margin-bottom: 40px;
}

.enhance-slider .slider-item img {
    width: 100%;
    height: auto;
    display: block;
}

/* Tiny Slider's gallery mode (fade transition) can sometimes cause layout issues.
   This helper class from the library's documentation fixes it. */
.tns-gallery > .tns-item {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    opacity: 0;
    transition: opacity 800ms ease-in-out;
}
.tns-gallery > .tns-slide-active {
    opacity: 1;
    z-index: 1;
}
    </style>
</head>
<body>
     <div id="smooth-wrapper">
    <div id="smooth-content">

    <!-- ======================= Header ======================= -->

       <?php include 'templates/header.php'; ?>
   

    <!-- ======================= Main Content ======================= -->
   <main>
    <!-- Hero Section -->
   
    


 <section class="hero-section">
  <img src="assets/images/portfolio/tropical-style-resort-suite-living-re-2025-01-08-23-48-28-utc.webp" alt="The Thekedaar Hero Image" class="hero-image">

  <div class="hero-content-container">
    <div class="hero-left">
      <h1 class="h1-desktop h1-sm">Our Portfolio</h1>
                      <p class="p1-desktop">Spaces reimagined with elegance and precision. Each project reflects timeless design, personalized details, and uncompromised quality.</p>

    </div>
    <a href="contact-us-2" class="cta-button hero-cta">Book An Appointment</a>
  </div>
</section>

<!-- ======================= Stats Section ======================= -->
<section class="stats-section">
  <div class="stats-grid container">
    <div class="stats-content">
      <!-- Stat 1 -->
      <div class="stat-item">
        <div class="stat-number" data-target="80" data-plus="true">0<span class="plus-sign">+</span></div>
        <p class="stat-label-italic">Satisfied families</p>
      </div>
      <!-- Stat 2 -->
      <div class="stat-item stat-item-centered">
        <p class="stat-label">Across</p>
        <div class="stat-number" data-target="4">0</div>
        <p class="stat-label">Countries</p>
      </div>
    </div>

    <div class="stats-image">
      <img src="assets/images/portfolio/sofa-and-chairs-in-modern-penthouse-2025-04-04-03-23-57-utc.webp"
        alt="Modern luxurious interior with large windows overlooking a sunset.">
      <a href="contact-us-2" class="inline-contact-link stats-contact-link">Contact Us</a>
    </div>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-number");

  const animateCounter = (counter) => {
    const target = +counter.getAttribute("data-target");
    const hasPlus = counter.getAttribute("data-plus") === "true";
    let current = 0;
    const increment = Math.ceil(target / 100);

    const updateCounter = () => {
      current += increment;
      if (current >= target) current = target;

      // Always keep + if needed
      counter.textContent = current;
      if (hasPlus) counter.innerHTML = current + "<span class='plus-sign'>+</span>";

      if (current < target) {
        requestAnimationFrame(updateCounter);
      }
    };

    updateCounter();
  };

  // Animate only when visible
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.3 }
  );

  counters.forEach((counter) => observer.observe(counter));
});
</script>



    
   <!-- ======================= Enhance Section (As an Autoplaying Slider) ======================= -->

   <?php include 'templates/portfolio2.php'; ?>

    
</main>

    <!-- ======================= Footer ======================= -->
    <?php include 'templates/footer.php'; ?>
    
       </div>
  </div>
    <script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollSmoother.min.js"></script>
<script>
    
    // Register GSAP plugins
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

// Only initialize if ScrollSmoother is supported
if (ScrollSmoother.isSupported()) {
  ScrollSmoother.create({
    wrapper: "#smooth-wrapper",   // outer wrapper
    content: "#smooth-content",   // inner scroll content
    smooth: 1.2,                  // scroll smoothing (1 = default speed)
    effects: true                 // enable data-speed & data-lag effects
  });
}

// Optional: add simple fade-in on scroll using ScrollTrigger
gsap.utils.toArray(".fade-in").forEach((elem) => {
  gsap.from(elem, {
    scrollTrigger: {
      trigger: elem,
      start: "top 80%",
      toggleActions: "play none none none"
    },
    y: 50,
    opacity: 0,
    duration: 1
  });
});

</script>
</body>
</html>