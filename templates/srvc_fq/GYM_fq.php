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
                    <span>What is the cost of hiring an interior designer for a gym in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>It depends on scope, size, finishes, and the designer’s experience. The Thekedaar page mentions that for design only, costs can vary, and 3D views cost extra (₹50,000 to 2 lakh) depending on complexity.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What flooring is suitable for gyms?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Rubber flooring is preferred because it absorbs impact, protects equipment and people, is durable, and helps with safety. It also helps with noise reduction. </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What size of space is needed for a commercial gym?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>While gym size depends on budget and services, studies show many fitness studios around ~3,800 sq ft. However, smaller gyms are possible with clever space planning.</p>
                   >
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can The Thekedaar create 2D and 3D models of gym interiors?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. They offer 2D and 3D vision/design, which helps clients see what the gym will look like before actual execution. This improves clarity and helps avoid costly mistakes.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How much does luxury gym interior design cost in Delhi NCR?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost typically starts from ₹1,500 per sq. ft and can vary depending on space size, materials, and customization level.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How do you make small gyms look spacious?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We use smart layouts, wall mirrors, lighting, and color schemes to make small gyms appear larger and more open.</p>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What color themes work best for gyms?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Energetic colors like red, yellow, and orange boost motivation, while neutral shades add elegance and calmness.</p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How long does commercial interior design take?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <ul>
                        <li>Small offices: 6–8 weeks</li>
                        <li>Medium offices & retail spaces: 10–14 weeks</li>
                        <li>Large or luxury projects: 4–6 months</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What brands or materials do you use for gym interiors?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We use top-quality materials and trusted brands to ensure durability and a premium look.</p>
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
