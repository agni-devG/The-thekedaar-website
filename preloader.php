    <style>
    
    .preloader{
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 999999;
        background: none;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        flex-direction: column;
        gap: 12px;
        overflow: hidden;
    }  
    
    .preloader p{
        color: #fff;
    }

    .preloader-image{
        width: 200px;
        height: auto;
        filter: blur(32px)
    }
    .pl-panels{
        position: absolute;
        inset:0;
        display: flex;
        z-index: 0;
    }
    .pl-panels i{
        flex: 1;
        height: 100vh;
        background: #D9C5A5;
        /* transform: translateY(100%); */
    }

    @media (max-width: 767px){
        .pl-panels i:nth-child(n + 5){
            display: none;
        }
    }

    .preloader-image,
    .preloader p{
        position: relative;
        z-index: 1;
    }

    html.preloader-scroll-locked,
    body.preloader-scroll-locked{
        overflow: hidden;
    }
    
    
    </style>
<div class="preloader">
    <div class="pl-panels">
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
    </div>
    <img src="/assets/images/Logo.svg" alt="" class="preloader-image">
    <p><span id="progress">0</span>%</p>
</div>

<script>
    document.documentElement.classList.add("preloader-scroll-locked");
    document.body.classList.add("preloader-scroll-locked");

    const progressValue = { value: 0 };
    const progressElement = document.getElementById("progress");
    const preloaderTimeline = gsap.timeline();

    preloaderTimeline.to(".preloader-image", {
        filter: "blur(0px)",
        duration: 1.5,
        ease: "power2.out"
    }, 0);

    preloaderTimeline.to(progressValue, {
        value: 100,
        duration: 1.5,
        ease: "power2.out",
        onUpdate: () => {
            progressElement.textContent = Math.round(progressValue.value);
        }
    }, 0);

    preloaderTimeline.to(".pl-panels i", {
        height: "0vh",
        duration: 1.5,
        ease: "power4.out",
        stagger: 0.05
    });

    preloaderTimeline.to(".preloader-image, .preloader p", {
        opacity: 0,
        duration: 0.25,
        ease: "power2.out"
    }, "<");

    preloaderTimeline.call(() => {
        document.querySelector(".preloader").style.display = "none";
        document.documentElement.classList.remove("preloader-scroll-locked");
        document.body.classList.remove("preloader-scroll-locked");
    }, [], "-=0.5");
</script>

