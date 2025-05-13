// document.addEventListener("DOMContentLoaded", function () {
//     const navLinks = document.querySelectorAll(".nav-link");
//     const navbarCollapse = document.querySelector(".navbar-collapse");

//     navLinks.forEach((link) => {
//         link.addEventListener("click", function (event) {
//             const targetId = this.getAttribute("data-target");
//             const targetElement = document.getElementById(targetId);

//             if (targetElement) {
//                 event.preventDefault();
//                 targetElement.scrollIntoView({
//                     behavior: "smooth"
//                 });
//             }

//             if (
//                 window.innerWidth < 992 &&
//                 !this.classList.contains("dropdown-toggle")
//             ) {
//                 const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
//                     toggle: false,
//                 });
//                 bsCollapse.hide();
//             }
//         });
//     });

//     // Dropdown hover functionality
//     const dropdowns = document.querySelectorAll('.nav-item.dropdown');
//     dropdowns.forEach(dropdown => {
//         dropdown.addEventListener('mouseenter', () => {
//             const toggle = dropdown.querySelector('.dropdown-toggle');
//             const menu = dropdown.querySelector('.dropdown-menu');
//             const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggle);
//             bsDropdown.show();
//         });

//         dropdown.addEventListener('mouseleave', () => {
//             const toggle = dropdown.querySelector('.dropdown-toggle');
//             const menu = dropdown.querySelector('.dropdown-menu');
//             const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggle);
//             setTimeout(() => {
//                 if (!menu.matches(':hover') && !toggle.matches(':hover')) {
//                     bsDropdown.hide();
//                 }
//             }, 300);
//         });
//     });
// });
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

    // Dropdown hover functionality with important treatment
    const dropdowns = document.querySelectorAll('.nav-item.dropdown');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', () => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');
            const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggle);

            // Ensure the dropdown menu is displayed and it's enforced
            menu.style.display = 'block';
            menu.style.visibility = 'visible';
            menu.style.zIndex = 9999; // Ensure the dropdown is above other elements

            bsDropdown.show();
        });

        dropdown.addEventListener('mouseleave', () => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');
            const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggle);

            setTimeout(() => {
                if (!menu.matches(':hover') && !toggle.matches(':hover')) {
                    // Enforce menu hide after timeout
                    menu.style.display = 'none';
                    menu.style.visibility = 'hidden';
                    bsDropdown.hide();
                }
            }, 300);
        });
    });
});
