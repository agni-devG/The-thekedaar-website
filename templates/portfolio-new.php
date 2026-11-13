<section class="home-portfolio">
  <h2>Our Portfolio</h2>
  <div class="portfolio-grid">
    <div class="portfolio-row">
      <div class="portfolio-img"><img src="/assets/images/portfolio/New_dark.webp" alt="Interior design project" loading="lazy"></div>
    </div>
    <div class="portfolio-row">
      <div class="portfolio-img"><img src="/assets/images/portfolio/sofa-and-chairs-in-modern-penthouse-2025-04-04-03-23-57-utc.webp" alt="Salon interior design project" loading="lazy"></div>
      <div class="portfolio-img"><img src="/assets/images/portfolio/Cam_02.webp" alt="Interior design project" loading="lazy"></div>
    </div>
    <div class="portfolio-row">
      <div class="portfolio-img"><img src="/assets/images/portfolio/3.webp" alt="Modern penthouse living room design" loading="lazy"></div>
      <div class="portfolio-img"><img src="/assets/images/portfolio/Living_Room_Final_Render_Camera007.webp" alt="Modern penthouse living room design" loading="lazy"></div>
    </div>
    <div class="portfolio-row">
      <div class="portfolio-img"><img src="/assets/images/portfolio/Dining_Area_View_03.webp" alt="Resort suite living room design" loading="lazy"></div>
    </div>
     <div class="portfolio-row">
      <div class="portfolio-img"><img src="/assets/images/portfolio/2_Post.webp" alt="Resort suite living room design" loading="lazy"></div>
      <div class="portfolio-img"><img src="/assets/images/portfolio/AutoBackup01_final_Corona_Camera012.webp" alt="Resort suite living room design" loading="lazy"></div>
    </div>
  </div>
  <img class="floating-head" src="/assets/images/our_porfolio.svg" alt="Our Portfolio" width="195" height="37">

</section>


<style>
  .home-portfolio{
    /* margin-top: 210px; */
    width: 100%;
    padding: 72px 40px 220px 40px;
    /* display: flex; */
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 2;
    position: relative;
    background-color: var(--accent);
  }

  .home-portfolio h2 {
    font-size: 18vw;
    font-weight: 300;
    margin-bottom: 40px;
    color: var(--black);
    text-align: center;
  }

  .home-portfolio .floating-head{
    position: absolute;
    top: 0;
    left: 0;
    z-index: 3;
    width: 195px;
    height: 37px;
    margin: 0;
    pointer-events: none;
    opacity: 0;
    transform: translate(-50%, -50%) scale(0);
    transform-origin: center;
    transition: transform 220ms ease, opacity 160ms ease;
    will-change: left, top, transform;
  }
  @media (hover: hover) and (pointer: fine){
    .home-portfolio:hover .floating-head{
      opacity: 1;
      transform: translate(-50%, -50%) scale(1);
    }
  }
  .portfolio-grid{
    display: grid;
    gap: 40px;
  }
  .portfolio-row{
    display: grid;
    grid-template-columns: repeat(12, minmax(0, 1fr));
    grid-template-rows: minmax(0, 1fr);
    gap: 40px;
    overflow: hidden;
    width: 100%;
    /* max-height: 800px; */
  }
  .portfolio-row:nth-child(1){
    height: 800px;
  }
  .portfolio-row:nth-child(2){
    height: 565px;
  }
  .portfolio-row:nth-child(3){
    height: 575px;
  }
  .portfolio-row:nth-child(4){
    height: 960px;
  }
  .portfolio-row:nth-child(5){
    height: 810px;
  }
  .portfolio-img{
    grid-column: span 12;
    min-width: 0;
    height: 100%;
    /* max-width: 600px; */
    overflow: hidden;
  }
  .portfolio-row:nth-child(2) .portfolio-img:first-child{
    grid-column: span 3;
  }
  .portfolio-row:nth-child(2) .portfolio-img:nth-child(2){
    grid-column: span 9;
  }
  .portfolio-row:nth-child(3) .portfolio-img{
    grid-column: span 6;
  }
  .portfolio-row:nth-child(5) .portfolio-img:nth-child(2){
    grid-column: span 7;
  }
  .portfolio-row:nth-child(5) .portfolio-img:first-child{
    grid-column: span 5;
  }
  .portfolio-img img{
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transform: translate3d(0, var(--scroll-y, 0px), 0) scale(1.1);
    will-change: transform;
  }
