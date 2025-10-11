<section class="more-info-section">

              <h1 class="section-heading1">More Info on us</h1>


  <div class="carousel-wrapper">

    <!-- Slide 1 -->
    <div class="carousel-slide">
      <div class="more-info-block">
        <div class="more-info-text">
          <div>
            <h3>Time-saving Decision</h3>
            <p>
              When it comes to designing every space of your house it proves to be exhausting. Besides this, it takes a lot of time, and in return you get nothing. Therefore, the best way to resolve this is to hire an interior designer who will change the appearance of your home.
            </p>
            <a href="contact-us-2.php" class="inline-contact-link">Contact Us</a>
          </div>
        </div>
        <div class="more-info-img">
          <img src="assets/images/image-2.webp" alt="Interior Design 1" loading="lazy">
        </div>
      </div>
    </div>
    <div class="carousel-slide">
      <div class="more-info-block">
        <div class="more-info-text">
          <!-- <h1 class="section-title">More Info on us</h1> -->
          <div>
            <h3>Design your Home in Your Style</h3>
            <p>
                Interior decorators have better knowledge related to design. As a result of this, they will design your home according to your preferences as it matters the most.            </p>
            <a href="contact-us-2.php" class="inline-contact-link">Contact Us</a>
          </div>
        </div>
        <div class="more-info-img">
          <img src="assets/images/moreInfo/6.webp" alt="Interior Design 1" loading="lazy">
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-slide">
      <div class="more-info-block">
        <div class="more-info-text">
          <!-- <h1 class="section-title">More Info on us</h1> -->
          <div>
            <h3>Good Planning</h3>
            <p>
                The entire process of designing works on in-depth planning and assessment. Due to this reason, interior designers formulate a plan before designing so that they work according to it.
            </p>
            <a href="contact-us-2.php" class="inline-contact-link">Contact Us</a>
          </div>
        </div>
        <div class="more-info-img">
          <img src="assets/images/moreInfo/1.webp" alt="Interior Design 2" loading="lazy">
        </div>
      </div>
    </div>


    <div class="carousel-slide">
      <div class="more-info-block">
        <div class="more-info-text">
          <!-- <h1 class="section-title">More Info on us</h1> -->
          <div>
            <h3>Works as Per Your Budget</h3>
            <p>
                When you hire affordable interior designers then they work according to your budget. Further, they will purchase all the material that goes well with your budget. Most importantly, you can get a stylish home with exceptional designs, attractive colors, and modern furniture with a limited investment.       
                   </p>
            <a href="contact-us-2.php" class="inline-contact-link">Contact Us</a>
          </div>
        </div>
        <div class="more-info-img">
          <img src="assets/images/moreInfo/2.webp" alt="Interior Design 2" loading="lazy">
        </div>
      </div>
    </div>




    <div class="carousel-slide">
      <div class="more-info-block">
        <div class="more-info-text">
          <!-- <h1 class="section-title">More Info on us</h1> -->
          <div>
            <h3>Modern Tools</h3>
            <p>
              Nowadays, interior designers use fine-quality tools for designing your home. Thereafter, they take support of modern software and tools concerning with planning of home and office renovation. While taking the support of these tools they will make the renovation work easier.    
            </p>
        <a href="contact-us-2.php" class="inline-contact-link">Contact Us</a>
          </div>
        </div>
        <div class="more-info-img">
          <img src="assets/images/moreInfo/3.webp" alt="Interior Design 2" loading="lazy">
        </div>
      </div>
    </div>

    <div class="carousel-slide">
      <div class="more-info-block">
        <div class="more-info-text">
          <!-- <h1 class="section-title">More Info on us</h1> -->
          <div>
            <h3>Creative Ideas</h3>
            <p>
              Following the everyday room designs in these changing times is not a great idea. When you want to change the look of your home or office, you need some 
              creative ideas and designs. Moreover, when you hire an interior designer then they will provide you with 
              innovative ideas and designs for every space.
            </p>
                        <a href="contact-us-2.php" class="inline-contact-link">Contact Us</a>

                      </div>
        </div>
        <div class="more-info-img">
          <img src="assets/images/moreInfo/4.webp" alt="Interior Design 2" loading="lazy">
        </div>
      </div>
    </div>

    <!-- Add more slides as needed -->

  </div>

  <div class="carousel-indicators1"></div>

</section>

<style>



  /* --- Global Reset/Base Adjustments (add these if not already present) --- */
  body {
    margin: 0; /* Remove default body margin to ensure full width sections */
    overflow-x: hidden; /* Prevent horizontal scroll from vw units if not handled */
  }


.carousel-indicators1 {
  position: absolute;
  right: 30px;      /* bottom-right on large screens */
  bottom: 30px;
  left: auto;
  top: 784px;
  display: flex;
  gap: 8px;
  z-index: 9999;
  pointer-events: auto;
  transition: all 200ms ease;
}

