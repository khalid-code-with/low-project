// preloader
window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    preloader.style.transition = "opacity 0.5s ease";
    preloader.style.opacity = "0";
    setTimeout(() => (preloader.style.display = "none"), 500);
});

// make navbar sticky on scroll with animation
// window.addEventListener("scroll", function () {
//     const navbar = document.querySelector(".navbar");
//     if (window.scrollY > 170) {
//         navbar.classList.add("shrink");
//     } else {
//         navbar.classList.remove("shrink");
//     }
// });

window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 170) {
        navbar.classList.add("shrink");
    } else {
        navbar.classList.remove("shrink");
    }
});


// Scroll to top
window.onscroll = function () {
    let btn = document.getElementById("topBtn");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
};
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}


// header javascript for drop down

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");
    const navbarCollapse = document.querySelector(".navbar-collapse");

    navLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            const targetId = this.getAttribute("data-target");
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                event.preventDefault();
                targetElement.scrollIntoView({
                    behavior: "smooth"
                });
            }

            if (
                window.innerWidth < 992 &&
                !this.classList.contains("dropdown-toggle")
            ) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                    toggle: false,
                });
                bsCollapse.hide();
            }
        });
    });

    // Dropdown hover functionality
    const dropdowns = document.querySelectorAll('.nav-item.dropdown');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', () => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');
            const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggle);
            bsDropdown.show();
        });

        dropdown.addEventListener('mouseleave', () => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');
            const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggle);
            setTimeout(() => {
                if (!menu.matches(':hover') && !toggle.matches(':hover')) {
                    bsDropdown.hide();
                }
            }, 300);
        });
    });
});
