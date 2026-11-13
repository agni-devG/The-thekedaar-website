<?php
$teamMembers = [
    ['name' => 'Shaurya', 'role' => 'Head of Architecture & Civil', 'image' => '1.webp'],
    ['name' => 'Mehek', 'role' => 'Design & Project Head', 'image' => '2.webp'],
    ['name' => 'Anil', 'role' => 'Production Manager', 'image' => '3.webp'],
    ['name' => 'Akhil', 'role' => 'Sales Manager', 'image' => '4.webp'],
    ['name' => 'Dashmeet', 'role' => 'Operations Manager', 'image' => '5.webp'],
    ['name' => 'Vikas Mishra', 'role' => 'Head of Sales', 'image' => '6.webp'],
];
?>

<section class="section-team">
    <div class="team-discription">
        <div class="team-left-col">
            <h2>Our Team</h2>
            <p>We’re a hand picked collective of high impact design, communication & digital experts. Orchestrated as a lean, highly capable team that seamlessly blends creativity and technology.</p>
        </div>
        <div class="team-right-col">
            <?php
                $btnHref = 'contact-us-2';
                $btnText = 'Book An Appointment';
                include 'templates/btn-ofc.php';
                ?>
        </div>
    </div>

    <div class="team-grid">
        <?php foreach ($teamMembers as $member): ?>
            <article class="team-card">
                <div class="team-photo">
                    <img src="/assets/images/team/<?= htmlspecialchars($member['image'], ENT_QUOTES, 'UTF-8') ?>"
                         alt="<?= htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8') ?>"
                         loading="lazy" decoding="async">
                </div>
                <div class="team-card-info">
                    <h3><?= htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <p><?= htmlspecialchars($member['role'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<style>
    .section-team {
        padding: 120px 40px;
        background: var(--black);
        color: var(--white);
    }

    .team-discription {
        display: flex;
        justify-content: space-between;
        align-items: end;
        gap: 32px;
        max-width: 1440px;
        margin: 0 auto 56px;
    }

    .team-left-col h2 {
        margin-bottom: 14px;
        font-weight: 300;
    }

    .team-left-col p {
        max-width: 50ch;
        color: var(--light-grey);
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 80px 80px;
        max-width: 1440px;
        margin: 0 auto;
    }

    .team-photo {
        overflow: hidden;
        aspect-ratio: 1 / 1;
        background: #161312;
    }

    .team-photo img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
        transform: translate3d(0, var(--scroll-y, 0px), 0) scale(1.1);
        will-change: transform;
    }

    .team-card-info { padding-top: 18px; }

    .team-card-info h3 {
        margin-bottom: 6px;
        font-size: 28px;
        font-weight: 400;
    }

    .team-card-info p {
        color: var(--light-grey);
        font-size: 16px;
    }

    @media (max-width: 900px) {
        .section-team { padding: 90px 32px; }
        .team-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 36px 20px;
        }
    }

    @media (max-width: 600px) {
        .section-team { padding: 72px 20px; }
        .team-discription {
            align-items: flex-start;
            flex-direction: column;
            margin-bottom: 36px;
        }
        .team-grid {
            grid-template-columns: 1fr;
            gap: 32px;
        }
        .team-card-info h3 { font-size: 24px; }
    }
</style>

<script>
    (() => {
        const section = document.querySelector('.section-team');
        if (!section) return;

        const images = [...section.querySelectorAll('.team-photo img')]
            .map((image) => ({ image, y: 0, targetY: 0 }));
        let imageFrame = 0;
        let lastTime = 0;

        const moveImages = (time) => {
            imageFrame = 0;
            const ease = 1 - Math.exp(-(time - (lastTime || time - 16.7)) / 100);
            lastTime = time;
            let moving = false;

            images.forEach((item) => {
                item.y += (item.targetY - item.y) * ease;
                item.image.style.setProperty('--scroll-y', `${item.y}px`);
                if (Math.abs(item.targetY - item.y) > 0.1) moving = true;
            });

            if (moving) {
                imageFrame = requestAnimationFrame(moveImages);
            } else {
                lastTime = 0;
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

        window.addEventListener('scroll', updateImages, { passive: true });
        window.addEventListener('resize', updateImages);
        updateImages();
    })();
</script>
