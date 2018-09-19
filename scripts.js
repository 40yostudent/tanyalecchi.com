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
        button.children[0].children[1].style = 'visibility: hidden;';
        button.children[1].children[0].style = 'width: 0.4em; margin-left: 1em;';
        button.children[1].children[1].style = 'width: 0.4em;';
        button.children[1].children[2].style = 'width: 0.4em; margin-left: 1em;';

        // menu.style.transform = 'translateY(5rem)';
        menu.style.transform = 'translateX(0rem)';
    } else {
        button.children[0].children[1].style = 'visibility: visible;';
        button.children[1].children[0].style = '';
        button.children[1].children[1].style = '';
        button.children[1].children[2].style = '';

        menu.removeAttribute('style');
    }
}
