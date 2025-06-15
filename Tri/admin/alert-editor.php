<?php

/*
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
*/

add_action( 'admin_menu', 'tri_alert_editor' );

function tri_alert_editor() {
    /* First two parameters are the page title and menu title */
	add_menu_page('Alert editor', 'Alerts', 'manage_options', 'tri-alert-editor', 'tri_alert_editor_contents', 'dashicons-megaphone', 3);
}

function tri_alert_editor_contents() {
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

    @keyframes alert-title {
        0%      {opacity: 1;}
        60%     {opacity: 1;}
        70%     {opacity: 0;}
        80%     {opacity: 1;}
        90%     {opacity: 0;}
        100%    {opacity: 1;}
    }

    section#alert {
        font-family: "Sofia Sans", sans-serif;
        font-weight: 600;
        font-size: 15px;
        line-height: 20px;
        color: black;
        background-color: black;
        border-radius: 12px;
        display: block;
        width: 280px;
        padding: 0 0 2px 0;
        font-optical-sizing: auto !important;
        box-shadow: 0 1px 0 black;
        opacity: 0.48;
        transition: opacity 0.12s ease-in-out;
    }
    section#alert.red {
        background-color: #d20202;
    }
    section#alert.orange {
        background-color: #f47614;
    }
    section#alert.blue {
        background-color: #1564dc;
    }
    section#alert.enabled {
        opacity: 1;
    }

    .content-box-title {
        color: white;
        text-transform: uppercase;
        font-weight: 800;
        display: block;
        width: 234px;
        height: 20px;
        margin: 0 0 10px 10px;
        position: relative;
        top: 6px;
        text-shadow: 0 1px 0 black;
        overflow-x: hidden;
        white-space: nowrap;
    }

    .content-box-title.flashing {
        animation: alert-title 4s ease-in-out infinite;
    }

    .content-box-icon {
        float: right;
        position: relative;
        top: -23px;
        right: 10px;
        filter: drop-shadow(0 1px 0 black);
    }

    .content-box-slug {
        font-family: "Sofia Sans Extra Condensed", sans-serif;
        font-size: 30px;
        line-height: 40px;
        font-weight: 900;
        text-transform: uppercase;
        color: white;
        display: block;
        width: 260px;
        height: 40px;
        position: relative;
        left: 10px;
        margin-top: -9px;
        margin-bottom: -1px;
        text-shadow: 0 1px 0 black;
        overflow-x: hidden;
        white-space: nowrap;
    }

    .content-box-distinction {
        width: 268px;
        border-radius: 10px 10px 0 0;
        display: block;
        left: 2px;
        height: 23px;
        position: relative;
        font-weight: 800;
        text-transform: uppercase;
        font-size: 15px;
        line-height: 20px;
        color: black;
        padding: 7px 0 0 8px;
        background: white;
        transition: all 0.12s ease-in-out;
    }
    .red .content-box-distinction {
        color: #d20202;
    }
    .orange .content-box-distinction {
        color: #f47614;
    }
    .blue .content-box-distinction {
        color: #1564dc;
    }

    .distinction-icon {
        float: left;
        margin: 1px 5px 0 0;
    }

    .content-box-content {
        width: 276px;
        display: block;
        border-radius: 10px;
        left: 2px;
        position: relative;
        background: white;
        transition: background 0.12s ease-in-out;
    }

    .content-box-title-bar:has(.content-box-distinction) + .content-box-content {
        border-radius: 0 0 10px 10px;
    }

    /* Hack for admin area only */
    .content-box-content {
        border-radius: 0 0 10px 10px !important;
    }
    .content-box-content.no-distinction {
        border-radius: 10px !important;
    }

    .content-box-meta {
        padding: 4px 18px 12px 18px;
    }

    .content-box-meta p {
        font-size: 17.5px;
        line-height: 20px;
        margin: 11px 0 1px 0;
        max-height: 100px;
        display: block;
        color: black;
        overflow-y: hidden;
    }

    .content-box-meta p b,
    .content-box-meta p strong {
        font-weight: 800;
    }

    .content-box-meta p i,
    .content-box-meta p em {
        font-style: italic;
    }

    a.link-button {
        display: inline-block;
        width: auto;
        height: 26px;
        background: black;
        color: white;
        font-weight: 800;
        text-decoration: none;
        font-size: 20px;
        line-height: 25px;
        padding: 2px 10px 0 10px;
        border-radius: 5px;
        margin-top: 14px;
        transition: all 0.12s ease-in-out !important;
        max-width: 220px;
        overflow-x: hidden;
        white-space: nowrap;
        margin-bottom: 2px;
    }

    a.link-button:hover {
        background: white;
        color: black;
        box-shadow: inset 0 0 0 1px black;
    }

    a.link-button + br + a.arrow-link {
        margin-top: 0;
    }

    a.arrow-link {
        display: inline-block;
        width: auto;
        height: 20px;
        color: black;
        font-weight: 800;
        text-decoration: underline;
        text-decoration-color: rgba(0, 0, 0, 1);
        font-size: 15px;
        line-height: 20px;
        transition: all 0.12s ease-in-out !important;
        background-image: url(<?php echo get_template_directory_uri(); ?>/img/icon-link-black.svg);
        background-size: 16px 16px;
        background-repeat: no-repeat;
        background-position: 0 1px;
        padding-left: 21px;
        position: relative;
        margin-top: 10px;
        max-width: 219px;
        overflow-x: hidden;
        white-space: nowrap;
        margin-bottom: -6px;
    }

    .content-box-meta p + .empty + br + a.arrow-link {
        margin-top: 10px;
    }

    a.arrow-link:hover {
        text-decoration-color: rgba(0, 0, 0, 0);
    }

    .yellow-background .content-box-distinction,
    .yellow-background .content-box-content {
        background-color: #FFDC17;
    }

    .empty {
        display: none !important;
    }

    @media (min-width: 1519px) and (min-height: 366px) {
        section#alert {
            position: fixed;
            top: 54px;
            right: 22px;
        }
    }
