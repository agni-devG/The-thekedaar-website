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
                    <span>How much does residential interior design cost in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost depends on the size of your home, materials, and design style. On average:</p>
                    <ul>
                        <li>1 BHK: ₹4–8 lakh</li>
                        <li>2 BHK: ₹8–20 lakh</li>
                        <li>3 BHK: ₹15–35 lakh Luxury finishes or customized designs can increase the cost.</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How much does it cost to design a 2 BHK flat in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>A standard 2 BHK interior design project usually costs ₹8–20 lakh, including furniture, lighting, flooring, and décor. Premium materials or bespoke furniture may increase the cost.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How much does it cost to design a 3 BHK flat in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>For a 3 BHK, costs typically range from ₹15–35 lakh, depending on materials, design complexity, and furniture. Luxury homes may go beyond this budget.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What is a normal budget for residential interior design?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Most homeowners spend ₹2,000–₹3,000 per sq. ft. for standard interiors. Luxury homes or highly customized designs may cost more.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How much does it cost to furnish a 3-bedroom house in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Furnishing costs can range from ₹5–9 lakh for basic setups to ₹15–20 lakh for high-end furniture and décor.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Who are the best residential interior designers in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <ul>
                        <li>Thethekedaar – Affordable and modern designs</li>
                        <li>Livspace – Contemporary and functional interiors</li>
                        <li>Design Café – Stylish and customizable home designs</li>
                        <li>Studio Lotus – Premium and sustainable solutions</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Does Thethekedaar provide modular kitchen and furniture solutions?   </span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                   <p>Yes! We specialize in modular kitchens, wardrobes, cabinets, and custom furniture tailored to your home and lifestyle</p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can Thethekedaar design budget-friendly homes?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes! We offer affordable interior design solutions without compromising on style or functionality.</p>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Do Thethekedaar designers provide 3D visualization?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. We provide 3D renderings and layouts so you can see your home before the work begins.</p>
                </div>
            </div>

            <!-- FAQ Item 10 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Can I redesign only part of my house?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes! We can work on specific areas like living rooms, kitchens, bedrooms, or bathrooms without redesigning the whole home.</p>
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
