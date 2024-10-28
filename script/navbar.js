let lastScrollTop = 0;

window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar");
    const currentScroll = window.pageYOffset;
    const maxScroll = document.documentElement.scrollHeight - window.innerHeight;

    if (currentScroll >= maxScroll) {
        // at footer, show navbar
        navbar.classList.remove("hidden");
    } else if (currentScroll > lastScrollTop) {
        // if scroll down, hide navbar
        navbar.classList.add("hidden");
    } else {
        // if scroll up, show navbar
        navbar.classList.remove("hidden");
    }

    lastScrollTop = currentScroll;
});