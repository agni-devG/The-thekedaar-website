document.addEventListener("DOMContentLoaded", function () {
    // Legacy pages may load this file directly and through the shared footer.
    // Only one set of hover listeners/timelines should run per page.
    if (window.__thethekedaarMainInitialized) return;
    window.__thethekedaarMainInitialized = true;
//     const menuToggle = document.getElementById("menu-toggle");
//     const mobileNav = document.getElementById("mobile-nav");
//     const closeBtn = document.getElementById("close-btn");

//     if (menuToggle && mobileNav && closeBtn) {
//         menuToggle.addEventListener("click", () => {
//             console.log("Menu button clicked ✅");
//             mobileNav.classList.add("active");
//         });

//         closeBtn.addEventListener("click", () => {
//             console.log("Close button clicked ❌");
//             mobileNav.classList.remove("active");
//         });
//     } else {
//         console.error("Menu elements not found!");
//     }
// });




//     // const faqItems = document.querySelectorAll('.faq-item');

//     // faqItems.forEach(item => {
//     //     const question = item.querySelector('.faq-question');
//     //     const answer = item.querySelector('.faq-answer');
//     //     const icon = item.querySelector('.faq-icon');

//     //     question.addEventListener('click', () => {
//     //         const isActive = item.classList.contains('active');

//     //         // Close all others (accordion style)
//     //         faqItems.forEach(otherItem => {
//     //             otherItem.classList.remove('active');
//     //             otherItem.querySelector('.faq-answer').style.maxHeight = null;
//     //             otherItem.querySelector('.faq-icon').textContent = '+';
//     //         });

//     //         if (!isActive) {
//     //             item.classList.add('active');
//     //             answer.style.maxHeight = answer.scrollHeight + "px";
//     //             icon.textContent = '−'; // change + to minus
//     //         } else {
//     //             item.classList.remove('active');
//     //             answer.style.maxHeight = null;
//     //             icon.textContent = '+';
//     //         }
//     //     });
//     // });



    // Initialize the Lottie menu icons and keep the navigation state in sync.
    const menuButtons = Array.from(document.querySelectorAll(".menu-btn"));
    const navigation = document.getElementById("primary-navigation");
    const navigationLinks = navigation ? navigation.querySelectorAll(".nav-2-links > li") : [];
    const servicesLink = navigation && navigation.querySelector('.nav-2-links > li > a[href$="service-2"]');
    const servicesItem = servicesLink ? servicesLink.closest("li") : null;
    const servicesMenu = servicesItem && servicesItem.querySelector(".services-nav-2");
    const servicesMenuItems = servicesMenu ? servicesMenu.querySelectorAll("li") : [];
    const navigationLogos = document.querySelectorAll(".nav-logo-2 path");
    const appointmentButtons = document.querySelectorAll(".nav-2 .btn-default");
    const navigationBorders = document.querySelectorAll(".nav-brdr");
    const menuIcons = menuButtons
        .map((button) => button.querySelector(".menu-btn-icon"))
        .filter(Boolean);
    menuButtons.forEach((button) => {
        const iconContainer = button.querySelector(".menu-btn-icon");
        button.querySelectorAll("svg").forEach((svg) => {
            if (!iconContainer || !iconContainer.contains(svg)) svg.remove();
        });
    });
    let isMenuOpen = false;
    const navBar = document.querySelector(".nav-2");
    const accentSections = Array.from(document.querySelectorAll("main section"))
        .filter((section) => getComputedStyle(section).backgroundColor === "rgb(250, 239, 223)");
    let navOverAccent = false;
    let navThemeFrame = 0;

    const getNavColor = () => (isMenuOpen || navOverAccent ? "#0C0503" : "#fff");

    const updateNavigationTheme = () => {
        navThemeFrame = 0;
        if (!navBar) return;

        const navRect = navBar.getBoundingClientRect();
        navOverAccent = accentSections.some((section) => {
            const sectionRect = section.getBoundingClientRect();
            return sectionRect.top < navRect.bottom && sectionRect.bottom > navRect.top;
        });

        const color = getNavColor();
        const iconPaths = menuIcons.flatMap((container) => Array.from(container.querySelectorAll("svg path")));
        if (window.gsap) {
            window.gsap.to(menuButtons, { color, duration: 0.2, overwrite: "auto" });
            window.gsap.to(navigationLogos, { fill: color, duration: 0.2, overwrite: "auto" });
            window.gsap.to(appointmentButtons, { color, duration: 0.2, overwrite: "auto" });
            window.gsap.to(iconPaths, { stroke: color, duration: 0.2, overwrite: "auto" });
        } else {
            menuButtons.forEach((button) => { button.style.color = color; });
            navigationLogos.forEach((path) => { path.style.fill = color; });
            appointmentButtons.forEach((button) => { button.style.color = color; });
            iconPaths.forEach((path) => { path.style.stroke = color; });
        }
    };

    const scheduleNavigationThemeUpdate = () => {
        if (!navThemeFrame) navThemeFrame = requestAnimationFrame(updateNavigationTheme);
    };

    window.addEventListener("scroll", scheduleNavigationThemeUpdate, { passive: true });
    window.addEventListener("resize", scheduleNavigationThemeUpdate);
    scheduleNavigationThemeUpdate();

    if (window.gsap) {
        if (servicesMenu && servicesMenuItems.length) {
            window.gsap.set(servicesMenu, { height: 0, marginBottom: 0, overflow: "hidden", autoAlpha: 0 });
            let servicesCloseTimer;

            servicesItem.addEventListener("mouseenter", () => {
                window.clearTimeout(servicesCloseTimer);
                window.gsap.killTweensOf(servicesMenu);
                window.gsap.killTweensOf(servicesMenuItems);
                window.gsap.set(servicesMenu, { overflow: "hidden", autoAlpha: 1 });
                window.gsap.timeline()
                    .to(servicesMenu, {
                        height: "auto",
                        marginBottom: 12,
                        opacity: 1,
                        duration: 0.75,
                        ease: "power3.out"
                    })
                    .fromTo(
                        servicesMenuItems,
                        { opacity: 0, y: 8 },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.3,
                            stagger: 0.06,
                            ease: "power3.out",
                            clearProps: "opacity,transform"
                        },
                        0.08
                    );
            });

            servicesItem.addEventListener("mouseleave", () => {
                // Briefly wait so crossing from the Services link into the submenu
                // does not start a close animation between the two hover areas.
                servicesCloseTimer = window.setTimeout(() => {
                    window.gsap.killTweensOf(servicesMenu);
                    window.gsap.killTweensOf(servicesMenuItems);
                    window.gsap.set(servicesMenu, { overflow: "hidden", visibility: "visible" });
                    window.gsap.timeline({
                        onComplete: () => {
                            window.gsap.set(servicesMenu, {
                                height: 0,
                                marginBottom: 0,
                                overflow: "hidden",
                                opacity: 0,
                                visibility: "hidden"
                            });
                        }
                    }).to(servicesMenu, {
                        height: 0,
                        marginBottom: 0,
                        opacity: 0,
                        duration: 0.9,
                        ease: "power2.inOut"
                    });
                }, 120);
            });
        }

        navigationBorders.forEach((border) => {
            const parentItem = border.closest("li");
            if (!parentItem) {
                return;
            }

            parentItem.addEventListener("mouseenter", () => {
                window.gsap.killTweensOf(border);
                window.gsap.set(border, { scaleX: 1, transformOrigin: "right center" });
                window.gsap.timeline()
                    .to(border, { scaleX: 0, duration: 0.5, ease: "power1.in" })
                    .set(border, { transformOrigin: "left center" }, "-=0")
                    .to(border, { scaleX: 1, duration: 0.5, ease: "power1.out" });
            });
        });
    } else if (navigationBorders.length) {
        console.error("GSAP could not be loaded; the navigation divider animation is unavailable.");
    }

    if (menuButtons.length && navigation && menuIcons.length) {
        if (!window.lottie) {
            console.error("Lottie could not be loaded; the menu icon animation is unavailable.");
        } else {
            const animations = menuIcons.map((container) => {
                if (container.dataset.lottieInitialized === "true") {
                    return null;
                }
                container.dataset.lottieInitialized = "true";
                container.replaceChildren();

                const animation = window.lottie.loadAnimation({
                    container,
                    renderer: "svg",
                    loop: false,
                    autoplay: false,
                    path: "/assets/animated_icons/menu_icon.json"
                });
                let isReady = false;
                let paths = [];

                animation.addEventListener("DOMLoaded", () => {
                    isReady = true;
                    animation.setSubframe(false);
                    paths = Array.from(container.querySelectorAll("svg path"));
                    if (window.gsap && paths.length) {
                        window.gsap.set(paths, { stroke: getNavColor() });
                    }
                    animation.goToAndStop(0, true);
                    if (isMenuOpen) {
                        animation.setDirection(1);
                        animation.play();
                    }
                });

                return { animation, isReady: () => isReady, getPaths: () => paths };
            }).filter(Boolean);

            menuButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    isMenuOpen = !isMenuOpen;
                    const navColor = getNavColor();
                    if (window.gsap) {
                        window.gsap.killTweensOf(navigation);
                        window.gsap.killTweensOf(navigationLinks);
                        window.gsap.killTweensOf(menuButtons);
                        const iconPaths = animations.flatMap(({ getPaths }) => getPaths());
                        window.gsap.killTweensOf(iconPaths);
                        window.gsap.killTweensOf(navigationLogos);
                        window.gsap.killTweensOf(appointmentButtons);

                        const duration = 0.3;
                        const delay = 0.2;
                        const ease = "power3.out";
                        window.gsap.to(menuButtons, {
                            color: navColor,
                            duration,
                            delay,
                            ease
                        });
                        window.gsap.to(iconPaths, {
                            stroke: navColor,
                            duration,
                            delay,
                            ease
                        });
                        window.gsap.to(navigationLogos, {
                            fill: navColor,
                            duration,
                            delay,
                            ease
                        });
                        window.gsap.to(appointmentButtons, {
                            color: navColor,
                            duration,
                            delay,
                            ease
                        });

                        if (isMenuOpen) {
                            navigation.hidden = false;
                            window.gsap.fromTo(
                                navigationLinks,
                                { opacity: 0, y: 10 },
                                {
                                    opacity: 1,
                                    y: 0,
                                    duration: 0.35,
                                    delay: 0.15,
                                    stagger: 0.08,
                                    ease: "power3.out",
                                    clearProps: "opacity,transform"
                                }
                            );
                            window.gsap.fromTo(
                                navigation,
                                { height: 0 },
                                { height: "100vh", duration: 1, ease: "power3.out", clearProps: "height" }
                            );
                        } else {
                            window.gsap.to(navigation, {
                                height: 0,
                                duration: 1,
                                ease: "power3.out",
                                clearProps: "height",
                                onComplete: () => {
                                    if (!isMenuOpen) {
                                        navigation.hidden = true;
                                    }
                                }
                            });
                        }
                    } else {
                        console.error("GSAP could not be loaded; the menu transition is unavailable.");
                        navigation.hidden = !isMenuOpen;
                    }

                    menuButtons.forEach((menuButton) => {
                        menuButton.setAttribute("aria-expanded", String(isMenuOpen));
                    });

                    animations.forEach(({ animation, isReady }) => {
                        if (isReady()) {
                            animation.setDirection(isMenuOpen ? 1 : -1);
                            animation.play();
                        }
                    });
                });
            });
        }
    }

    const mobileDropdownToggles = document.querySelectorAll('.mobile-nav .dropdown-toggle');

    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const parentLi = toggle.closest('.has-dropdown');
            if (parentLi) {
                parentLi.classList.toggle('open');
            }
        });
    });



    // scroll text animation

    const wrapper = document.querySelector(".scroll-wrpr");
    const text = wrapper?.querySelector(".scroll-txt");

    if (wrapper && text && window.matchMedia("(min-width: 786px)").matches) {
        window.addEventListener("mousemove", (e) => {
            if (!window.matchMedia("(min-width: 786px)").matches) return;
            const rect = wrapper.getBoundingClientRect();

            const mouseX = gsap.utils.clamp(
                0,
                wrapper.clientWidth,
                e.clientX - rect.left
            );

            const maxMove = wrapper.clientWidth - text.offsetWidth;

            const x = (mouseX / wrapper.clientWidth) * maxMove;

            gsap.to(text, {
                x: x,
                duration: 0.4,
                ease: "power3.out",
                overwrite: true
            });
        });
    }



   
});
