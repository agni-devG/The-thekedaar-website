<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index" />
    <meta content="FOLLOW, INDEX, ALL" name="robots" />

    
    <title>CONTACT US - Thethekedaar</title>
    <meta name="description" content="Send LET&#8217;S TALK Email us any questions and inquiries or call &#8230;&#8230; We would be happy to answer your questions and set up a meeting with you. Thekedaars at your service. BR OFFICE Black Street 12 Berlin, Germany +312345 654 [&hellip;]">
    <meta property="og:title" content="CONTACT US - Thethekedaar" />
    <meta property="og:description" content="Send LET&#8217;S TALK Email us any questions and inquiries or call &#8230;&#8230; We would be happy to answer your questions and set up a meeting with you. Thekedaars at your service. BR OFFICE Black Street 12 Berlin, Germany +312345 654 [&hellip;]" />
    <meta name="keywords" content="Interior Designers contact, Luxury Interior Designers contact , contact Interior Designers in delhi">
    <meta property="og:url" content="https://thethekedaar.in/contact-us-2" />

    <?php include 'SEOhead.php'; ?>
    
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

        .message {
    padding: 15px;
    border-radius: 4px;
    margin-bottom: 20px;
    display: none;
}

.message.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.message.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}


/* overlay */

.dialog-overlay {
    display: none; /* Hidden by default */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4); /* semi-transparent background */
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.dialog-box {
    background: #fff;
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    max-width: 400px;
    width: 90%;
    text-align: center;
    font-family: Arial, sans-serif;
    position: relative;
}

.dialog-close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 22px;
    font-weight: bold;
    color: #555;
    cursor: pointer;
}

.dialog-close:hover {
    color: #000;
}

#dialog-message {
    font-size: 16px;
    margin-top: 20px;
    word-wrap: break-word;
}

@media screen and (max-width: 500px) {
    .dialog-box {
        padding: 20px;
        font-size: 14px;
    }
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
  <img src="assets/images/contact/hero.webp" alt="Residential Designers in Delhi" title="Residential Designers in Delhi" class="hero-image" style="height: 686px;">

  <div class="hero-content-container">
    <div class="hero-left">
      <h1 class="h1-desktop h1-sm">Contact Us</h1>
      <p class="p1-desktop">
        Get in touch with us to bring your dream space to life. Our team is ready to answer your queries and start your design journey today.
      </p>
    </div>
    <a href="contact-us-2" class="cta-button hero-cta">Book An Appointment</a>
  </div>
</section>

        <div id="message" class="message"></div>
        <main class="contact-page">
            <!-- ======================= Contact Form Section ======================= -->
            <section class="contact-form-section">
                <div class="container">
                    <!-- The form needs an ID to be targeted by JavaScript -->
                    <form id="whatsapp-form" class="contact-form"  method="POST" action="send-mail">
                        
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

                    <!-- Dialog Box -->
                        <div id="form-dialog" class="dialog-overlay">
                            <div class="dialog-box">
                                <span id="dialog-close" class="dialog-close">&times;</span>
                                <p id="dialog-message"></p>
                            </div>
                        </div>

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
    <?php include 'footer.php'; ?>
       </div>
  </div>
    
    <script src="assets/js/main.js"></script>



        <!-- ===================  Current form code  ======================= -->

<script>
    // Get form elements
const form = document.getElementById('whatsapp-form');
const submitButton = form.querySelector('.submit-button');
const dialog = document.getElementById('form-dialog');
const dialogMessage = document.getElementById('dialog-message');
const dialogClose = document.getElementById('dialog-close');

// Ensure dialog is hidden on page load
dialog.style.display = 'none';

// Close dialog when user clicks the close button
dialogClose.addEventListener('click', () => {
    dialog.style.display = 'none';
});

// Function to show the dialog with a message
function showDialog(message, isSuccess = true) {
    dialogMessage.textContent = message;
    dialogMessage.style.color = isSuccess ? 'green' : 'red';
    dialog.style.display = 'flex';
}

// Handle form submission
form.addEventListener('submit', async function(e) {
    e.preventDefault();

    // Disable submit button immediately
    submitButton.disabled = true;
    submitButton.textContent = "Submitting...";

    const formData = new FormData(form);

    try {
        const response = await fetch('send-mail.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        // Show dialog with message
        showDialog(result.message, result.status === 'success');

        if(result.status === 'success'){
            submitButton.textContent = "Submitted!";
        } else {
            // Re-enable button if error
            submitButton.disabled = false;
            submitButton.textContent = "Contact Us";
        }

    } catch (error) {
        showDialog("Something went wrong. Please try again.", false);

        // Re-enable button
        submitButton.disabled = false;
        submitButton.textContent = "Contact Us";
    }
});

</script>





        <!-- ===================  Temp form code  ======================= -->
<!-- <script>
document.getElementById('whatsapp-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);

    fetch('send-mail.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(result => {
        console.log(result);
        alert(result); // shows success or PHPMailer error
    })
    .catch(err => alert("Network error: " + err));
});
</script> -->



</body>
</html>