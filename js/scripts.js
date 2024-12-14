// JavaScript Document

/*
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
*/

// SCALING

// Runs when the page layout (not necessarily content) has loaded
$(document).ready(function() {
    var screenWidth = $(window).width();

    if(screenWidth < 576) { // Always true, for now
        var screenScale = screenWidth / 304;
        console.log("Screen being scaled to " + screenScale + ".");
        $("#container")
            .css("transform", "scale(" + screenScale + ")")
            .css("transform-origin", "top center")
            .css("top", (37 * screenScale) + "px");
        $("#fab-container")
            .css("transform", "scaleX(" + screenScale + ")")
            .css("transform-origin", "top center");
        $("#fab")
            .css("transform", "scaleY(" + screenScale + ")")
            .css("transform-origin", "bottom center")
            .css("bottom", (32 * screenScale) + "px");
    }
});

// Runs every time the window is resized
$(window).resize(function(){
    var screenWidth = $(window).width();

    if(screenWidth < 576) { // Always true, for now
        var screenScale = screenWidth / 304;
        console.log("Screen being scaled to " + screenScale + ".");
        $("#container")
            .css("transform", "scale(" + screenScale + ")")
            .css("transform-origin", "top center")
            .css("top", (37 * screenScale) + "px");
        $("#fab-container")
            .css("transform", "scaleX(" + screenScale + ")")
            .css("transform-origin", "top center");
        $("#fab")
            .css("transform", "scaleY(" + screenScale + ")")
            .css("transform-origin", "bottom center")
            .css("bottom", (32 * screenScale) + "px");
    }
});