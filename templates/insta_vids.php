<section class="insta-vid-section" aria-labelledby="insta-vid-heading">
    <div class="insta-vid-inner">
        <div class="insta-vid-heading-row">
            <div>
                <p class="insta-vid-eyebrow">Follow our work</p>
                <h2 id="insta-vid-heading">Thekedaar on Instagram</h2>
            </div>
            <div class="insta-vid-controls" aria-label="Carousel controls">
                <button class="insta-vid-arrow insta-vid-prev" type="button" aria-label="Show previous videos">
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M15 18 9 12l6-6"/></svg>
                </button>
                <button class="insta-vid-arrow insta-vid-next" type="button" aria-label="Show next videos">
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="m9 18 6-6-6-6"/></svg>
                </button>
            </div>
        </div>

        <div class="insta-vid-track" tabindex="0" aria-label="Instagram video carousel">
            <?php for ($video = 1; $video <= 5; $video++): ?>
                <article class="insta-vid-card">
                    <video src="assets/videos/insta/<?php echo $video; ?>.mp4" controls autoplay muted loop playsinline preload="metadata" aria-label="Thekedaar Instagram video <?php echo $video; ?>"></video>
                </article>
            <?php endfor; ?>
        </div>
    </div>
</section>

<style>
    .insta-vid-section { padding: clamp(48px, 7vw, 88px) 20px; background: #FAEFDF; }
    .insta-vid-inner { width: min(1240px, 100%); margin: 0 auto; }
    .insta-vid-heading-row { display: flex; align-items: end; justify-content: space-between; gap: 24px; margin-bottom: 26px; }
    .insta-vid-eyebrow { margin: 0 0 8px; color: #92734e; font-size: 12px; font-weight: 700; letter-spacing: .16em; text-transform: uppercase; }
    .insta-vid-heading-row h2 { margin: 0; color: #24211d; font-size: clamp(28px, 4vw, 42px); line-height: 1.15; }
    .insta-vid-controls { display: flex; gap: 10px; flex: 0 0 auto; }
    .insta-vid-arrow { display: grid; width: 46px; height: 46px; place-items: center; border: 1px solid #c9c1b6; border-radius: 50%; background: transparent; color: #24211d; cursor: pointer; transition: background .2s, color .2s, border-color .2s; }
    .insta-vid-arrow:hover, .insta-vid-arrow:focus-visible { border-color: #24211d; background: #24211d; color: #fff; }
    .insta-vid-arrow:focus-visible { outline: 2px solid #92734e; outline-offset: 3px; }
    .insta-vid-arrow svg { width: 22px; height: 22px; fill: none; stroke: currentColor; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
    .insta-vid-track { display: grid; grid-auto-columns: clamp(210px, 23vw, 276px); grid-auto-flow: column; gap: 18px; overflow-x: auto; padding: 2px 2px 14px; scroll-snap-type: x mandatory; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none; touch-action: pan-x; }
    .insta-vid-track::-webkit-scrollbar { display: none; }
    .insta-vid-card { min-width: 0; overflow: hidden; aspect-ratio: 9 / 16; border-radius: 12px; background: #211e1a; scroll-snap-align: start; box-shadow: 0 8px 24px rgb(33 30 26 / 12%); }
    .insta-vid-card video { display: block; width: 100%; height: 100%; object-fit: cover; }
    @media (max-width: 600px) {
        .insta-vid-section { padding-inline: 16px; }
        .insta-vid-heading-row { align-items: center; gap: 12px; }
        .insta-vid-controls { gap: 7px; }
        .insta-vid-arrow { width: 40px; height: 40px; }
        .insta-vid-track { grid-auto-columns: 80%; gap: 13px; justify-content: start; }
    }
    @media (prefers-reduced-motion: reduce) { .insta-vid-arrow { transition: none; } .insta-vid-track { scroll-behavior: auto; } }
</style>

<script>
(() => {
    document.querySelectorAll('.insta-vid-section').forEach((section) => {
        const track = section.querySelector('.insta-vid-track');
        const previous = section.querySelector('.insta-vid-prev');
        const next = section.querySelector('.insta-vid-next');
        section.querySelectorAll('video').forEach((video) => {
            // Keep playback continuous even in browsers that fail to honor the loop flag.
            video.addEventListener('ended', () => {
                video.currentTime = 0;
                video.play().catch(() => {});
            });
            video.play().catch(() => {});
        });
        const scrollByCard = (direction) => {
            const card = track.querySelector('.insta-vid-card');
            if (card) track.scrollBy({ left: direction * (card.getBoundingClientRect().width + parseFloat(getComputedStyle(track).columnGap || 0)), behavior: 'smooth' });
        };
        previous.addEventListener('click', () => scrollByCard(-1));
        next.addEventListener('click', () => scrollByCard(1));

    });
})();
</script>
