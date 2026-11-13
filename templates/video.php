<?php
$designVideos = [
    ['id' => '1116048567', 'title' => 'A Journey Through Home'],
    ['id' => '1116048609', 'title' => 'Homes That Breathe'],
    ['id' => '1116048621', 'title' => 'Living Beyond Walls'],
    ['id' => '1116048638', 'title' => 'The Beauty of Simple Living'],
    ['id' => '1116048690', 'title' => 'Designed for Everyday Moments'],
    ['id' => '1116048718', 'title' => 'Interiors Made for Living'],
    ['id' => '1116048587', 'title' => 'A Space to Call Your Own'],
    ['id' => '1116048746', 'title' => 'Every Corner Has a Story'],
    ['id' => '1116048669', 'title' => 'Inside the Heart of Home'],
];
?>

<section class="video-section">
  <div class="video-wrapper">
    <div class="video-info">
      <span class="section-title">OUR DESIGNS</span>
      <h2>
        A Home<br>
        Unlike Any Other
      </h2>
      <p>Thoughtfully designed around your taste, your lifestyle, and everything that makes your home uniquely yours.</p>
    </div>

    <div class="videos-container">
      <?php foreach (array_chunk($designVideos, 3) as $videoRow): ?>
        <div class="video-row">
          <?php foreach ($videoRow as $video): ?>
            <div class="video-card" data-video="<?= htmlspecialchars($video['id'], ENT_QUOTES, 'UTF-8') ?>">
              <div class="video-card__frame" aria-hidden="true"></div>
              <button
                class="video-card__open"
                type="button"
                aria-label="Play <?= htmlspecialchars($video['title'], ENT_QUOTES, 'UTF-8') ?> fullscreen">
                <span><?= htmlspecialchars($video['title'], ENT_QUOTES, 'UTF-8') ?></span>
              </button>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="video-modal" role="dialog" aria-modal="true" aria-label="Fullscreen video" hidden>
  <button class="video-modal__close" type="button" aria-label="Close video">&times;</button>
  <div class="video-modal__content"></div>
</div>

<style>
.video-section {
  width: 100%;
  margin: 120px 0;
  padding-inline: 40px;
}

.video-section .section-title {
  display: block;
  margin-bottom: 32px;
}

.video-wrapper {
  display: grid;
  grid-template-columns: 5fr 7fr;
  gap: 48px;
  align-items: start;
  overflow: visible;
}

.video-info {
  position: sticky;
  top: 60px;
  align-self: start;
  height: 70vh;

}

.video-info h2 {
  margin-bottom: 20px;
  font-weight: 300;
  font-size: 75px;
  line-height: 100%;
}

.video-info p {
  max-width: 420px;
  color: var(--white);
  line-height: 140%;
}

.videos-container {
  display: grid;
  gap: 48px;
  min-width: 0;
}

.video-row {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 32px;
}

.video-card {
  position: relative;
  width: 100%;
  aspect-ratio: 9 / 16;
  overflow: hidden;
  background: #111;
  border-radius: 0;
}

.video-card:nth-child(2) {
  margin-top: 72px;
}

.video-card:nth-child(3) {
  margin-top: 36px;
}

.video-card__frame,
.video-card__frame iframe {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
}

.video-card__frame iframe {
  display: block;
  border: 0;
  pointer-events: none;
}

.video-card__open {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: flex-end;
  width: 100%;
  padding: 14px;
  border: 0;
  border-radius: 0;
  color: #fff;
  background: linear-gradient(transparent 65%, rgb(0 0 0 / 55%));
  font: inherit;
  text-align: left;
  cursor: pointer;
}

.video-card__open:focus-visible,
.video-modal__close:focus-visible {
  outline: 2px solid #fff;
  outline-offset: -5px;
}

.video-modal[hidden] {
  display: none;
}

.video-modal {
  position: fixed;
  inset: 0;
  z-index: 99999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
  background: rgb(0 0 0 / 96%);
}

.video-modal__content {
  width: min(100%, calc((100vh - 48px) * 9 / 16));
  height: min(90vh, calc(100vw * 16 / 9));
  aspect-ratio: 9 / 16;
}

.video-modal__content iframe {
  display: block;
  width: 100%;
  height: 100%;
  border: 0;
}

.video-modal__close {
  position: absolute;
  top: max(16px, env(safe-area-inset-top));
  right: max(16px, env(safe-area-inset-right));
  z-index: 1;
  display: grid;
  place-items: center;
  width: 44px;
  height: 44px;
  border: 1px solid rgb(255 255 255 / 70%);
  border-radius: 50%;
  color: #fff;
  background: rgb(0 0 0 / 55%);
  font-size: 30px;
  line-height: 1;
  cursor: pointer;
}

