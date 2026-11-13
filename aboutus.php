<!DOCTYPE html>
<html lang="en">
<head>
    <title>About us - thethekedaar</title>  
    
    <meta name="robots" content="index" />
    <meta content="FOLLOW, INDEX, ALL" name="robots" />
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Thethekedaar.in Home is where emotion resides, memories are made, and laughter never ends. We make one for you because, in their home, people are typically happiest, and that&#8217;s what our ultimate motto is, making our customers happy. There is far more [&hellip;]">
    <meta name="keywords" content="aboutus thethekedaar, thethekedaar aboutus">
    <meta property="og:title" content="Aboutus - Thethekedaar" />
    <meta property="og:description" content="The Thethekedaar.in Home is where emotion resides, memories are made, and laughter never ends. We make one for you because, in their home, people are typically happiest, and that&#8217;s what our ultimate motto is, making our customers happy. There is far more [&hellip;]" />
    <meta property="og:url" content="https://thethekedaar.in/aboutus" />

    <?php include 'SEOhead.php'; ?>

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

    <!-- Framer Motion -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/framer-motion/10.16.4/framer-motion.min.js"></script>

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>




        /* Animation utility classes that won't conflict with existing CSS */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .stagger-children > * {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .stagger-children.visible > * {
            opacity: 1;
            transform: translateY(0);
        }
        
        .stagger-children.visible > *:nth-child(1) { transition-delay: 0.1s; }
        .stagger-children.visible > *:nth-child(2) { transition-delay: 0.2s; }
        .stagger-children.visible > *:nth-child(3) { transition-delay: 0.3s; }
        .stagger-children.visible > *:nth-child(4) { transition-delay: 0.4s; }
        .stagger-children.visible > *:nth-child(5) { transition-delay: 0.5s; }
        
        .scale-in {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .scale-in.visible {
            opacity: 1;
            transform: scale(1);
        }

.define-homes-grid1 {
    display: flex;
    grid-template-columns: 1fr 1.2fr;
    gap: 279px;
    margin: 0px 15px 110px 15px;
    justify-content: space-between;
    align-items: flex-end;

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
  <img src="assets/images/about/hero.webp" alt="Interior designers in Delhi" title="Interior designers in Delhi" class="hero-image">

  <div class="hero-content-container">
    <div class="hero-left">
      <h1 class="h1-desktop">About Us</h1>
      <p class="p1-desktop">
        A Delhi interior design studio with a timeless, sophisticated signature approach 
        to delivering classic and contemporary interiors.
      </p>
    </div>
    <a href="contact-us-2" class="cta-button hero-cta">Book An Appointment</a>
  </div>
</section>

            <!-- <a href="contact-us-2" class="cta-button hero-cta fade-in" style="transition-delay: 0.3s;">Book An Appointment</a> -->
    
    <!-- We Define Homes Section -->
   

    <section class="founder-section">
    <div class="container founder-grid">
        <h2 class="section-title founder-heading ">Company mission</h2>
        
        <div class="founder-image">
            <img src="assets/images/about/11.webp" alt="Best interior designers in Delhi" title="Best interior designers in Delhi">
        </div>
        
        <div class="founder-details">
            <p>Home is where love resides, memories are created and laughter never ends and we make one for you because people usually are happiest at their home and that's what our ultimate motto is, making our clients happy.</p>
        </div>
    </div>
</section>

 
<?php include 'templates/founder.php'; ?>
<?php include 'templates/our-team.php'; ?>

    <!-- ======================= More Info Section ======================= -->
    <?php include 'templates/lttleAboutUs.php'; ?>
   
    <!-- ======================= Our Designing Process Section ======================= -->
    <?php include 'templates/designProcess.php'; ?>

    <!-- ======================= Video Gallery Section ======================= -->
   <?php include 'templates/video.php';?>
    
    <!-- ======================= Service Section ======================= -->
    <?php include 'templates/serviceShowcase.php'; ?>
    <!-- ======================= Testimonials Section ======================= -->
    <?php include 'templates/testimonials.php'; ?>


  
   

</main>

    <!-- ======================= Footer ======================= -->
    <?php include 'templates/footer.php'; ?>
    
       </div>
  </div>
    <script src="assets/js/main.js"></script>
    
    <script>
        // Intersection Observer for scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in, .scale-in, .stagger-children');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });
            
            fadeElements.forEach(element => {
                observer.observe(element);
            });
            
            // Smooth scroll for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollSmoother.min.js"></script>



</body>
</html>
