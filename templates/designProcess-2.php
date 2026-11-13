<!-- <a href="contact-us-2" class="contact-link">Contact Us</a> -->


<section class="process-section" style="background: url('/assets/images/design_process.webp'); background-size: cover; background-position: center;">
    <div class="process-gradient-overlay" aria-hidden="true"></div>
    <span class="section-title">Our Design Process</span>
    <p class="process-para">At The Thekedaar, we've got a process that turns your vision into reality. You're part of every step, working alongside our team to fine-tune the details until everything feels just right.</p>
    
    <div class="process-step-wrapper">
        <div class="process-step">
            <h2>Vision & Brief</h2>
            <p>The first step is understanding the customer, gathering insights, and shaping the initial concept.</p>
        </div>
        <div class="process-step">
            <h2>Idea Outlining </h2>
            <p>We’ll develop and manage the concept based on our initial discussion and mutual agreement.</p>
        </div>
        <div class="process-step">
            <h2>The First Look</h2>
            <p>Once the concept is ready, we’ll share detailed drawings and visualisations to bring it to life.</p>
        </div>
        <div class="process-step">
            <h2>Physical Work</h2>
            <p>Here, we have translated conceptually designed dreams into reality.</p>
        </div>
    </div>

    <div class="step-img process-img-1" aria-hidden="true">
        <img src="/assets/images/process/Meating.webp" alt="" loading="lazy" decoding="async">
    </div>
    <div class="step-img process-img-2" aria-hidden="true">
        <img src="/assets/images/process/planning.webp" alt="" loading="lazy" decoding="async">
    </div>
    <div class="step-img process-img-3" aria-hidden="true">
        <img src="/assets/images/process/3d.webp" alt="" loading="lazy" decoding="async">
    </div>
    <div class="step-img process-img-4" aria-hidden="true">
        <img src="/assets/images/process/installation-2.webp" alt="" loading="lazy" decoding="async">
    </div>

</section>


<style>

    .process-section{
        padding: 88px 40px;
        margin: 120px 0;
        position: relative;
        z-index: 0;
        /* height: 100vh; */
        display: flex;
        flex-direction: column; 
        /* justify-content: space-between; */
    }

    .step-img{
        position: absolute;
        inset: 0;
        z-index: 0;
        opacity: 0;
        pointer-events: none;
        will-change: opacity;
    }

    .step-img img{
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .step-img::after{
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(12, 5, 3, 0.45);
    }

    .process-gradient-overlay{
        position: absolute;
        inset: 0;
        z-index: 1;
        pointer-events: none;
        background: linear-gradient(
            0deg,
            rgba(12, 5, 3, 1) 0%,
            rgba(12, 5, 3, 0) 13%,
            rgba(12, 5, 3, 0) 88%,
            rgba(12, 5, 3, 1) 100%
        );
    }

    .process-section > :not(.step-img):not(.process-gradient-overlay){
        position: relative;
        z-index: 2;
    }

    .process-para{
        color: #D9D9D9;
        max-width: 52ch;
        font-size: 24px;
        font-weight: 300;
        line-height: 1.1;
        margin-bottom: 28px;
    }

    .process-step{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 8px;
        padding: 8px 0;
        margin:0 !important;
        border-bottom: 1px solid #d9d9d935;
        cursor: pointer;

        /* max-width: 400px; */
    }
    .process-step p, h2{
        color: #D9D9D9;
        transition: all 250ms ease;
    }



    .process-step:hover h2{
         letter-spacing: 4px;
        transition: all 250ms ease;
    }

    .process-step-wrapper:hover .process-step h2{
        opacity: 0.075;
    }

    .process-step-wrapper:hover .process-step:hover h2{
        opacity: 1;
    }

    .process-step-wrapper:hover .process-step{
        border-bottom-color: transparent;
    }

    .process-step p{
        max-width: 36ch;
        text-align: right;
        /* display: none; */
        opacity: 0;
        transition: all 250ms ease;

    }
    .process-step:hover p{
        /* display: block; */
        opacity: 1;

    }
    .process-step h2{
        font-size: 64px;
        font-weight: 300;
        margin-bottom: 8px;
    }
    
    

</style>

<script>
    const processSection = document.querySelector(".process-section");
    const processSteps = processSection.querySelectorAll(".process-step");
    const processImageLayers = processSection.querySelectorAll(".step-img");

    processSteps.forEach((step, index) => {
        step.addEventListener("mouseenter", () => {
            gsap.killTweensOf(processImageLayers);
            gsap.to(processImageLayers, {
                opacity: layerIndex => layerIndex === index ? 1 : 0,
                duration: 0.25,
                ease: "power1.out",
                overwrite: true
            });
        });

        step.addEventListener("mouseleave", () => {
            gsap.killTweensOf(processImageLayers);
            gsap.to(processImageLayers, {
                opacity: 0,
                duration: 0.25,
                ease: "power1.out",
                overwrite: true
            });
        });
    });
</script>
