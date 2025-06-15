<?php

/*
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
*/

// Add support for featured images
add_theme_support('post-thumbnails');

// Redirect if readers somehow end up in a "secret" place
function tri_defender() {
	$theCategory = get_queried_object()->slug;
	$siteUrl = get_site_url();

	if ($theCategory == 'featured-posts' || $theCategory == 'special' || $theCategory == 'uncategorised') {
		header('Location: '. $siteURL . '/', true, 301);
		exit();
	} else if ($theCategory == 'updated' || $theCategory == 'news-alerts' || $theCategory == 'breaking-news') {
		header('Location: '. $siteURL . '/section/news', true, 301);
		exit();
	} else if ($theCategory == 'live') {
		header('Location: '. $siteURL . '/section/live-updates', true, 301);
		exit();
	} else if ($theCategory == 'ace-attorney-series') {
		header('Location: '. $siteURL . '/section/ace-attorney', true, 301);
		exit();
	} else if ($theCategory == 'persona-series') {
		header('Location: '. $siteURL . '/section/persona', true, 301);
		exit();
	} else if ($theCategory == 'pokemon-series') {
		header('Location: '. $siteURL . '/section/pokemon', true, 301);
		exit();
	} else if ($theCategory == 'dungeons-dragons') {
		header('Location: '. $siteURL . '/section/dungeons-and-dragons', true, 301);
		exit();
	} else if ($theCategory == 'nintendo-switch-2') {
		header('Location: '. $siteURL . '/section/switch-2', true, 301);
		exit();
	}
}

// Allow topics (WordPress tags) with commas
// Use "--" in the topic name to represent a comma and a space, e.g.
// 999: Nine Hours--Nine Persons--Nine Doors
if(!is_admin()){
    function tri_comma_tag_filter($tag_arr){
        $tag_arr_new = $tag_arr;
        if($tag_arr->taxonomy == 'post_tag' && strpos($tag_arr->name, '--')){
            $tag_arr_new->name = str_replace('--',', ',$tag_arr->name);
        }
        return $tag_arr_new;    
    }
    add_filter('get_post_tag', 'tri_comma_tag_filter');

    function tri_comma_tags_filter($tags_arr){
        $tags_arr_new = array();
        foreach($tags_arr as $tag_arr){
            $tags_arr_new[] = tri_comma_tag_filter($tag_arr);
        }
        return $tags_arr_new;
    }

    add_filter('get_terms', 'tri_comma_tags_filter');
    add_filter('get_the_terms', 'tri_comma_tags_filter');
}

// Decode the encoded HTML entities for our Tidbyt applet
// This can be removed when the Tidbyt servers finally shut down
function tri_fix_decode_rest_api($response, $post, $request) {
    if (isset($post)) {
        $decodedTitle = html_entity_decode($post->post_title);
        $response->data['title']['rendered'] = $decodedTitle;
        $decodedPostTitle = html_entity_decode($response->data['title']['rendered']);
        $response->data['title']['rendered'] = $decodedPostTitle;
		$decodedExcerpt = html_entity_decode($post->post_excerpt);
        $response->data['excerpt']['rendered'] = $decodedExcerpt;
        $decodedPostExcerpt = html_entity_decode($response->data['excerpt']['rendered']);
        $response->data['excerpt']['rendered'] = $decodedPostExcerpt;
    }
    return $response;
}
add_filter('rest_prepare_post', 'tri_fix_decode_rest_api', 10, 3);

// Add extra pages to the admin dashboard
require_once(TEMPLATEPATH . '/admin/alert-editor.php');

// Stop users editing their profiles
if( defined('IS_PROFILE_PAGE') && IS_PROFILE_PAGE === true ){
	$site = get_site_url();
	$path = get_template_directory_uri();
    wp_die( '<p><img src="' . $path . '/img/tri-logo-colour.svg" style="width: 48px; height: 31px; margin-bottom: -6px;" alt="Tri"></p><p><b>There are potentially website-breaking things on this page, so we&rsquo;ve disabled it.</b></p><p>You can still change your own profile picture on <a href="https://en.gravatar.com" target="_blank" rel="external">Gravatar</a> (sign in with your &ldquo;firstname@criticalchicken.com&rdquo; email address). If you&rsquo;d like any other changes made to your profile, email <a href="mailto:office@criticalchicken.com">office@criticalchicken.com</a>.</p><p><a href="'. $site . '/wp-admin/index.php">Back to the Dashboard &raquo;</a></p>' );
}

// Style the post slug field in the WordPress post editor
function tri_acf_admin_styles() {
    echo '
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Extra+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <style type="text/css">
        #tri_slug_acf input {
            font-family: "Sofia Sans Extra Condensed", sans-serif !important;
            font-weight: 900 !important;
            text-transform: uppercase !important;
            display: block !important;
            outline: 0 !important;
            border: 0 !important;
            background-color: #d20202 !important;
            border-radius: 12px !important;
            padding: 2px 10px 0 10px !important;
            font-size: 30px !important;
            line-height: 40px !important;
            color: white !important;
            width: 280px !important;
            overflow-x: hidden !important;
            white-space: nowrap !important;
            font-optical-sizing: auto !important;
            text-shadow: 0 1px 0 black !important;
        }
        #tri_slug_acf input:focus {
            box-shadow: unset !important;
        }
        #tri_slug_acf input::placeholder {
            opacity: 0.48 !important;
            color: white !important;
        }
        #tri_custom_class_acf input::placeholder {
            opacity: 0.48 !important;
            color: #2c3338 !important;
        }
    </style>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            // Replace below Id with the actual ID of the ACF field
            const input = document.getElementById("acf-field_684dffe0472db");
            const preview = document.getElementById("tri_slug_preview");

            function updatePreview() {
                if (input.value.trim() === "") {
                    preview.textContent = "None";
                } else {
                    preview.textContent = input.value;
                }
            }

            // Initial population
            updatePreview();

            // Update in real-time
            input.addEventListener("input", updatePreview);
        });
    </script>';
}
add_action('acf/input/admin_head', 'tri_acf_admin_styles');

// Change WordPress admin footer text
function tri_change_footer_text () {
	$theme_info = wp_get_theme();
	echo '<span id="footer-thankyou">Powered by <a href="https://github.com/CriticalChicken/Tri" target="_blank" rel="external me">Tri</a> ' . $theme_info->get('Version') . ' and <a href="https://wordpress.org" target="_blank" rel="external nofollow">WordPress</a>.</span>';
}
add_filter('admin_footer_text', 'tri_change_footer_text');
