<?php
$testimonialsNewItems = [
    [
        'quote' => 'Working with this studio was a dream! Our 3BHK now looks like it belongs in a magazine. Every guest who walks in compliments the vibe and layout.',
        'name' => 'Khurshid Alam',
        'location' => 'Mayur Vihar, Delhi',
    ],
    [
        'quote' => 'They completely transformed our old apartment into a modern masterpiece. We especially loved how they balanced aesthetics with functionality.',
        'name' => 'Inderjit Bhowmick',
        'location' => 'Greater Kailash II, Delhi',
    ],
    [
        'quote' => 'The team was professional, creative, and understood exactly what I wanted — even better than I could describe it! My living room is now my favorite spot.',
        'name' => 'Riya Sharma',
        'location' => 'Gurgaon',
    ],
    [
        'quote' => 'The design process was smooth and stress-free. They listened to our needs and turned them into a beautiful, functional space we now love coming home to.',
        'name' => 'Vivek Malhotra',
        'location' => 'Noida',
    ],
    [
        'quote' => 'Attention to detail was incredible. From textures to colors, everything was thoughtfully planned. It feels luxurious yet warm at the same time.',
        'name' => 'Ananya Gupta',
        'location' => 'South Delhi',
    ],
    [
        'quote' => 'We wanted a modern, cozy home — and that’s exactly what we got. The whole process was transparent and professional. Highly recommend their services!',
        'name' => 'Rahul Verma',
        'location' => 'Faridabad',
    ],
];
$firstTestimonial = $testimonialsNewItems[0];
?>

<section class="testimonials">
    <div class="testimonials-nav">
        <?php
        $btnHref = '#previous-testimonial';
        $btnText = 'Previous';
        include 'templates/btn-ofc.php';
        ?>

        <h2 class="section-title">Our clients love us</h2>

        <?php
        $btnHref = '#next-testimonial';
        $btnText = 'Next';
        include 'templates/btn-ofc.php';
        ?>
    </div>

    <div class="testimony" aria-live="polite" aria-atomic="true">
        <p class="testimony-quote">“<?= htmlspecialchars($firstTestimonial['quote'], ENT_QUOTES, 'UTF-8') ?>”</p>
        <div class="client-info">
            <span class="client-name"><?= htmlspecialchars($firstTestimonial['name'], ENT_QUOTES, 'UTF-8') ?></span>
            <span class="client-location"><?= htmlspecialchars($firstTestimonial['location'], ENT_QUOTES, 'UTF-8') ?></span>
        </div>
    </div>

    <style>
        .testimonials {
            padding: 275px 40px;
            position: relative;
            z-index: 2;
        }

        .testimonials-nav {
            display: grid;
            width: 100%;
            align-items: center;
            margin-bottom: 40px;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .testimonials-nav > :nth-child(2) {
            justify-self: center;
            text-align: center;
        }

        .testimonials-nav > :nth-child(3) {
            justify-self: end;
        }

        .testimonials-nav h2 {
            font-weight: 300;
        }

        .testimony {
            text-align: center;
            will-change: opacity;
        }

        .testimony-quote,
        .client-info span {
            font-family: var(--font-display);
            color: var(--white);
            font-weight: 300;
            margin: 0 auto;
        }

        .testimony-quote {
            max-width: 40ch;
            font-size: 28px;
            line-height: 1.2;
        }

        .client-info {
            display: flex;
            flex-direction: column;
            margin-top: 12px;
            gap: 3px;
        }

        .client-info span {
            font-size: 16px;
        }

        @media (max-width: 600px) {
            .testimonials {
                padding: 80px 20px;
            }

            .testimony-quote {
                font-size: 20px;
            }
        }
    </style>

    <script>
        (() => {
            const section = document.currentScript.closest('.testimonials');
            const testimony = section?.querySelector('.testimony');
            const quote = testimony?.querySelector('.testimony-quote');
            const name = testimony?.querySelector('.client-name');
            const location = testimony?.querySelector('.client-location');
            const buttons = section?.querySelectorAll('.testimonials-nav a.btn-default');
            const items = <?= json_encode($testimonialsNewItems, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) ?>;

            if (!testimony || !quote || !name || !location || !buttons || buttons.length < 2 || !items.length) return;

            let activeIndex = 0;
            let isAnimating = false;

            const showTestimonial = (direction) => {
                if (isAnimating) return;
                isAnimating = true;

                const updateContent = () => {
                    activeIndex = (activeIndex + direction + items.length) % items.length;
                    const item = items[activeIndex];
                    quote.textContent = `“${item.quote}”`;
                    name.textContent = item.name;
                    location.textContent = item.location;

                    if (window.gsap) {
                        window.gsap.to(testimony, {
                            autoAlpha: 1,
                            duration: 0.3,
                            ease: 'power2.out',
                            onComplete: () => { isAnimating = false; }
                        });
                    } else {
                        testimony.style.opacity = '1';
                        testimony.style.visibility = 'visible';
                        isAnimating = false;
                    }
                };

                if (window.gsap) {
                    window.gsap.to(testimony, {
                        autoAlpha: 0,
                        duration: 0.2,
                        ease: 'power2.out',
                        onComplete: updateContent
                    });
                } else {
                    testimony.style.opacity = '0';
                    window.setTimeout(updateContent, 200);
                }
            };

            buttons[0].addEventListener('click', (event) => {
                event.preventDefault();
                showTestimonial(-1);
            });

            buttons[buttons.length - 1].addEventListener('click', (event) => {
                event.preventDefault();
                showTestimonial(1);
            });
        })();
    </script>
</section>
