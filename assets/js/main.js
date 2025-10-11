document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const mobileNav = document.getElementById("mobile-nav");
    const closeBtn = document.getElementById("close-btn");

    if (menuToggle && mobileNav && closeBtn) {
        menuToggle.addEventListener("click", () => {
            console.log("Menu button clicked ✅");
            mobileNav.classList.add("active");
        });

        closeBtn.addEventListener("click", () => {
            console.log("Close button clicked ❌");
            mobileNav.classList.remove("active");
        });
    } else {
        console.error("Menu elements not found!");
    }
});


// ... (keep the existing mobile menu code above this)

document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon');

        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');

            // Close all others (accordion style)
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
                otherItem.querySelector('.faq-answer').style.maxHeight = null;
                otherItem.querySelector('.faq-icon').textContent = '+';
            });

            if (!isActive) {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + "px";
                icon.textContent = '−'; // change + to minus
            } else {
                item.classList.remove('active');
                answer.style.maxHeight = null;
                icon.textContent = '+';
            }
        });
    });




    const mobileDropdownToggles = document.querySelectorAll('.mobile-nav .dropdown-toggle');

    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const parentLi = toggle.closest('.has-dropdown');
            if (parentLi) {
                parentLi.classList.toggle('open');
            }
        });
    });

   
});

