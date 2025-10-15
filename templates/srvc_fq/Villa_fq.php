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
                    <span>How much does villa interior design cost in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost usually starts from ₹2,000 per sq. ft. and depends on the size, materials, and design preferences</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How long does it take to complete a villa interior project?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>On average, it takes 2 to 4 months, depending on the project’s size and complexity.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Do you provide 3D designs before starting work?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes! We share detailed 2D and 3D designs so you can see how your villa will look before execution.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What is the normal budget for commercial interior design?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>A standard commercial interior budget ranges from ₹2,500–₹3,500 per sq. ft. Offices, co-working spaces, and retail outlets usually fall within this range, while premium projects can go up to ₹4,000–₹6,000 per sq. ft.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can you include custom furniture in villa interiors?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Absolutely! We create custom luxury furniture that fits perfectly with your space and theme.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What color schemes are best for villas?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Soft neutrals, warm browns, and pastel tones are most popular for creating a cozy yet elegant feel.</p>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What makes Thekedaar different from other designers?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We focus on quality, creativity, and on-time delivery all at competitive prices.</p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can The Thekedaar design luxury villa kitchens too?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                   <p>Yes! We design modular kitchens with premium finishes, smart storage, and elegant layouts that make cooking a joy.</p>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What is your process for villa interior design?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We begin with consultation → design concept → 3D visualization → material selection → execution → final handover.</p>
                </div>
            </div>

            <!-- FAQ Item 10 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Why is The Thekedaar known as one of the best villa interior designers in Delhi NCR?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Because we deliver premium designs, on-time execution, transparent pricing, and complete client satisfaction.</p>
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
