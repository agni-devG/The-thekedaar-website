<h2 class="testh2">Our clients love us.</h2>

<section class="testimonials-section">
  <div class="testimonial-slider-container">

    <!-- Background Image -->
    <div class="testimonials-bg">
      <img src="assets/images/testimonial/text.webp" alt="Interior Designer in Delhi" title="Interior Designer in Delhi">
    </div>

    <!-- Track with Cards -->
    <div class="testimonials-track">
      <!-- Card 1 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>Working with this studio was a dream! Our 3BHK now looks like it belongs in a magazine. Every guest who walks in compliments the vibe and layout.</p>
        <div class="author">Khurshid Alam<br>Mayur Vihar, Delhi</div>
      </div>

      <!-- Card 2 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>They completely transformed our old apartment into a modern masterpiece. We especially loved how they balanced aesthetics with functionality.</p>
        <div class="author">Inderjit Bhowmick<br>Greater Kailash II, Delhi</div>
      </div>

      <!-- Card 3 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>The team was professional, creative, and understood exactly what I wanted — even better than I could describe it! My living room is now my favorite spot.</p>
        <div class="author">Riya Sharma<br>Gurgaon</div>
      </div>

      <!-- Card 4 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>The design process was smooth and stress-free. They listened to our needs and turned them into a beautiful, functional space we now love coming home to.</p>
        <div class="author">Vivek Malhotra<br>Noida</div>
      </div>

      <!-- Card 5 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>Attention to detail was incredible. From textures to colors, everything was thoughtfully planned. It feels luxurious yet warm at the same time.</p>
        <div class="author">Ananya Gupta<br>South Delhi</div>
      </div>

      <!-- Card 6 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>We wanted a modern, cozy home — and that’s exactly what we got. The whole process was transparent and professional. Highly recommend their services!</p>
        <div class="author">Rahul Verma<br>Faridabad</div>
      </div>
    </div>
  </div>
</section>

<style>



/* Prevent text/image selection while dragging */
.testimonials-section,
.testimonials-track,
.testimonial-card,
.testimonials-bg img,
.testh2 {
  user-select: none;        /* Disable text selection */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  pointer-events: auto;     /* Ensure drag still works */
}

/* Title */
.testh2 {
  margin-top: 90px;
  margin-bottom: 40px;
  text-align: left;
  color: var(--white);
  margin-left: 15px;
}

/* Section Wrapper */
/* Title */
.testh2 {
  margin-top: 90px;
  margin-bottom: 40px;
  text-align: left;
  color: var(--white);
  margin-left: 15px; /* updated */
}

/* Section Wrapper */
.testimonials-section {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 1001px;
  padding: 100px 0;
  color: var(--white);
}

/* Container */
.testimonial-slider-container {
  position: relative;
  width: 100%;   /* full width */
  max-width: none; /* remove max-width if you want full width always */
  height: 100%;
  overflow: hidden;
      margin: 0 15px;
}

/* Background */
.testimonials-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;   /* full width */
  height: 100%;  /* full height of container */
  z-index: 0;
  overflow: hidden;
}
.testimonials-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.testimonials-track.active {
  cursor: grabbing;
}
/* Track */
.testimonials-track {
  position: absolute;
    cursor: grab;

  bottom: 0;
  left: 7px; /* updated */
  right: 7px; /* updated */
  display: flex;
  gap: 40px; 
  padding: 0;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  z-index: 2;
}

/* Hide scrollbar */
.testimonials-track::-webkit-scrollbar {
  display: none;
}
.testimonials-track {
  scrollbar-width: none; /* Firefox */
}

/* Card */
.testimonial-card {
  flex: 0 0 auto;
  width: calc(100% - 32px); /* optional if you want responsive width */
  max-width: 603px;
  height: 322px;
  background: var(--accent);
  color: var(--black);
  padding: 30px;
  border-radius: 12px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  scroll-snap-align: start;
}

.testimonial-card .stars {
  font-size: 20px;
  margin-bottom: 15px;
  color: #ECC388;
}
.testimonial-card p {
  font-family: var(--font-headings);
  font-size: 32px;
  line-height: 110%;
  margin-bottom: 15px;
  color: #BD7C1E;
  width: 479px;
    height: 180px;

}
.testimonial-card .author {
  font-size: 14px;
  text-align: right;
}


/* 📱 Mobile */
@media (max-width: 992px) {
  .testimonials-bg {
    height: 500px;
  }
  .testimonial-card {
    width: 440px;
    height: 280px;
    padding: 20px;
    border-radius: 8px;
  }
  .testimonial-card p {
    width: 360px;
    font-size: 22px;
    height: auto;
    line-height: 110%;


  }


  .testh2 {
  margin-top: 90px;
  font-size: 36px;
  margin-bottom: 40px;
  line-height: 100%;
  text-align: left;
  color: var(--white);
  margin-left: 15px;
}
  .testimonial-slider-container {
    position: relative;
    width: calc(100% - 32px);
    max-width: 1696px;
    height: 393px;
    overflow: hidden;
}

.testimonials-section {
    display: flex
;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 341px;
    padding: 100px 0;
    color: var(--white);
}
}

/* Mobile */
@media (max-width: 576px) {
  .testimonials-bg {
    height: 206px;
  }
  .testimonial-card {
    width: 343px;  /* ✅ your requirement */
    height: 229px; /* ✅ your requirement */
    padding: 16px;
  }
  .testimonial-card p {
    width: 292px;       /* ✅ your requirement */
    font-size: 18px;    /* ✅ your requirement */
    height: auto;
  }
  .testimonial-card .stars {
    font-size: 16px;
  }
  .testimonial-card .author {
    font-size: 12px;
  }
}
</style>

<script>
  const track = document.querySelector(".testimonials-track");
  const cards = document.querySelectorAll(".testimonial-card");

  let index = 0;
  let startX = 0;
  let dragging = false;
  let autoTimer = null;

  // Go to a specific card
  function goTo(i) {
    if (i < 0) i = 0;
    if (i >= cards.length) i = cards.length - 1;
    index = i;
    track.scrollTo({
      left: cards[i].offsetLeft - track.offsetLeft,
      behavior: "smooth"
    });
  }

  // Autoplay
  function startAuto() {
    stopAuto();
    autoTimer = setInterval(() => {
      index = (index + 1) % cards.length;
      goTo(index);
    }, 4000); // 4s per slide (change as needed)
  }

  function stopAuto() {
    if (autoTimer) {
      clearInterval(autoTimer);
      autoTimer = null;
    }
  }

  // Drag/Swipe handling
  track.addEventListener("pointerdown", e => {
    dragging = true;
    startX = e.clientX;
    stopAuto(); // pause while dragging
  });

  window.addEventListener("pointerup", e => {
    if (!dragging) return;
    const delta = e.clientX - startX;
    dragging = false;

    if (delta < -50) {
      goTo(index + 1); // swipe left → next
    } else if (delta > 50) {
      goTo(index - 1); // swipe right → prev
    } else {
      goTo(index); // small move → snap back
    }

    startAuto(); // resume autoplay
  });

  // Kick off autoplay
  startAuto();
</script>

