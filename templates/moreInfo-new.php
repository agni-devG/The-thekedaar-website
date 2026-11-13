<?php
$moreInfoSlides = [
    [
        'title' => 'Time-saving Decision',
        'copy' => 'When it comes to designing every space of your house it proves to be exhausting. Besides this, it takes a lot of time, and in return you get nothing. Therefore, the best way to resolve this is to hire an interior designer who will change the appearance of your home.',
        'image' => 'assets/images/image-2.webp',
        'alt' => 'Modern interior design',
    ],
    [
        'title' => 'Design your Home in Your Style',
        'copy' => 'Interior decorators have better knowledge related to design. As a result of this, they will design your home according to your preferences as it matters the most.',
        'image' => 'assets/images/moreInfo/6.webp',
        'alt' => 'Interior designed to match your style',
    ],
    [
        'title' => 'Good Planning',
        'copy' => 'The entire process of designing works on in-depth planning and assessment. Due to this reason, interior designers formulate a plan before designing so that they work according to it.',
        'image' => 'assets/images/moreInfo/1.webp',
        'alt' => 'Interior design planning',
    ],
    [
        'title' => 'Works as Per Your Budget',
        'copy' => 'When you work with experienced interior designers, every element of your home is thoughtfully curated to complement your vision and lifestyle. From premium materials and sophisticated colour palettes to exceptional designs and modern furniture, each detail is carefully selected to create a harmonious living space. The result is a home that reflects your personality through refined aesthetics, timeless appeal, and uncompromising quality.',
        'image' => 'assets/images/moreInfo/2.webp',
        'alt' => 'Commercial interior design',
    ],
    [
        'title' => 'Modern Tools',
        'copy' => 'Nowadays, interior designers use fine-quality tools for designing your home. They also use modern software and tools to plan home and office renovations, making the renovation work easier.',
        'image' => 'assets/images/moreInfo/3.webp',
        'alt' => 'Modern interior design tools',
    ],
    [
        'title' => 'Creative Ideas',
        'copy' => 'Following everyday room designs in these changing times is not a great idea. When you want to change the look of your home or office, you need creative ideas and designs. An interior designer can provide innovative ideas for every space.',
        'image' => 'assets/images/moreInfo/4.webp',
        'alt' => 'Creative commercial interior design',
    ],
];
?>

<section class="more-info-section narrow-container">
    <h2>More Info on us</h2>

    <div class="swiper more-info-swiper" aria-label="More information about our services">
        <div class="swiper-wrapper">
            <?php foreach ($moreInfoSlides as $slide): ?>
                <article class="swiper-slide more-info-slide">
                    <div class="more-info-block">
                        <div class="more-info-text">
                            <h3><?= htmlspecialchars($slide['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p><?= htmlspecialchars($slide['copy'], ENT_QUOTES, 'UTF-8') ?></p>
                            <?php
                            $btnHref = 'contact-us-2';
                            $btnText = 'Contact Us';
                            include 'templates/btn-ofc.php';
                            ?>
                        </div>
                        <div class="more-info-img">
                            <img src="<?= htmlspecialchars($slide['image'], ENT_QUOTES, 'UTF-8') ?>"
                                 alt="<?= htmlspecialchars($slide['alt'], ENT_QUOTES, 'UTF-8') ?>"
                                 loading="lazy" decoding="async" draggable="false">
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
<style>
    .more-info-section{
        margin-bottom: 225px;
    }
    /* Original More Info styles */
    .more-info-section h2 {
        margin-bottom: 62px;
        font-size: 52px;
        font-weight: 400;
    }

    .more-info-block {
        display: flex;
        justify-content: space-between;
        gap: 150px;
    }

    .more-info-text h3 { margin-bottom: 20px; }

    .more-info-text p {
        color: white;
        margin-bottom: 112px;
        max-width: 72ch;
    }

    .more-info-img {
        overflow: hidden;
        /* aspect-ratio: 9 / 6; */
    }

    .more-info-img img {
        width: 100%;
        aspect-ratio: 9 / 6;
        height: auto;
        max-height: 800px;
    }

    /* Swiper drag layout additions */
    .more-info-swiper {
        width: 100%;
        overflow: hidden;
        cursor: grab;
        touch-action: pan-y;
    }

    .more-info-swiper:active { cursor: grabbing; }

    .more-info-slide {
        width: 100%;
        height: auto;
        flex-shrink: 0;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
    (() => {
        const container = document.querySelector('.more-info-swiper');
        if (!container || !window.Swiper) return;

        new Swiper(container, {
            slidesPerView: 1,
            spaceBetween: 32,
            speed: 650,
            grabCursor: true,
            simulateTouch: true,
            allowTouchMove: true,
            touchStartPreventDefault: false,
            loop: false
        });
    })();
</script>