/* indicator bars (desktop size) */
.carousel-indicators1 .bar {
  width: 40px;
  height: 2px;
  background: rgba(255,255,255,0.6);
  border-radius: 3px;
  transition: background 0.3s ease, transform 0.2s ease;
  cursor: pointer;
}
.carousel-indicators1 .bar.active { background: #fff; }

/* Mobile: place at top center of the section, make bars slightly smaller */
@media (max-width: 992px) {
  .carousel-indicators1 {
        top: 111px;
        left: 70%;
        transform: translateX(-50%);
        right: auto;
        bottom: auto;
        gap: 6px;
        padding: 6px 8px;
  }

  .carousel-indicators1 .bar {
    width: 30px;
    height: 2px;
    border-radius: 4px;
  }

}

  /* --- More Info Section (the main container) --- */
  .more-info-section {
  position: relative; /* ⬅ important */
    width: 100vw; 
    margin: 0; 
    padding: 0; 
    overflow: hidden; 
  }

  /* --- Section Heading --- */
  .section-heading1 {
    text-align: left;
    margin: 90px 5vw 0 1vw;
  }

  .carousel-wrapper {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    cursor: grab;
    user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    touch-action: pan-y;
    height: auto; /* Allow content to define height */
    margin-top: 50px; /* Add some space below the heading */
    height: 790px;
  }
  .carousel-wrapper.dragging {
    cursor: grabbing;
    scroll-behavior: auto;
  }
  .carousel-wrapper::-webkit-scrollbar {
    display: none;
  }

  
  .carousel-slide {
    flex: 0 0 100vw;  
    scroll-snap-align: start;
    display: flex;
    justify-content: flex-start; 
    align-items: stretch;
    height: auto;
  }

 
  .more-info-block {
    display: grid;
    grid-template-columns: minmax(300px, 40vw) 1fr;  
    gap: 0; 
    width: 100vw; 
    height: 600px;  
    box-sizing: border-box;
    /* margin: 0px 15px; */  
  }

  /* --- Text Block --- */
  .more-info-text {
    display: flex;
    flex-direction: column;
    justify-content: center; 
    /* padding-left: 2vw; */
    padding-right: 2vw; 
    color: #fff; /* Example text color */
  }

  .more-info-text div {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 500px; /* Constrain text width for readability */
    width: 100%; 
    margin: 0 15px
  }

  .more-info-text h3 {
    margin-bottom: 426px;
    font-size: 32px; 
  }

  .more-info-text p {
    color: var(--light-grey); 
    line-height: 110%;
    font-size: 16px;
  }

  .inline-contact-link {
    margin-top: 20px; /* Space from paragraph */
    text-decoration: none;
    color: #fff; /* Adjust color for dark background */
    border-bottom: 2px solid #fff; /* Adjust border color */
    display: inline-block;
    padding-bottom: 5px;
  }

  /* --- Image Block --- */
  .more-info-img {
    display: flex;
    align-items: center;
    justify-content: flex-end; /* Push image to the right edge */
    height: 573px;
    margin-right:15px;
    overflow: hidden; 
  }

  .more-info-img img {
    
    width: 100%;
    height: 573px;
    object-fit: cover; 
    object-position: center;
    -webkit-user-drag: none;
    user-drag: none;
    margin-right: 15px;
    pointer-events: auto;
  }

  @media (max-width: 992px) {
    .section-heading1 {
        margin: 50px 8px 0 8px; /* Smaller margins for mobile */
        font-size: 36px;
    }

    .carousel-slide {
      flex: 0 0 100vw; 
    }

    .more-info-block {
      grid-template-columns: 1fr;
      height: auto; 
      width: 100vw; 
      margin: 0; 
      padding: 0;
    }

    .more-info-text {
      order: 2; 
      padding: 24px 8px; /* Mobile padding */
      text-align: left;
      background-color: #000; /* Ensure background consistency */
      color: #fff;
    }

    .more-info-text div {
      max-width: 100%; /* Allow text to take full available width */
      gap: 12px;
      margin: 0 8px;
    }




.carousel-wrapper {

  height: 549px;
}

    .more-info-text h3 {
      font-size: 26px;
      margin-bottom: 8px;
    }

    .more-info-text p {
      font-size: 14px;
    }

    .inline-contact-link {
      margin-top: 12px;
      color: #fff;
      border-bottom: 2px solid #fff;
    }

    .more-info-img {
      order: 1; /* Image above text on mobile */
      width: 100%;
      height: 240px; /* Fixed height for image on mobile, adjust as desired */
      justify-content: center;
    }

    .more-info-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      margin-right: 0; /* Remove right margin on mobile */
    }
  }

  /* carousel improvements (keep these as they are good general improvements) */
  .carousel-wrapper{
    touch-action: pan-y;
  }
  .carousel-wrapper.dragging{ cursor:grabbing; scroll-behavior: auto; }
  .more-info-img img {
    -webkit-user-drag: none;
    user-drag: none;
    pointer-events: auto;
  }
  .carousel-wrapper::-webkit-scrollbar { display:none; }