@media (max-width: 900px) {
  .video-section {
    margin: 80px 0;
    padding-inline: 24px;
  }

  .video-wrapper {
    grid-template-columns: 1fr;
    gap: 32px;
  }

}

@media (max-width: 600px) {
  .video-section {
    padding-inline: 16px;
  }

  .video-row {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 12px;
  }

  .videos-container {
    gap: 12px;
  }
}
</style>

<script src="https://player.vimeo.com/api/player.js"></script>
<script>
(() => {
  const cards = Array.from(document.querySelectorAll(".video-section .video-card"));
  const modal = document.querySelector(".video-modal");
  const modalContent = modal && modal.querySelector(".video-modal__content");
  const closeButton = modal && modal.querySelector(".video-modal__close");

  if (!cards.length || !modal || !modalContent || !closeButton || !window.Vimeo) {
    console.error("The design videos could not initialize because the Vimeo Player API failed to load.");
    return;
  }

  const players = new Map();
  let modalPlayer = null;
  let lastFocusedElement = null;

  function makeIframe(id, title) {
    const iframe = document.createElement("iframe");
    iframe.src = `https://player.vimeo.com/video/${encodeURIComponent(id)}?background=1&autopause=0&playsinline=1`;
    iframe.title = title;
    iframe.allow = "autoplay; fullscreen; picture-in-picture";
    iframe.allowFullscreen = true;
    iframe.loading = "lazy";
    iframe.referrerPolicy = "strict-origin-when-cross-origin";
    return iframe;
  }

  function loadCard(card) {
    if (players.has(card)) {
      return;
    }

    const iframe = makeIframe(card.dataset.video, card.querySelector(".video-card__open").textContent.trim());
    card.querySelector(".video-card__frame").appendChild(iframe);

    const player = new window.Vimeo.Player(iframe);
    players.set(card, player);
    player.ready().then(() => {
      if (card.dataset.visible === "true" && modal.hidden) {
        return player.play();
      }
    }).catch((error) => {
      console.error(`Could not start Vimeo video ${card.dataset.video}.`, error);
    });
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      const card = entry.target;
      const isVisible = entry.isIntersecting;
      card.dataset.visible = String(isVisible);

      if (isVisible) {
        loadCard(card);
      }

      const player = players.get(card);
      if (player) {
        const action = isVisible && modal.hidden ? player.play() : player.pause();
        action.catch((error) => {
          console.error(`Could not update playback for Vimeo video ${card.dataset.video}.`, error);
        });
      }
    });
  }, { rootMargin: "100px", threshold: 0.1 });

  cards.forEach((card) => {
    observer.observe(card);
    card.querySelector(".video-card__open").addEventListener("click", () => {
      lastFocusedElement = document.activeElement;
      modal.hidden = false;
      document.body.style.overflow = "hidden";

      players.forEach((player) => {
        player.pause().catch((error) => {
          console.error("Could not pause a background Vimeo video.", error);
        });
      });

      const iframe = makeIframe(
        card.dataset.video,
        card.querySelector(".video-card__open").textContent.trim()
      );
      modalContent.replaceChildren(iframe);
      modalPlayer = new window.Vimeo.Player(iframe);
      modalPlayer.ready()
        .then(() => modalPlayer && modalPlayer.play())
        .catch((error) => {
          console.error("Could not start the fullscreen Vimeo video.", error);
        });
      closeButton.focus();
    });
  });

  async function closeModal() {
    if (modal.hidden) {
      return;
    }

    modal.hidden = true;
    document.body.style.overflow = "";

    if (modalPlayer) {
      const player = modalPlayer;
      modalPlayer = null;
      try {
        await player.destroy();
      } catch (error) {
        console.error("Could not close the fullscreen Vimeo video.", error);
      }
    }

    modalContent.replaceChildren();
    cards.forEach((card) => {
      const player = players.get(card);
      if (player && card.dataset.visible === "true") {
        player.play().catch((error) => {
          console.error(`Could not resume Vimeo video ${card.dataset.video}.`, error);
        });
      }
    });

    if (lastFocusedElement instanceof HTMLElement) {
      lastFocusedElement.focus();
    }
  }

  closeButton.addEventListener("click", closeModal);
  modal.addEventListener("click", (event) => {
    if (event.target === modal) {
      closeModal();
    }
  });
  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeModal();
    }
  });
})();
</script>
