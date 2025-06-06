// JavaScript Document

/*
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
*/

// Move elements with data-sidebar to the sidebar on desktop,
// or after their marker on mobile.
// Also moves #social-icons-bottom to the footer on desktop,
// or after its marker on mobile.

function moveSidebarElements() {
    const mq = window.matchMedia('(min-width: 760px)');
    const sidebar = document.querySelector('#sidebar');
    const sidebarEls = document.querySelectorAll('[data-sidebar]');

    // Sidebar
    sidebarEls.forEach(el => {
        const markerClass = el.id;
        const marker = document.querySelector('.marker.' + markerClass);

        if (mq.matches) {
            if (sidebar && el.parentNode !== sidebar) {
                sidebar.appendChild(el);
            }
        } else {
            if (marker && marker.nextSibling !== el) {
                marker.parentNode.insertBefore(el, marker.nextSibling);
            }
        }
    });

    // Footer
    const footer = document.querySelector('#footer-innerbox');
    const socialIcons = document.getElementById('social-icons-bottom');
    const marker = document.querySelector('.marker.social-icons-bottom');

    if (socialIcons && footer && marker) {
        if (mq.matches) {
            if (socialIcons.parentNode !== footer) {
                footer.appendChild(socialIcons);
            }
        } else {
            if (marker.nextSibling !== socialIcons) {
                marker.parentNode.insertBefore(socialIcons, marker.nextSibling);
            }
        }
    }
}

window.addEventListener('resize', moveSidebarElements);
window.addEventListener('DOMContentLoaded', moveSidebarElements);