</style>

<script>
  (() => {
    const section = document.querySelector(".home-portfolio");
    const heading = section?.querySelector(".floating-head");
    const images = [...(section?.querySelectorAll(".portfolio-img img") || [])]
      .map((image) => ({ image, y: 0, targetY: 0 }));
    const enableFloatingHead = false;
    if (!section) return;
    if (heading) heading.hidden = !enableFloatingHead;

    let frame = 0;
    let imageFrame = 0;
    let lastTime = 0;
    let initialized = false;
    let x = 0, y = 0, targetX = 0, targetY = 0, pointerX = 0, pointerY = 0;

    const moveImages = (time) => {
      imageFrame = 0;
      const ease = 1 - Math.exp(-(time - (moveImages.lastTime || time - 16.7)) / 100);
      moveImages.lastTime = time;
      let moving = false;

      images.forEach((item) => {
        item.y += (item.targetY - item.y) * ease;
        item.image.style.setProperty("--scroll-y", `${item.y}px`);
        if (Math.abs(item.targetY - item.y) > 0.1) moving = true;
      });

      if (moving) {
        imageFrame = requestAnimationFrame(moveImages);
      } else {
        moveImages.lastTime = 0;
      }
    };

    const updateImages = () => {
      const viewportHeight = window.innerHeight;
      images.forEach((item) => {
        const bounds = item.image.parentElement.getBoundingClientRect();
        const progress = Math.max(0, Math.min(1, (viewportHeight - bounds.top) / (viewportHeight + bounds.height)));
        item.targetY = (progress * 2 - 1) * bounds.height * 0.1;
      });
      if (!imageFrame) imageFrame = requestAnimationFrame(moveImages);
    };

    const update = () => {
      const bounds = section.getBoundingClientRect();
      if (pointerX < bounds.left || pointerX > bounds.right || pointerY < bounds.top || pointerY > bounds.bottom) {
        cancelAnimationFrame(frame);
        frame = lastTime = 0;
        return;
      }

      const halfWidth = heading.offsetWidth / 2;
      const halfHeight = heading.offsetHeight / 2;
      const minX = Math.min(halfWidth, bounds.width / 2);
      const minY = Math.min(halfHeight, bounds.height / 2);
      const maxX = Math.max(minX, bounds.width - halfWidth);
      const maxY = Math.max(minY, bounds.height - halfHeight);
      targetX = Math.min(maxX, Math.max(minX, pointerX - bounds.left));
      targetY = Math.min(maxY, Math.max(minY, pointerY - bounds.top));
      if (!frame) frame = requestAnimationFrame(animate);
    };

    const animate = (time) => {
      const ease = 1 - Math.exp(-(time - (lastTime || time - 16.7)) / 100);
      lastTime = time;
      x += (targetX - x) * ease;
      y += (targetY - y) * ease;
      heading.style.left = `${x}px`;
      heading.style.top = `${y}px`;
      if (Math.abs(targetX - x) > 0.1 || Math.abs(targetY - y) > 0.1) {
        frame = requestAnimationFrame(animate);
      } else {
        frame = 0;
        lastTime = 0;
      }
    };

    window.addEventListener("scroll", updateImages, { passive: true });
    window.addEventListener("resize", updateImages);
    updateImages();

    if (enableFloatingHead && heading) {
      window.addEventListener("scroll", () => section.matches(":hover") && update(), { passive: true });

      section.addEventListener("pointermove", (event) => {
        if (event.pointerType !== "mouse") return;

        pointerX = event.clientX;
        pointerY = event.clientY;
        if (!initialized) {
          update();
          x = targetX;
          y = targetY;
          heading.style.left = `${x}px`;
          heading.style.top = `${y}px`;
          initialized = true;
        }
        update();
      });
    }
  })();
</script>