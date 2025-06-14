// JavaScript Document

/*
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
*/

jQuery(document).ready(function() {
    jQuery('.empty-watch').each(function(){
        var scheme = jQuery('#tri_alert_colour').val();
        if (!jQuery(this).text().trim().length) {
            jQuery(this).addClass('empty');
        }
        if (jQuery('.distinction-icon').attr('src') == ('http://localhost/Tri/wp-content/themes/Tri/img/icon-none-' + scheme + '.svg')) {
            jQuery('.distinction-icon').addClass('empty');
        }
    });
    jQuery('.empty-watch-distinction').each(function(){
        if (!jQuery(this).text().trim().length) {
            jQuery(this).addClass('empty');
            jQuery('.content-box-content').addClass('no-distinction');
        }
    });
    jQuery('.empty-watch-text').each(function(){
        if (!jQuery(this).text().trim().length) {
            jQuery(this).text('…');
        }
    });
    jQuery('.empty-watch-button').each(function(){
        if (!jQuery(this).text().trim().length) {
            jQuery(this).addClass('empty');
            jQuery('.button-br').addClass('empty');
        }
    });

    // Monitor changes to inputs

    // Display the alert?
    jQuery('#tri_alert_enabled').on('mouseup', function() {
        if (!jQuery(this).is(":checked")) {
            jQuery('section#alert').removeClass('enabled').addClass('enabled');
        } else {
            jQuery('section#alert').removeClass('enabled').removeClass('enabled');
        }
    });
    
    // Alert colour scheme
    jQuery('#tri_alert_colour').on('mouseup', function() {
        var value = jQuery(this).val();
        var distinctionIcon = jQuery('#tri_alert_distinction_icon').val();
        jQuery('section#alert').removeClass('red').removeClass('orange').removeClass('blue').addClass(value);
        jQuery('.distinction-icon').attr('src','http://localhost/Tri/wp-content/themes/Tri/img/icon-' + distinctionIcon + '-' + value + '.svg');
    });

    //Use a yellow background for the body text?
    jQuery('#tri_alert_yellow_background').on('mouseup', function() {
        if (!jQuery(this).is(":checked")) {
            jQuery('section#alert').removeClass('yellow-background').addClass('yellow-background');
        } else {
            jQuery('section#alert').removeClass('yellow-background').removeClass('yellow-background');
        }
    });

    // Title bar text
    jQuery('#tri_alert_title_bar_text').on('keyup', function() {
        var text = jQuery(this).val();
        jQuery('.content-box-title').text(text);
        if (!jQuery('.content-box-title').text().trim().length) {
            jQuery('.content-box-title').text('Critical Chicken');
        }
    });

    // Flash the title bar text?
    jQuery('#tri_alert_title_bar_text_flash').on('mouseup', function() {
        if (!jQuery(this).is(":checked")) {
            jQuery('.content-box-title').removeClass('flashing').addClass('flashing');
        } else {
            jQuery('.content-box-title').removeClass('flashing').removeClass('flashing');
        }
    });

    // Title bar icon
    jQuery('#tri_alert_title_bar_icon').on('mouseup', function() {
        var value = jQuery(this).val();
        jQuery('.content-box-icon').attr('src','http://localhost/Tri/wp-content/themes/Tri/img/icon-' + value + '-white.svg');
    });

    // Title bar slug
    jQuery('#tri_alert_title_bar_slug').on('keyup', function() {
        var text = jQuery(this).val();
        jQuery('.content-box-slug').text(text);
        if (!jQuery('.content-box-slug').text().trim().length) {
            jQuery('.content-box-slug').addClass('empty');
        } else {
            jQuery('.content-box-slug').removeClass('empty');
        }
    });

    // Distinction bar text
    jQuery('#tri_alert_distinction_text').on('keyup', function() {
        var text = jQuery(this).val();
        jQuery('.distinction-span').text(text);
        if (!jQuery('.distinction-span').text().trim().length) {
            jQuery('.empty-watch-distinction').addClass('empty');
            jQuery('.content-box-content').addClass('no-distinction');
        } else {
            jQuery('.empty-watch-distinction').removeClass('empty');
            jQuery('.content-box-content').removeClass('no-distinction');
        }
        if (jQuery('.distinction-icon').attr('src') == ('http://localhost/Tri/wp-content/themes/Tri/img/icon-none-' + scheme + '.svg')) {
            jQuery('.distinction-icon').addClass('empty');
        } else {
            jQuery('.distinction-icon').removeClass('empty');
        }
    });

    // Distinction bar icon
    jQuery('#tri_alert_distinction_icon').on('mouseup', function() {
        var value = jQuery(this).val();
        var scheme = jQuery('#tri_alert_colour').val();
        jQuery('.distinction-icon').attr('src','http://localhost/Tri/wp-content/themes/Tri/img/icon-' + value + '-' + scheme + '.svg');
        if (jQuery('.distinction-icon').attr('src') == ('http://localhost/Tri/wp-content/themes/Tri/img/icon-none-' + scheme + '.svg')) {
            jQuery('.distinction-icon').addClass('empty');
        } else {
            jQuery('.distinction-icon').removeClass('empty');
        }
    });

    // Body text
    jQuery('#tri_alert_text').on('keyup', function() {
        var html = jQuery(this).val();
        jQuery('.empty-watch-text').html(html);
        if (!jQuery('.empty-watch-text').text().trim().length) {
            jQuery('.empty-watch-text').html('…');
        }
    });

    // Button text
    jQuery('#tri_alert_button_text').on('keyup', function() {
        var text = jQuery(this).val();
        jQuery('.link-button').text(text);
        if (!jQuery('.link-button').text().trim().length) {
            jQuery('.link-button').addClass('empty');
            jQuery('.button-br').addClass('empty');
        } else {
            jQuery('.link-button').removeClass('empty');
            jQuery('.button-br').removeClass('empty');
        }
    });

    // Link text
    jQuery('#tri_alert_link_text').on('keyup', function() {
        var text = jQuery(this).val();
        jQuery('.arrow-link').text(text);
        if (!jQuery('.arrow-link').text().trim().length) {
            jQuery('.arrow-link').addClass('empty');
        } else {
            jQuery('.arrow-link').removeClass('empty');
        }
    });
});
