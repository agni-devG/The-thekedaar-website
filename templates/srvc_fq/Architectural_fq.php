<?php
// f&q.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions - Thethekedaar</title>
     <!-- Google Font (Fira Code for monospace only) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <style>
       /* ======================= FAQ Section ======================= */
.faq-section {
    background-color: var(--black, #111);
    padding: auto;
    color: var(--white, #fff);
    font-family: "proxima-nova", serif;
    margin-right: 240px;
    margin-bottom: 150px;
    margin-left: 15px;
}

.faq-section .h1-desktop {
    margin-bottom: 32px;
    text-align: left;
    font-size: 52px;
    margin-top: 168px;
}

/* Removed borders */
.faq-item {
    border: none;
}

/* Aloe Vera font for both Q & A */
.faq-question,
.faq-answer p {
    font-family: "Aloevera Display", sans-serif;
    color: var(--white);
}



/* FAQ Question */
.faq-question {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: none;
    border: none;
    color: var(--white, #fff);
    padding: 10px 0;
    text-align: left;
    font-size: 18px;
    cursor: pointer;
}

/* FAQ Answer with 85% opacity */
.faq-answer {
    max-height: none; /* remove 500px limit */
    overflow: hidden;
    transition: none; /* remove transition, GSAP will handle it */
    padding: 0;
    opacity: 0;
    display: none;
}

.faq-answer p {
    padding-bottom: 25px;
    line-height: 1.6;
        opacity: 80%;

}

.faq-answer ul{
      font-family: "Aloevera Display", sans-serif;
    /* color: var(--white); */
    color: rgba(255, 255, 255, 0.85); /* 85% opacity */
    opacity: 80%;
    list-style-type: disc; /* default: disc, can be circle, square, none */
  margin-left: 20px;     /* spacing from the left */
  

}


.faq-item.active .faq-icon {
    transform: rotate(45deg); /* turns + into × */
}

/* Mobile */
@media (max-width: 992px) {
    .faq-section {
        padding: 20px;
        margin-right: 7px;
        margin: 0;
    }

    .faq-section .h1-desktop {
        font-size: 36px;
        margin-bottom: 30px;
    }

    .faq-question {
        font-size: 14px;
        padding: 20px 0;
    }

    .faq-icon {
        font-size: 24px;
    }

    .faq-answer p {
        font-size: 14px;
        line-height: 110%;
        padding-bottom: 20px;
    }

    .faq-section .h1-desktop {
    margin-bottom: 32px;
    text-align: left;
    font-size: 36px;
    line-height: 100%;
    margin-top: 8px;
}
}

    </style>
     <!-- Adobe Font (Headings) -->
  <link rel="stylesheet" href="https://use.typekit.net/cmr7pve.css">

<!-- Adobe Font (Headings) -->
  <link rel="stylesheet" href="https://use.typekit.net/cmr7pve.css">

  <!-- Google Font (Fira Code for monospace only) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">

  <!-- Font Awesome (icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- ======================= FAQ Section ======================= -->
    <section class="faq-section">
    <div class="container">
        <h2 class="h1-desktop">Frequently Asked Questions</h2>
        <div class="faq-container">

            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How much does architectural designing cost in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost depends on project size and complexity:</p>
                    <ul>
                        <li>Residential projects: ₹100–₹400 per sq. ft.</li>
                        <li>Commercial projects: ₹200–₹800 per sq. ft.</li>
                        <li>Premium or luxury designs may cost more.</li>

                    </ul>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What services do architectural designers offer?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <ul>
                        <li>Concept planning and design</li>
                        <li>2D & 3D drawings</li>
                        <li>Structural design and space planning</li>
                        <li>Landscaping and elevation design</li>
                        <li>Interior and exterior coordination</li>
                        <li>Project supervision and site consultation</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What is the difference between architecture and interior design?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Architecture focuses on building structure, layout, and functionality, while interior design deals with aesthetics, furniture, and finishes inside the space.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can Thethekedaar handle both design and construction?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes! We provide end-to-end architectural and construction services  from initial drawings to final project handover.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can architectural designs be customized as per my needs?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes! Every design is tailored to your lifestyle, site, and budget  from layout planning to material selection.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How does architectural design add value to my property?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Good architecture improves functionality, enhances curb appeal, and increases resale value significantly.</p>
                </div>
            </div>

           

        </div>
    </div>
</section>

<!-- Include GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>

<script>
  // Select all FAQ questions
  const faqQuestions = document.querySelectorAll('.faq-question');

  faqQuestions.forEach(question => {
    const faqItem = question.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const icon = question.querySelector('.faq-icon');
    const answerHeight = answer.scrollHeight;
    gsap.to(answer, { height: answerHeight, opacity: 1, duration: 0.4 });
    // Set initial state
    gsap.set(answer, { height: 0, opacity: 0, display: 'none' });

    question.addEventListener('click', () => {
      const isOpen = faqItem.classList.contains('active');

      if (isOpen) {
        // Close this FAQ item
        gsap.to(answer, { height: 0, opacity: 0, duration: 0.4, onComplete: () => {
          answer.style.display = 'none';
        }});
        gsap.to(icon, { rotation: 0, duration: 0.4 });
        faqItem.classList.remove('active');
      } else {
        // Open this FAQ item
        answer.style.display = 'block';
        const answerHeight = answer.scrollHeight; // dynamic height
        gsap.to(answer, { height: answerHeight, opacity: 1, duration: 0.4 });
        gsap.to(icon, { rotation: 45, duration: 0.4 });
        faqItem.classList.add('active');
      }
    });
  });
</script>


</body>
</html>
