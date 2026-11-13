<section class="frntr-section">
    <div class="frntr-wrapper" role="button" tabindex="0" aria-label="Play the full custom furniture video with sound">
        <video class="frntr-background-video" autoplay muted loop playsinline preload="auto" aria-hidden="true">
            <source src="/assets/videos/custom-furniture_short.mp4" type="video/mp4">
        </video>
        <div class="frntr-background-gradient" aria-hidden="true"></div>
        <span class="frntr-cursor" aria-hidden="true">
            <img src="/assets/images/video-cusror.svg" alt="">
        </span>
        <div class="frntr-content">
            <h2>We control the quality</h2>
            <p>Every piece of furniture is made in our 10,000 sq. ft. factory, with thoughtful design, quality materials, and comfort built to last. </p>
        </div>
    </div>

    <div class="frntr-video-modal" hidden>
        <button class="frntr-video-close" type="button" aria-label="Close video">&times;</button>
        <video class="frntr-full-video" controls playsinline preload="none">
            <source src="/assets/videos/custom-furniture.mp4" type="video/mp4">
        </video>
    </div>
</section>


<style>
    .frntr-section{
        margin: 120px 0;
    }
    .frntr-wrapper{
        position: relative;
        overflow: hidden;
        padding: 0 160px;
        height:100vh;
        display: flex;
        align-items: flex-end;
        cursor: url("/assets/images/video-cusror.svg") 47 47, pointer;
        isolation: isolate;
    }

    @media (hover: hover) and (pointer: fine) {
        .frntr-wrapper {
            cursor: none;
        }
    }

    .frntr-cursor {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
        width: 94px;
        height: 94px;
        opacity: 0;
        pointer-events: none;
        transform: translate(-50%, -50%) scale(0);
        transform-origin: center;
        transition: transform 220ms ease, opacity 160ms ease;
        will-change: left, top, transform;
    }

    .frntr-wrapper.is-cursor-active .frntr-cursor {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }

    .frntr-cursor img {
        display: block;
        width: 100%;
        height: 100%;
    }

    .frntr-wrapper:focus-visible {
        outline: 2px solid #ffffff;
        outline-offset: -6px;
    }

    .frntr-background-video {
        position: absolute;
        inset: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        object-fit: cover;
        pointer-events: none;
    }

    .frntr-background-gradient {
        position: absolute;
        inset: 0;
        z-index: 0;
        background: linear-gradient(
            0deg,
            #0C0503 0%,
            rgb(12 5 3 / 16%) 24%,
            rgb(12 5 3 / 0%) 64%,
            #0C0503 100%
        );
        pointer-events: none;
    }

    .frntr-content {
        position: relative;
        z-index: 1;
        color: #ffffff;
        pointer-events: none;
        padding-bottom: 12vh;

    }

    .frntr-content h2 {
        font-size: 76px;
        font-weight: 300;
    }

    .frntr-content p {
        color: #ffffff;
        max-width: 45ch;
    }

    .frntr-video-modal[hidden] {
        display: none;
    }

    .frntr-video-modal {
        position: fixed;
        inset: 0;
        z-index: 100000;
        display: grid;
        place-items: center;
        padding: 24px;
        background: #000000;
    }

    .frntr-full-video {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .frntr-full-video:fullscreen {
        width: 100%;
        height: 100%;
        object-fit: contain;
        background: #000000;
    }

    .frntr-video-close {
        position: absolute;
        top: 16px;
        right: 16px;
        z-index: 1;
        width: 44px;
        height: 44px;
        border: 1px solid #ffffff;
        border-radius: 50%;
        color: #ffffff;
        background: #00000099;
        font-size: 30px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .frntr-wrapper {
            padding: 0 24px;
        }
    }
</style>

<script>
(() => {
    const section = document.querySelector(".frntr-section");
    const wrapper = section && section.querySelector(".frntr-wrapper");
    const modal = section && section.querySelector(".frntr-video-modal");
    const fullVideo = section && section.querySelector(".frntr-full-video");
    const closeButton = section && section.querySelector(".frntr-video-close");

    if (!wrapper || !modal || !fullVideo || !closeButton) {
        return;
    }

    const customCursor = wrapper.querySelector(".frntr-cursor");
    let cursorFrame = 0;
    let cursorX = 0;
    let cursorY = 0;
    let targetCursorX = 0;
    let targetCursorY = 0;
    let pointerClientX = 0;
    let pointerClientY = 0;

    const updateCursorTarget = () => {
        const bounds = wrapper.getBoundingClientRect();
        const pointerIsOverWrapper = pointerClientX >= bounds.left
            && pointerClientX <= bounds.right
            && pointerClientY >= bounds.top
            && pointerClientY <= bounds.bottom;

        if (!pointerIsOverWrapper) {
            wrapper.classList.remove("is-cursor-active");
            cancelAnimationFrame(cursorFrame);
            cursorFrame = 0;
            return;
        }

        targetCursorX = pointerClientX - bounds.left;
        targetCursorY = pointerClientY - bounds.top;

        if (!cursorFrame) {
            cursorFrame = requestAnimationFrame(animateCursor);
        }
    };

    const animateCursor = () => {
        cursorX += (targetCursorX - cursorX) * 0.2;
        cursorY += (targetCursorY - cursorY) * 0.2;
        customCursor.style.left = `${cursorX}px`;
        customCursor.style.top = `${cursorY}px`;

        if (Math.abs(targetCursorX - cursorX) > 0.1 || Math.abs(targetCursorY - cursorY) > 0.1) {
            cursorFrame = requestAnimationFrame(animateCursor);
        } else {
            cursorFrame = 0;
        }
    };

    window.addEventListener("scroll", () => {
        if (wrapper.classList.contains("is-cursor-active")) {
            updateCursorTarget();
        }
    }, { passive: true });

    wrapper.addEventListener("pointerenter", (event) => {
        if (event.pointerType !== "mouse" || !customCursor) {
            return;
        }

        pointerClientX = event.clientX;
        pointerClientY = event.clientY;
        const bounds = wrapper.getBoundingClientRect();
        cursorX = targetCursorX = pointerClientX - bounds.left;
        cursorY = targetCursorY = pointerClientY - bounds.top;
        customCursor.style.left = `${cursorX}px`;
        customCursor.style.top = `${cursorY}px`;
        wrapper.classList.add("is-cursor-active");
    });

    wrapper.addEventListener("pointermove", (event) => {
        if (event.pointerType !== "mouse" || !customCursor) {
            return;
        }

        pointerClientX = event.clientX;
        pointerClientY = event.clientY;
        updateCursorTarget();
    });

    wrapper.addEventListener("pointerleave", () => {
        wrapper.classList.remove("is-cursor-active");
        cancelAnimationFrame(cursorFrame);
        cursorFrame = 0;
    });

    const closeVideo = () => {
        fullVideo.pause();
        fullVideo.currentTime = 0;
        modal.hidden = true;
    };

    const playFullVideo = async () => {
        modal.hidden = false;
        fullVideo.muted = false;

        try {
            await fullVideo.play();
        } catch (error) {
            modal.hidden = true;
            console.error("Could not play the custom furniture video.", error);
            return;
        }

        if (typeof fullVideo.requestFullscreen === "function") {
            try {
                await fullVideo.requestFullscreen();
            } catch (error) {
                console.warn("Fullscreen is unavailable; showing the video in the page instead.", error);
            }
        }
    };

    wrapper.addEventListener("click", playFullVideo);
    wrapper.addEventListener("keydown", (event) => {
        if (event.key === "Enter" || event.key === " ") {
            event.preventDefault();
            playFullVideo();
        }
    });

    closeButton.addEventListener("click", async () => {
        if (document.fullscreenElement === fullVideo) {
            try {
                await document.exitFullscreen();
            } catch (error) {
                console.error("Could not exit fullscreen video.", error);
            }
        }
        closeVideo();
    });

    document.addEventListener("fullscreenchange", () => {
        if (document.fullscreenElement !== fullVideo && !modal.hidden) {
            closeVideo();
        }
    });
})();
</script>