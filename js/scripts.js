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


// Make the menu and search modals work

const body = document.body;
const modalCloser = document.querySelector(".modal-close");
const menuModal = document.getElementById("menu-modal");
const menuModalInner = menuModal.querySelector(".modal-inner");
const searchModal = document.getElementById("search-modal");
const searchModalInner = searchModal.querySelector(".modal-inner");

function openMenuModal() {
    body.classList.add("disabled");
    modalCloser.classList.add("enabled");
    menuModal.classList.add("enabled");
}

function openSearchModal() {
    body.classList.add("disabled");
    modalCloser.classList.add("enabled");
    searchModal.classList.add("enabled");
}

function closeMenuModal() {
    menuModal.classList.add("closing");
    // Listen for animation end to hide modal
    menuModal.addEventListener("animationend", function handler(e) {
        if (e.animationName === "modal-blur-background-closing") {
            body.classList.remove("disabled");
            modalCloser.classList.remove("enabled");
            menuModal.classList.remove("enabled");
            menuModal.classList.remove("closing");
            menuModal.removeEventListener("animationend", handler);
        }
    });
}


// Make the "back to top" button smooooooth

$(".back-to-top").click(function() {
    $("html, body").animate({scrollTop: 0}, 1200);
});


// Display the page load time

var beforeload = (new Date()).getTime();

function getPageLoadTime(){

var r_text = new Array ();
r_text[0] = "was built and paid for by Mexico";
r_text[1] = "was coughed up by your nan’s cat";
r_text[2] = "was performed by the London Symphony Orchestra";
r_text[3] = "was coded in real time by one really stressed dude";
r_text[4] = "was shot through a series of tubes";
r_text[5] = "was dreamed up by a coma patient";
r_text[6] = "was re-released in stunning high definition";
r_text[7] = "was delivered by your DPD driver Chris";
r_text[8] = "was passed down through the generations";
r_text[9] = "was dredged from the internet swamp";
r_text[10] = "was scraped from the bottom of the barrel";
r_text[11] = "was speedrun by a Japanese guy";
r_text[12] = "was universally panned by critics";
r_text[13] = "was written by renowned author Dan Brown";
r_text[14] = "was hastily thrown together by Game Freak inc.";
r_text[15] = "was copied and pasted off of Wikipedia";
r_text[16] = "was whittled by a sexy lumberjack";
r_text[17] = "was commissioned and cancelled by Netflix";
r_text[18] = "was gifted, then immediately regifted";
r_text[19] = "was fashioned from twigs and bits of string";
r_text[20] = "was straightwashed by a historian";
r_text[21] = "was hot glue-gunned to death by a suburban mom";
r_text[22] = "was booed off stage at an open-mic night";
r_text[23] = "was foretold by a biblically-accurate seraphim";
r_text[24] = "was adapted into a major motion picture";
r_text[25] = "was bought out and ruined by Elon Musk";
r_text[26] = "fell afoul of X’s rules against Hateful Conduct";
r_text[27] = "is for YOUR eyes only, and will self-destruct";
r_text[28] = "was mocked by 4chan for “looking like a PS2 game”";
r_text[29] = "will be re-released as “This Page: GoTY Edition”";

var i = Math.floor(r_text.length * Math.random());
var afterload = (new Date()).getTime();
seconds = (afterload-beforeload) / 1000;
if(seconds == 1) {
	var plurality = ".";
} else {
	var plurality = "s.";
}
$(".load_time").text('This page ' + r_text[i] + ' in ' + seconds + ' second' + plurality);
}


// Trigger functions when ONLY the DOM has loaded

$(document).ready(function() {
});


// Trigger functions when the entire page has loaded

$(window).on("load", function() {
	getPageLoadTime();
});
