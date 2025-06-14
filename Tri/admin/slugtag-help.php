<?php

/*
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
*/

add_action( 'admin_menu', 'tri_slugtag_help' );

function tri_slugtag_help() {
    /* First two parameters are the page title and menu title */
	add_menu_page('How to use slugTags', 'slugTag Help', 'manage_options', 'tri-slugtag-help', 'tri_slugtag_help_contents', 'dashicons-editor-help', 3);
}

function tri_slugtag_help_contents() {
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&family=Sofia+Sans+Extra+Condensed:ital,wght@0,1..1000;1,1..1000&family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
<style type="text/css">
    h1 {
        background-image: url("<?php echo get_template_directory_uri(); ?>/img/tri-logo-colour.svg");
        background-size: 48px 31px;
        background-position: left 12px;
        background-repeat: no-repeat;
        padding: 14px 0 12px 64px !important;
        height: 31px !important;
        line-height: 31px !important;
    }

    p {
        font-size: 16px;
    }

    p.explanatory {
        font-size: small !important;
    }

    span.important {
        font-weight: bold;
        color: #d20202;
    }

    span.tip {
        font-weight: bold;
        color: #1564dc;
    }

    span.optional {
        font-weight: bold;
        color: #f47614;
    }

    input[type="text"],
    select,
    textarea {
        width: 400px;
    }
</style>

<div class="wrap">
	<h1>How to use slugTags</h1>
	<form method="POST" action="options.php">
		<?php
		settings_fields('tri-slugtag-help');
		do_settings_sections('tri-slugtag-help');
		?>
    </form>
</div>

<?php
}

function tri_slugtag_help_intro() {
?>
    <p><span class="important">Important:</span> After editing the alert settings, press the &ldquo;Delete Cache&rdquo; button in the top bar (on desktop) or <a href="https://www.criticalchicken.com/wp-admin/options-general.php?page=wpsupercache" target="_blank">WP Super Cache</a> settings (on mobile).</p>
    <p><span class="tip">Tip:</span> If your text fits within the realtime preview, it&rsquo;ll fit in the live alert, too.</p>
    <section id="alert" class="content-box listing-item home-listing-item <?php echo get_option('tri_alert_colour'); if(get_option('tri_alert_enabled')=='on') { echo ' enabled'; } if(get_option('tri_alert_classes')) { echo ' '; echo get_option('tri_alert_classes'); } if(get_option('tri_alert_yellow_background')=='on') { echo ' yellow-background'; } ?>" role="alert" data-sidebar>
        <div class="content-box-title-bar">
            <span class="content-box-title<?php if(get_option('tri_alert_title_bar_text_flash')=='on') { echo ' flashing'; } ?>" role="sectionhead"><?php if(get_option('tri_alert_title_bar_text')) { echo get_option('tri_alert_title_bar_text'); } else { echo 'Critical Chicken'; } ?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-<?php echo get_option('tri_alert_title_bar_icon'); ?>-white.svg" width="16" height="16" alt="" class="content-box-icon">
            <span class="content-box-slug empty-watch"><?php echo get_option('tri_alert_title_bar_slug'); ?></span>
            <div class="content-box-distinction empty-watch-distinction"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-<?php echo get_option('tri_alert_distinction_icon'); ?>-<?php echo get_option('tri_alert_colour'); ?>.svg" width="16" height="16" alt="" class="distinction-icon"><?php echo '<span class="distinction-span">' . get_option('tri_alert_distinction_text') . '</span>'; ?></div>
        </div><!--/content-box-title-bar-->
        <div class="content-box-content">
            <div class="content-box-meta">
                <p class="empty-watch-text"><?php echo get_option('tri_alert_text'); ?></p>
                <a href="javascript:void(0);" class="link-button primary-button empty-watch-button"><?php echo get_option('tri_alert_button_text'); ?></a><br class="button-br">
                <a href="javascript:void(0);" class="arrow-link empty-watch"><?php echo get_option('tri_alert_link_text'); ?></a>
            </div><!--/content-box-meta-->
        </div><!--/content-box-content-->
    </section><!--/alert-->

<?php
}