</style>

<div class="wrap">
	<h1>Alert editor</h1>
	<form method="POST" action="options.php">
		<?php
		settings_fields('tri-alert-editor');
		do_settings_sections('tri-alert-editor');
		submit_button();
		?>
    </form>
</div>

<?php
}

add_action( 'admin_init', 'tri_alert_settings_init' );

function tri_alert_settings_init() {

	add_settings_section(
		'tri-alert-editor_setting_section',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_intro',
		'tri-alert-editor'
	);

	add_settings_field(
		'tri_alert_enabled',
		__( 'Display the alert?', 'my-textdomain' ),
		'tri_alert_editor_enabled',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_colour',
		__( 'Alert colour scheme:', 'my-textdomain' ),
		'tri_alert_editor_colour',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_yellow_background',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_yellow_background',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);
	
	add_settings_field(
		'tri_alert_title_bar_text',
		__( 'Title bar', 'my-textdomain' ),
		'tri_alert_editor_title_bar_text',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);
	
	add_settings_field(
		'tri_alert_title_bar_text_flash',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_title_bar_text_flash',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_title_bar_icon',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_title_bar_icon',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);
	
	add_settings_field(
		'tri_alert_title_bar_slug',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_title_bar_slug',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_distinction_text',
		__( 'Distinction bar', 'my-textdomain' ),
		'tri_alert_editor_distinction_text',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);
	
	add_settings_field(
		'tri_alert_distinction_icon',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_distinction_icon',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_text',
		__( 'Body text:', 'my-textdomain' ),
		'tri_alert_editor_text',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_button_text',
		__( 'Button', 'my-textdomain' ),
		'tri_alert_editor_button_text',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_button_url',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_button_url',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_button_target',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_button_target',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_button_rel',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_button_rel',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_link_text',
		__( 'Link', 'my-textdomain' ),
		'tri_alert_editor_link_text',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_link_url',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_link_url',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
    );

	add_settings_field(
		'tri_alert_link_target',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_link_target',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_link_rel',
		__( '', 'my-textdomain' ),
		'tri_alert_editor_link_rel',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	add_settings_field(
		'tri_alert_classes',
		__( 'Special CSS classes:', 'my-textdomain' ),
		'tri_alert_editor_classes',
		'tri-alert-editor',
		'tri-alert-editor_setting_section'
	);

	register_setting( 'tri-alert-editor', 'tri_alert_enabled' );
	register_setting( 'tri-alert-editor', 'tri_alert_colour' );
	register_setting( 'tri-alert-editor', 'tri_alert_yellow_background' );
	register_setting( 'tri-alert-editor', 'tri_alert_title_bar_text' );
	register_setting( 'tri-alert-editor', 'tri_alert_title_bar_text_flash' );
    register_setting( 'tri-alert-editor', 'tri_alert_title_bar_icon' );
	register_setting( 'tri-alert-editor', 'tri_alert_title_bar_slug' );
	register_setting( 'tri-alert-editor', 'tri_alert_distinction_text' );
	register_setting( 'tri-alert-editor', 'tri_alert_distinction_icon' );
	register_setting( 'tri-alert-editor', 'tri_alert_text' );
	register_setting( 'tri-alert-editor', 'tri_alert_button_text' );
	register_setting( 'tri-alert-editor', 'tri_alert_button_url' );
	register_setting( 'tri-alert-editor', 'tri_alert_button_target' );
	register_setting( 'tri-alert-editor', 'tri_alert_button_rel' );
	register_setting( 'tri-alert-editor', 'tri_alert_link_text' );
	register_setting( 'tri-alert-editor', 'tri_alert_link_url' );
	register_setting( 'tri-alert-editor', 'tri_alert_link_target' );
	register_setting( 'tri-alert-editor', 'tri_alert_link_rel' );
	register_setting( 'tri-alert-editor', 'tri_alert_classes' );
}

function tri_alert_editor_intro() {
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

function tri_alert_editor_enabled() {
	$current_tri_alert_enabled = get_option("tri_alert_enabled");
?>
		<input type="checkbox" name="tri_alert_enabled" id="tri_alert_enabled"<?php if($current_tri_alert_enabled=="on"){echo(' checked');} ?>>

<?php
}

function tri_alert_editor_colour() {
	$current_tri_alert_colour = get_option("tri_alert_colour");
?>
    <select name="tri_alert_colour" id="tri_alert_colour">
        <option value="black"<?php if($current_tri_alert_colour == "black") { echo(' selected="selected"'); } ?>>Black (generic)</option>
        <option value="red"<?php if($current_tri_alert_colour == "red") { echo(' selected="selected"'); } ?>>Red (news)</option>
        <option value="orange"<?php if($current_tri_alert_colour == "orange") { echo(' selected="selected"'); } ?>>Orange (review)</option>
        <option value="blue"<?php if($current_tri_alert_colour == "blue") { echo(' selected="selected"'); } ?>>Blue (feature)</option>
    </select>

<?php
}

function tri_alert_editor_yellow_background() {
	$current_tri_alert_yellow_background = get_option("tri_alert_yellow_background");
?>
    <p>Use a yellow background for the body text?</p>
	<input type="checkbox" name="tri_alert_yellow_background" id="tri_alert_yellow_background"<?php if($current_tri_alert_yellow_background=="on"){echo(' checked');} ?>>

<?php
}

function tri_alert_editor_title_bar_text() {
?>
    <p><b>Text:</b></p>
    <input type="text" name="tri_alert_title_bar_text" id="tri_alert_title_bar_text" value="<?php echo get_option('tri_alert_title_bar_text'); ?>">
    <p class="explanatory"><span class="important">Important:</span> Write in sentence case (the text will be displayed in uppercase).</p>

<?php
}

function tri_alert_editor_title_bar_text_flash() {
	$current_tri_alert_title_bar_text_flash = get_option("tri_alert_title_bar_text_flash");
?>
    <p>Flash the title bar text?</p>
    <input type="checkbox" name="tri_alert_title_bar_text_flash" id="tri_alert_title_bar_text_flash"<?php if($current_tri_alert_title_bar_text_flash=="on"){echo(' checked');} ?>>

<?php
}

function tri_alert_editor_title_bar_icon() {
	$current_tri_alert_title_bar_icon = get_option("tri_alert_title_bar_icon");
?>
    <p><b>Icon:</b></p>
    <select name="tri_alert_title_bar_icon" id="tri_alert_title_bar_icon">
        <option value="cece"<?php if($current_tri_alert_title_bar_icon == "cece") { echo(' selected="selected"'); } ?>>CeCe (Critical Chicken logo)</option>
        <option value="news"<?php if($current_tri_alert_title_bar_icon == "news") { echo(' selected="selected"'); } ?>>News</option>
        <option value="review"<?php if($current_tri_alert_title_bar_icon == "review") { echo(' selected="selected"'); } ?>>Review</option>
        <option value="feature"<?php if($current_tri_alert_title_bar_icon == "feature") { echo(' selected="selected"'); } ?>>Feature</option>
        <option value="live"<?php if($current_tri_alert_title_bar_icon == "live") { echo(' selected="selected"'); } ?>>Live</option>
    </select>

<?php
}

function tri_alert_editor_title_bar_slug() {
?>
    <p><b>slugTag:</b> <span class="optional">(Leave blank to disable)</span></p>
    <input type="text" name="tri_alert_title_bar_slug" id="tri_alert_title_bar_slug" value="<?php echo get_option('tri_alert_title_bar_slug'); ?>">
    <p class="explanatory"><span class="important">Important:</span> Write in sentence case (the text will be displayed in uppercase).</p>

<?php
}

function tri_alert_editor_distinction_text() {
?>
    <p><b>Text: <span class="optional">(Leave blank to disable)</span></b></p>
    <input type="text" name="tri_alert_distinction_text" id="tri_alert_distinction_text" value="<?php echo get_option('tri_alert_distinction_text'); ?>">
    <p class="explanatory"><span class="important">Important:</span> Write in sentence case (the text will be displayed in uppercase).</p>

<?php
}

function tri_alert_editor_distinction_icon() {
	$current_tri_alert_distinction_icon = get_option("tri_alert_distinction_icon");
?>
    <p><b>Icon:</b></p>
    <select name="tri_alert_distinction_icon" id="tri_alert_distinction_icon">
        <option value="none"<?php if($current_tri_alert_distinction_icon == "none") { echo(' selected="selected"'); } ?>>None</option>
        <option value="cece"<?php if($current_tri_alert_distinction_icon == "cece") { echo(' selected="selected"'); } ?>>CeCe (Critical Chicken logo)</option>
        <option value="live"<?php if($current_tri_alert_distinction_icon == "live") { echo(' selected="selected"'); } ?>>Live</option>
    </select>

<?php
}

function tri_alert_editor_text() {
?>
    <textarea name="tri_alert_text" id="tri_alert_text" rows="5"><?php echo get_option('tri_alert_text'); ?></textarea>
    <p class="explanatory"><span class="tip">Tip:</span> You can use simple HTML tags like <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code>, and they&rsquo;ll be reflected in the realtime preview.</p>

<?php
}

function tri_alert_editor_button_text() {
?>
    <p><b>Text:</b> <span class="optional">(Leave blank to disable)</span></p>
    <input type="text" name="tri_alert_button_text" id="tri_alert_button_text" value="<?php echo get_option('tri_alert_button_text'); ?>">

<?php
}

function tri_alert_editor_button_url() {
?>
    <p><b>URL:</b></p>
    <input type="text" name="tri_alert_button_url" id="tri_alert_button_url" value="<?php echo get_option('tri_alert_button_url'); ?>">

<?php
}

function tri_alert_editor_button_target() {
?>
    <p><b><code>target</code> attribute:</b></p>
    <input type="text" name="tri_alert_button_target" id="tri_alert_button_target" value="<?php echo get_option('tri_alert_button_target'); ?>">
    <p class="explanatory"><span class="tip">Tip:</span> Use <code>_blank</code> for external websites, or leave blank for internal links.</p>
<?php
}

function tri_alert_editor_button_rel() {
?>
    <p><b><code>rel</code> attribute:</b></p>
    <input type="text" name="tri_alert_button_rel" id="tri_alert_button_rel" value="<?php echo get_option('tri_alert_button_rel'); ?>">
    <p class="explanatory"><span class="tip">Tip:</span> You can just leave this blank if you&rsquo;re not sure.</p>
<?php
}

function tri_alert_editor_link_text() {
?>
    <p><b>Text:</b> <span class="optional">(Leave blank to disable)</span></p>
    <input type="text" name="tri_alert_link_text" id="tri_alert_link_text" value="<?php echo get_option('tri_alert_link_text'); ?>">

<?php
}

function tri_alert_editor_link_url() {
?>
    <p><b>URL:</b></p>
    <input type="text" name="tri_alert_link_url" id="tri_alert_link_url" value="<?php echo get_option('tri_alert_link_url'); ?>">

<?php
}

function tri_alert_editor_link_target() {
?>
    <p><b><code>target</code> attribute:</b></p>
    <input type="text" name="tri_alert_link_target" id="tri_alert_link_target" value="<?php echo get_option('tri_alert_link_target'); ?>">
    <p class="explanatory"><span class="tip">Tip:</span> Use <code>_blank</code> for external websites, or leave blank for internal links.</p>
<?php
}

function tri_alert_editor_link_rel() {
?>
    <p><b><code>rel</code> attribute:</b></p>
    <input type="text" name="tri_alert_link_rel" id="tri_alert_link_rel" value="<?php echo get_option('tri_alert_link_rel'); ?>">
    <p class="explanatory"><span class="tip">Tip:</span> You can just leave this blank if you&rsquo;re not sure.</p>
<?php
}

function tri_alert_editor_classes() {
?>
    <input type="text" name="tri_alert_classes" id="tri_alert_classes" value="<?php echo get_option('tri_alert_classes'); ?>">
    <p class="explanatory"><span class="tip">Tip:</span> These are applied to <code>section#alert</code>. They don&rsquo;t show up in the realtime preview.</p>
<?php
}

function enqueue_js($hook) {
    wp_enqueue_script('tri_alert_editor', get_template_directory_uri() . '/js/alert-editor.js');
}
add_action('admin_enqueue_scripts', 'enqueue_js');