</style>
</style>
<style>
  /* carousel improvements */
  .carousel-wrapper{
    display:flex;
    overflow-x:auto;
    scroll-snap-type:x mandatory;
    -webkit-overflow-scrolling:touch;
    scrollbar-width:none;
    cursor:grab;
    user-select:none;
    -webkit-user-select:none;
    -ms-user-select:none;
    touch-action: pan-y; /* let vertical page scroll, but allow horizontal dragging to be handled by JS */
  }
  .carousel-wrapper.dragging{ cursor:grabbing; scroll-behavior: auto; }

  /* stop images from being dragged by default (prevents ghost image) */
  .more-info-img img {
    -webkit-user-drag: none;
    user-drag: none;
    pointer-events: auto;
  }

  /* hide scrollbar */
  .carousel-wrapper::-webkit-scrollbar { display:none; }
</style>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const carousel = document.querySelector(".carousel-wrapper");
  const slides = Array.from(carousel.querySelectorAll(".carousel-slide"));
  const indicatorsContainer = document.querySelector(".carousel-indicators1");

  // Create indicator bars
  slides.forEach((_, i) => {
    const bar = document.createElement("div");
    bar.classList.add("bar");
    if (i === 0) bar.classList.add("active");
    indicatorsContainer.appendChild(bar);
    bar.addEventListener("click", () => {
      carousel.scrollTo({ left: i * slideWidth(), behavior: "smooth" });
    });
  });

  const indicators = Array.from(indicatorsContainer.querySelectorAll(".bar"));

  function slideWidth() {
    return slides[0] ? slides[0].offsetWidth : carousel.clientWidth;
  }

  function updateIndicators(index) {
    indicators.forEach((bar, i) => bar.classList.toggle("active", i === index));
  }

  function snapToNearest() {
    const w = slideWidth();
    const index = Math.round(carousel.scrollLeft / w);
    carousel.scrollTo({ left: index * w, behavior: "smooth" });
    updateIndicators(index);
  }

  // Pointer-based dragging (works for mouse + touch + pen)
  let dragging = false;
  let startX = 0;
  let startScroll = 0;

  carousel.addEventListener("pointerdown", (e) => {
    dragging = true;
    startX = e.clientX;
    startScroll = carousel.scrollLeft;
    carousel.classList.add("dragging");
    try { carousel.setPointerCapture && carousel.setPointerCapture(e.pointerId); } catch {}
  });

  carousel.addEventListener("pointermove", (e) => {
    if (!dragging) return;
    const dx = e.clientX - startX;
    carousel.scrollLeft = startScroll - dx;
  });

  const endPointer = (e) => {
    if (!dragging) return;
    dragging = false;
    carousel.classList.remove("dragging");
    // Snap to the nearest slide (and update indicators)
    snapToNearest();
    try { carousel.releasePointerCapture && carousel.releasePointerCapture(e.pointerId); } catch {}
  };

  carousel.addEventListener("pointerup", endPointer);
  carousel.addEventListener("pointercancel", endPointer);
  carousel.addEventListener("pointerleave", endPointer);

  // Fallback touch handlers (some older browsers)
  carousel.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
    startScroll = carousel.scrollLeft;
  }, { passive: true });

  carousel.addEventListener("touchmove", (e) => {
    const dx = e.touches[0].clientX - startX;
    carousel.scrollLeft = startScroll - dx;
  }, { passive: true });

  carousel.addEventListener("touchend", snapToNearest);

  // Scroll listener (debounced) to catch native swipes, momentum and other scroll changes
  let scrollTimer = null;
  carousel.addEventListener("scroll", () => {
    // If user is actively dragging we still want to debounce — wait until scroll stabilizes
    if (scrollTimer) clearTimeout(scrollTimer);
    scrollTimer = setTimeout(() => {
      const index = Math.round(carousel.scrollLeft / slideWidth());
      updateIndicators(index);
    }, 80); // 60-150ms is reasonable
  });

  // Recalculate on resize (keep active slide)
  window.addEventListener("resize", () => {
    const index = Math.round(carousel.scrollLeft / (slideWidth() || 1));
    // snap to same index so layout changes don't leave partial slide
    carousel.scrollTo({ left: index * slideWidth(), behavior: "instant" });
    updateIndicators(index);
  });
});
</script>


