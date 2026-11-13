(() => {
    const initializeEnhanceReadMore = () => {
        document.querySelectorAll(".enhance-section .enhance-text p").forEach((paragraph, index) => {
            if (paragraph.scrollHeight <= 165) return;

            if (!paragraph.id) paragraph.id = `enhance-paragraph-${index + 1}`;

            const readMore = document.createElement("a");
            const buttonText = document.createTextNode("Read More");
            const underline = document.createElement("div");

            readMore.href = "#";
            readMore.className = "btn-default enhance-read-more";
            readMore.setAttribute("aria-controls", paragraph.id);
            readMore.setAttribute("aria-expanded", "false");
            readMore.appendChild(buttonText);

            underline.className = "btn-underline";
            underline.setAttribute("aria-hidden", "true");
            readMore.appendChild(underline);

            readMore.addEventListener("click", (event) => {
                event.preventDefault();
                const isExpanded = paragraph.classList.contains("is-expanded");

                if (isExpanded) {
                    paragraph.style.maxHeight = `${paragraph.scrollHeight}px`;
                    void paragraph.offsetHeight;
                    paragraph.dataset.collapsing = "true";
                    paragraph.style.maxHeight = "165px";
                    buttonText.nodeValue = "Read More";
                    readMore.setAttribute("aria-expanded", "false");
                } else {
                    paragraph.style.maxHeight = "165px";
                    void paragraph.offsetHeight;
                    delete paragraph.dataset.collapsing;
                    paragraph.classList.add("is-expanded");
                    paragraph.style.maxHeight = `${paragraph.scrollHeight}px`;
                    buttonText.nodeValue = "Read Less";
                    readMore.setAttribute("aria-expanded", "true");
                }
            });

            paragraph.addEventListener("transitionend", (event) => {
                if (event.propertyName !== "max-height") return;

                if (paragraph.dataset.collapsing === "true") {
                    paragraph.classList.remove("is-expanded");
                    paragraph.style.maxHeight = "165px";
                    delete paragraph.dataset.collapsing;
                } else if (paragraph.classList.contains("is-expanded")) {
                    paragraph.style.maxHeight = "none";
                }
            });

            paragraph.insertAdjacentElement("afterend", readMore);
        });
    };

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initializeEnhanceReadMore, { once: true });
    } else {
        initializeEnhanceReadMore();
    }
})();
