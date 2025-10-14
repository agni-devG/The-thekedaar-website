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
        <h1 class="h1-desktop">Frequently Asked Questions</h1>
        <div class="faq-container">

            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What is 2D design in architecture and interiors?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>2D design refers to flat drawings or plans that show the layout of your space including floor plans, furniture placement, walls, doors, and windows.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What is 3D design or 3D visualization?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>3D design turns 2D plans into realistic visual models. It lets you see exactly how your space will look  with colors, lighting, textures, and furniture  before construction begins.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Why is 3D design important?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>3D design helps you visualize your project before execution, reduces errors, and ensures design clarity between clients, designers, and contractors.</p>
                  
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What’s the difference between 2D and 3D design?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <ul>
                        <li><strong>2D design: </strong>Flat technical drawings for planning and measurements.</li>
                        <li><strong>3D design: </strong>Realistic visualization for aesthetics and presentation. Both together ensure accuracy and creativity in your project.</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How much do 2D and 3D design services cost in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Costs depend on project size and complexity:</p>
                        <ul>
                            <li>2D drawings: ₹30–₹50 per sq. ft.</li>
                            <li>3D renders: ₹2,000–₹8,000 per view</li>
                            <li>Premium 3D walkthroughs or animations may cost more.</li>
                        </ul>

                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can Thethekedaar provide both 2D and 3D designs?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                   <p>Yes! We specialize in complete 2D and 3D design solutions for residential, commercial, and architectural projects.</p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How long does it take to complete 3D renders?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>It usually takes 3–7 days per space depending on complexity, number of revisions, and level of detail required.</p>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can Thethekedaar design both interiors and exteriors in 3D?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. We offer complete 3D visualization for interiors, exteriors, landscaping, and architectural facades.</p>
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
