<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <<title>CONTACT US - Thethekedaar</title>
    <meta name="description" content="Send LET&#8217;S TALK Email us any questions and inquiries or call &#8230;&#8230; We would be happy to answer your questions and set up a meeting with you. Thekedaars at your service. BR OFFICE Black Street 12 Berlin, Germany +312345 654 [&hellip;]">
    <meta property="og:title" content="CONTACT US - Thethekedaar" />
    <meta property="og:description" content="Send LET&#8217;S TALK Email us any questions and inquiries or call &#8230;&#8230; We would be happy to answer your questions and set up a meeting with you. Thekedaars at your service. BR OFFICE Black Street 12 Berlin, Germany +312345 654 [&hellip;]" />
    <meta name="keywords" content="Interior Designers contact, Luxury Interior Designers contact , contact Interior Designers in delhi">
    <meta property="og:url" content="https://thethekedaar.in/contact-us-2" />
   <link rel="stylesheet" href="https://use.typekit.net/cmr7pve.css">



   <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/fav.png">
    <link rel="icon" type="image/x-icon" href="/assets/images/fav.png">

 <!-- Adobe Font (Headings) -->
  <link rel="stylesheet" href="https://use.typekit.net/cmr7pve.css">

  <!-- Google Font (Fira Code for monospace only) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">


  <!-- Font Awesome (icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Framer Motion -->
    <script src="https://unpkg.com/framer-motion@10.16.4/dist/framer-motion.js"></script>

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
        
        /* Additional styles for Framer Motion animations */
        .motion-element {
            will-change: transform, opacity;
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
  <img src="assets/images/contact/hero.webp" alt="The Thekedaar Hero Image" class="hero-image" style="height: 686px;">

  <div class="hero-content-container">
    <div class="hero-left">
      <h1 class="h1-desktop h1-sm">Contact Us</h1>
      <p class="p1-desktop">
        Get in touch with us to bring your dream space to life. Our team is ready to answer your queries and start your design journey today.
      </p>
    </div>
    <a href="contact-us-2.php" class="cta-button hero-cta">Book An Appointment</a>
  </div>
</section>


        <main class="contact-page">
            <!-- ======================= Contact Form Section ======================= -->
            <section class="contact-form-section">
                <div class="container">
                    <!-- The form needs an ID to be targeted by JavaScript -->
                    <form id="whatsapp-form" class="contact-form">
                        
                        <div class="form-grid">
                            <!-- Full Name -->
                            <div class="form-group">
                                <label for="full-name">Full Name</label>
                                <input type="text" id="full-name" name="fullName" required>
                            </div>
                            <!-- Email Address -->
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>

                        <!-- Services Interested In -->
                        <div class="form-group-tags">
                            <label>What Services Are You Interested In?</label>
                            <div class="tag-group">
                                <input type="radio" id="service1" name="service" value="Residential">
                                <label for="service1">Residential</label>
                                
                                <input type="radio" id="service2" name="service" value="Commercial" checked>
                                <label for="service2">Commercial</label>

                                <input type="radio" id="service3" name="service" value="Renovation">
                                <label for="service3">Renovation</label>

                                <input type="radio" id="service4" name="service" value="Architecture and Designing">
                                <label for="service4">Architecture and Designing</label>

                                <input type="radio" id="service5" name="service" value="Modular Furniture">
                                <label for="service5">Modular Furniture</label>
                            </div>
                        </div>

                        <!-- Location of Project -->
                        <div class="form-group-tags">
                            <label>Location Of The Project</label>
                            <div class="tag-group">
                                <input type="radio" id="location1" name="location" value="Delhi" checked>
                                <label for="location1">Delhi</label>

                                <input type="radio" id="location2" name="location" value="NCR">
                                <label for="location2">NCR</label>
                            </div>
                        </div>

                        <!-- Budget -->
                        <div class="form-group-tags">
                            <label>What Budget Are You Planning For This Project</label>
                            <div class="tag-group">
                                <input type="radio" id="budget1" name="budget" value="10 Lakh - 20 Lakh">
                                <label for="budget1">10 Lakh - 20 Lakh</label>

                                <input type="radio" id="budget2" name="budget" value="20 Lakh - 50 Lakh">
                                <label for="budget2">20 Lakh - 50 Lakh</label>

                                <input type="radio" id="budget3" name="budget" value="50 Lakh - 1 Crore">
                                <label for="budget3">50 Lakh - 1 Crore</label>

                                <input type="radio" id="budget4" name="budget" value="1 Crore - 1.5 Crore" checked>
                                <label for="budget4">1 Crore - 1.5 Crore</label>

                                <input type="radio" id="budget5" name="budget" value="More Than 1.5 Crore">
                                <label for="budget5">More Than 1.5 Crore</label>
                            </div>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="submit-button">Contact Us</button>
                            <div class="help-text">
                                <h3>Help us get this right</h3>
                                <p>Tell us a little about your remote project. This helps us giving you a better experience through our conversations.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!-- ======================= Map Section ======================= -->
           <section class="map-section">
  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.137397121612!2d77.13200767527395!3d28.6256212845645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0325aadf724d%3A0x252a7aaa48834a41!2sWHS%2C%20Block%20A%2C%20Kirti%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110015!5e0!3m2!1sen!2sin!4v1695886311654!5m2!1sen!2sin"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>

        </main>
    </main>

    <!-- ======================= Footer ======================= -->
    <?php include 'templates/footer.php'; ?>
       </div>
  </div>
    
    <script src="assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Framer Motion animations
            if (typeof motion !== 'undefined') {
                // Hero section animation
                const heroContent = document.querySelector('.hero-content-container');
                if (heroContent) {
                    motion(heroContent).initial({ opacity: 0, y: 20 })
                                      .animate({ opacity: 1, y: 0 })
                                      .transition({ duration: 0.8, ease: "easeOut" });
                }

                // Form section animation
                const formSections = document.querySelectorAll('.form-group, .form-group-tags');
                formSections.forEach((section, index) => {
                    motion(section).initial({ opacity: 0, x: -20 })
                                  .animate({ opacity: 1, x: 0 })
                                  .transition({ duration: 0.5, delay: index * 0.1, ease: "easeOut" });
                });

                // Submit button animation
                const submitButton = document.querySelector('.submit-button');
                if (submitButton) {
                    motion(submitButton).hover(
                        { scale: 1.05 },
                        { duration: 0.2 }
                    ).tap(
                        { scale: 0.95 }
                    );
                }

                // Form radio buttons animation
                const radioLabels = document.querySelectorAll('.tag-group label');
                radioLabels.forEach(label => {
                    motion(label).hover(
                        { scale: 1.03 },
                        { duration: 0.2 }
                    );
                });

                // Map section animation
                const mapSection = document.querySelector('.map-section');
                if (mapSection) {
                    motion(mapSection).initial({ opacity: 0 })
                                     .animate({ opacity: 1 })
                                     .transition({ duration: 1, delay: 0.5 });
                }
            }

            // ======================= WhatsApp Form Submission =======================
            const whatsappForm = document.getElementById('whatsapp-form');

            // Only run this code if the form exists on the current page
            if (whatsappForm) {
                
                whatsappForm.addEventListener('submit', function(e) {
                    e.preventDefault(); // Prevent the default form submission

                    // IMPORTANT: Replace this with your own WhatsApp number in international format
                    // Do NOT include '+' or '00'. For example, if your number is +91 12345 67890, use 911234567890
                    const phoneNumber = '8192812557'; 

                    // Get form values
                    const fullName = document.getElementById('full-name').value;
                    const email = document.getElementById('email').value;
                    
                    // Get the value of the selected radio button for each group
                    const service = document.querySelector('input[name="service"]:checked').value;
                    const location = document.querySelector('input[name="location"]:checked').value;
                    const budget = document.querySelector('input[name="budget"]:checked').value;

                    // Construct the message
                    const message = `Hello, I'd like to book an appointment.\n\n` +
                                    `*Full Name:* ${fullName}\n` +
                                    `*Email:* ${email}\n\n` +
                                    `*Interested Service:* ${service}\n` +
                                    `*Project Location:* ${location}\n` +
                                    `*Estimated Budget:* ${budget}\n\n` +
                                    `Looking forward to hearing from you.`;

                    // Encode the message for the URL
                    const encodedMessage = encodeURIComponent(message);

                    // Create the WhatsApp URL
                    const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

                    // Add animation to the button before redirecting
                    const submitBtn = document.querySelector('.submit-button');
                    if (typeof motion !== 'undefined' && submitBtn) {
                        motion(submitBtn).animate({ 
                            scale: [1, 0.9, 1],
                            backgroundColor: ["#yourColor", "#successColor"] 
                        }).transition({ duration: 0.5 }).then(() => {
                            // Redirect the user to WhatsApp after animation
                            window.open(whatsappURL, '_blank');
                        });
                    } else {
                        // Redirect immediately if motion is not available
                        window.open(whatsappURL, '_blank');
                    }
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollSmoother.min.js"></script>
<script>
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

  ScrollSmoother.create({
    wrapper: "#smooth-wrapper", // outer wrapper
    content: "#smooth-content", // scrolling content
    smooth: 1.2,                // speed (lower = faster response)
    effects: true               // allow data-speed / parallax effects
  });
</script>

</body>
</html>