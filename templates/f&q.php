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
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease-out, padding 0.4s ease-out;
    color: rgba(255, 255, 255, 0.85); /* 85% opacity */
    padding: 0;
}

.faq-answer p {
    padding-bottom: 25px;
    line-height: 1.6;
        opacity: 80%;

}

/* Active state */
.faq-item.active .faq-answer {
    max-height: 500px;
    padding-top: 10px;
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


   <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    
    <!-- ----------------- gsap -------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <!-- ScrollSmoother requires ScrollTrigger -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>




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
                    <span>What is the cost of interior design in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost of interior design in Delhi varies depending on the size of the project and the complexity of the design. Generally, the cost can range from Rs. 15,000 to Rs. 2,00,000 or more. The cost will also depend on the materials used and the number of professionals required for the project. For example, for a simple design, the cost may be lower, while for a complex design, the cost may be higher. Additionally, the cost may also depend on the experience of the professionals involved in the project.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What are the latest trends in Interior design in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The latest trends in interior design in Delhi include focusing on natural elements, minimizing clutter, and incorporating green features. Natural elements such as wood, stone, and other organic materials are being used to create a warm and inviting atmosphere. Minimalism is also a popular trend, with fewer items being used to create a more spacious look. Additionally, green features such as energy-efficient lighting, solar panels, and eco-friendly materials are being incorporated into designs, to create an environmentally-conscious space.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How much does it cost for interior design for 2 BHK in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost of interior design for a 2 BHK in Delhi will vary depending on the complexity of the design and the materials used. Generally, the cost for interior design for a 2 BHK in Delhi can range from Rs. 10,000 to Rs. 30,000. Factors such as the size of the space, the type of materials used, and the complexity of the design can affect the total cost. It is recommended to consult with a professional interior decorator to get a better understanding of the cost and the design possibilities.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How much does it cost for the interior design of a 3BHK flat in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost of interior design for a 3 BHK in Delhi will depend on the same factors as a 2 BHK, but may be slightly higher due to the larger size of the space. Generally, the cost for interior design for a 3 BHK in Delhi can range from Rs. 15,000 to Rs. 40,000. As before, it is recommended to consult with a professional interior designer to get a better understanding of the cost and the design possibilities.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>How much does it cost to furnish a 3-bedroom house in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost to furnish a 3-bedroom house in Delhi will depend on the type of furniture desired and the level of quality. Basic furniture can cost anywhere from ₹10 Lacs to ₹30 Lacs, while high-quality furniture can cost up to ₹50 Lacs or more. It is also important to factor in the cost of any additional items such as rugs, wall hangings, and decorative accessories. For an accurate quote, it is best to consult an interior designer who can provide an estimate based on the scope of the project.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>What is the most essential piece of interior design advice you offer when creating a space?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>As an interior designer in Delhi, the most important piece of interior design advice that our team provides when designing a space is to create a functional layout that is both aesthetically pleasing and practical. This means considering the furniture, lighting, accessories, and colors that will best suit the purpose of the space and how people will use it. It is also important to consider how each element in the space will work together to create a cohesive, unified look.</p>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Why should I go with Thethekedaar to design my home?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Thethekedaar offers a wide range of services that can help you design the perfect home for your needs. They have experienced designers who can work with you to create a unique and personalized look that suits your style and budget. We use the latest technologies and materials, so you know that your home will be up to date with current trends. Plus, we have access to a range of suppliers, so we can source the best quality materials at competitive prices.</p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Why we are the most affordable interior designers in Delhi NCR?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Thethekedaar is the most affordable interior designer in Delhi NCR because we have carefully crafted our services to meet the needs of customers without compromising on quality, service, and expertise. We have a team of experienced and knowledgeable professionals who are dedicated to providing our customers with the best possible services and products at the best possible prices. We also have a wide range of products to choose from, so that our customers can find the perfect solution for their interior design needs without having to break the bank.</p>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Does Thethekedaar design a house that is already made?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Big YES for this, we can redesign your house that is already made. But Thethekedaar usually designs a house from scratch, according to the client's specifications and requirements.</p>
                </div>
            </div>

            <!-- FAQ Item 10 -->
            <div class="faq-item">
                <button class="faq-question">
                    <span>Whom should you contact for luxury interior designing in Delhi?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>If you are looking for luxury interior designing services in Delhi, you can contact our experienced interior designers. Thethekedaar will be able to provide you with the best ideas and designs to create a luxurious interior for your home. You can also look for reviews online to find the most reliable services.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<script>
  // Select all FAQ questions
  const faqQuestions = document.querySelectorAll('.faq-question');

  faqQuestions.forEach(question => {
    const faqItem = question.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const icon = question.querySelector('.faq-icon');

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
