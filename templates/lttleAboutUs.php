 <!-- We Define Homes Section --> 
  <div class= "main1"> 
    
  
      <h2 class="h1-desktop11" style="margin-left: 12px;">A little about us</h2>
  
      <section class="define-homes-section">
  
        <div class="narrow-container define-homes-grid1">
            <div class="define-homes-text fade-in">
                <p class="p1-desktop">At The Thekedaar, we believe home is where emotions, memories, and laughter come together. We help create homes where people feel their happiest. Interior design is about more than furniture; it is about creating spaces that support people functionally, aesthetically, and emotionally. We offer thoughtful, practical solutions that make the best use of each room. By listening to your needs, we create spaces that reflect your lifestyle and make the most of the space available.</p>
            </div>
            <div class="define-homes-image scale-in">
                <img src="assets/images/about/1.webp" alt="Best interior designers in Delhi" title="Best interior designers in Delhi">
            </div>
        </div>
    </section>
      <section class="define-homes-section">

        <div class="narrow-container define-homes-grid1">
            <div class="define-homes-text fade-in">

                <p class="p1-desktop">As a Delhi interior design firm, we balance current design trends with each client's personal taste. We plan spaces and select colours, lighting, and materials to make interiors functional, safe, and beautiful. Our team also reviews plans and considers building codes, inspection requirements, and accessibility standards.</p>
            </div>
            <div class="define-homes-image scale-in">
                <img src="assets/images/about/1.webp" alt="Best interior designers in Delhi" title="Best interior designers in Delhi">
            </div>
        </div>
    </section>




    <section class="define-homes-section">
        <div class="narrow-container define-homes-grid1">
            <div class="define-homes-text fade-in">
                <p class="p1-desktop">Our team communicates clearly and presents design concepts in a way that is easy to understand. We believe your home should tell your story and bring together the things you love. We work closely with each client to understand their vision and create a design that reflects it. Our luxury interior design practice brings together interior design, architecture, and project execution.</p>
            </div>
            <div class="define-homes-image scale-in">
                <img src="assets/images/about/2.webp" alt="Top interior designers in Delhi" title="Top interior designers in Delhi">
            </div>
        </div>
    </section>


    <section class="define-homes-section">
        <div class="narrow-container define-homes-grid1">
            <div class="define-homes-text fade-in">
                <p class="p1-desktop">We are a Delhi-based firm offering interior design and execution services. Our experienced designers and project team manage every stage of the work. We assess each home, discuss the client's ideas, and develop a plan for the interior. We offer competitive rates and support our clients throughout the project.</p>
            </div>
            <div class="define-homes-image scale-in">
                <img src="assets/images/about/3.webp" alt="Interior Designer in Delhi" title="Interior Designer in Delhi">
            </div>
        </div>
    </section>


    <section class="define-homes-section">
        <div class="narrow-container define-homes-grid1">
            <div class="define-homes-text fade-in">
                <p class="p1-desktop">Our Delhi-based interior design team creates residential spaces shaped by each client's culture, lifestyle, and preferences. We work with both developers and individual homeowners, bringing thoughtful design and careful execution to projects of every scale. Our team specialises in transforming homes through tailored interior design.</p>
            </div>
            <div class="define-homes-image scale-in">
                <img src="assets/images/about/4.webp" alt="Home Interior Designers" title="Home Interior Designers">
            </div>
        </div>
    </section>
    <section class="define-homes-section">
        <div class="narrow-container define-homes-grid1">
            <div class="define-homes-text fade-in">
                <p class="p1-desktop">Our team provides residential and commercial interior design services. We create considered, visually appealing spaces and work to exceed our clients' expectations through thoughtful planning and innovative design.</p>
            </div>
            <div class="define-homes-image scale-in">
                <img src="assets/images/about/6.webp" alt="Residential Designers in Delhi" title="Residential Designers in Delhi">
            </div>
        </div>
    </section>
    <section class="define-homes-section">
        <div class="narrow-container define-homes-grid1">
            <div class="define-homes-text fade-in">
                <p class="p1-desktop">Interior designers must balance changing design trends with each client's preferences. We make spaces functional, safe, and beautiful by planning layouts and choosing colours, lighting, and materials with care. Our team also considers building codes, inspection regulations, accessibility standards, and clear communication at every stage.</p>
            </div>
            <div class="define-homes-image scale-in">
                <img src="assets/images/about/7.webp" alt="Modern Interior Designers" title="Modern Interior Designers">
            </div>
        </div>
    </section>

</div>

   
    
    <style>
/* Make h1 align fully left with 15px margin */
.define-homes-section > h1 {
    text-align: left;
    font-size: 51px;
    margin: 0 0 20px 15px; /* 15px left margin */
    width: 100%; /* span full width */
}


        
        /* Animation utility classes that won't conflict with existing CSS */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.2s ease, transform 0.2s ease;
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




      /* Base section styling */
.define-homes-section {
    background-color: var(--black);
    padding: 120px 0;
    color: var(--white);
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 104px 15px 19px 15px;
}

/* Grid container for text + image */
.define-homes-grid1 {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 40px; /* spacing between text and image */
    margin: 0 15px 110px 15px;
    width: 100%;
}

/* Text styling */
.define-homes-text {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    max-width: 600px; /* constrain text width */
}

.define-homes-text h1,
.define-homes-text .h2-desktop {
    margin-bottom: 20px;
}

.define-homes-text p {
    color: white;
    font-size: 16px;
    line-height: 110%;
    margin-top: 261px;
    width: 638px;
}
/* Image styling */
.define-homes-image img {
    width: 100%;
    height: 397px;
    max-height: 410px;
    object-fit: cover;
    display: block;
}

/* =============================
   Mobile responsive styles
============================= */
@media (max-width: 992px) {
    .define-homes-section {
        margin: 50px 0 0 0; /* reduce vertical margins */
    }

    .define-homes-grid1 {
        flex-direction: column; /* stack vertically */
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    /* Text (h1) first */
    .define-homes-text {
        margin: 0 8px;
        width: 100%;
    }

    .define-homes-text h1 {
        order: 1;
        font-size: 36px;
        margin: 10px 0;
    }

    .define-homes-text .h2-desktop {
        font-size: 28px;
        margin: 10px 0;
    }

    /* Image second */
    .define-homes-image {
        order: 2;
        width: 100%;
    }

    .define-homes-image img {
        order: 2;
        width: 100%;
        height: auto; /* keep proportions */
        object-fit: cover;
    }

    /* Paragraph third */
    .define-homes-text p {
        order: 3;
        font-size: 14px;
        line-height: 110%;
        max-width: 371px;
        margin: 0;
    }
}


        
    
    </style>
