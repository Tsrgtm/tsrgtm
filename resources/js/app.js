import './bootstrap';

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        if (targetId === "#") return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            if (location.pathname !== "/") {
                window.location.href = "/";
            }

            targetElement.scrollIntoView({
                behavior: "smooth",
            });
        }
    });
});
