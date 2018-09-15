"use strict";

let menuButton = document.getElementById('menu-button');
let navMenu = document.getElementsByTagName('nav')[0];

// MENU BUTTON AND NAV:
menuButton.addEventListener(
    'click',
    () => openMenu(menuButton, navMenu),
    false
);

function openMenu(button, menu) {
    if (!menu.getAttribute('style')) {
        // button.children[0].classList.remove('fa-bars');
        // button.children[0].classList.add('fa-chevron-up');

        menu.style.transform = 'translateY(5rem)';
    } else {
        // button.children[0].classList.remove('fa-chevron-up');
        // button.children[0].classList.add('fa-bars');

        menu.removeAttribute('style');
    }
}
