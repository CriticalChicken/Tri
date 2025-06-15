<?php

/* Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */

add_action( 'admin_menu', 'cc_timedmenu_editor' );

function cc_timedmenu_editor() {
	add_menu_page('Special menu item editor', 'Special menu item', 'manage_options', 'cc-timedmenu-editor', 'cc_timedmenu_editor_contents', 'dashicons-clock', 3.7  );
}

function cc_timedmenu_editor_contents() {
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,700;1,700&subset=latin-ext&display=swap" rel="stylesheet">
<style type="text/css">
#cc_timedmenu_text {
	width: 307px;
	height: 32px;
	font-family: 'Noto Sans Display', sans-serif;
	font-size: 22px;
	line-height: 32px;
	font-weight: 700;
	resize: none;
	overflow: hidden;
	padding: 0 !important;
	margin: 0 !important;
}
</style>

<div class="wrap">
	<h1 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/admin/v2-logo.png'); background-size: 54.5px 31px; background-position: left 12px; background-repeat: no-repeat; padding: 8px 0 12px 70.5px !important; height: 31px !important; line-height: 31px !important;">Special menu item editor</h1>
	<form method="POST" action="options.php">
		<?php
		settings_fields('cc-timedmenu-editor');
		do_settings_sections('cc-timedmenu-editor');
		submit_button();
		?>
    </form>
</div>

<?php
}

add_action( 'admin_init', 'cc_timedmenu_settings_init' );

function cc_timedmenu_settings_init() {

	add_settings_section(
		'cc-timedmenu-editor_setting_section',
		__( '', 'my-textdomain' ),
		'cc_timedmenu_editor_intro',
		'cc-timedmenu-editor'
	);
	
	add_settings_field(
		'cc_timedmenu_display',
		__( 'Display the special menu item?', 'my-textdomain' ),
		'cc_timedmenu_editor_display',
		'cc-timedmenu-editor',
		'cc-timedmenu-editor_setting_section'
	);
	
	add_settings_field(
		'cc_timedmenu_text',
		__( 'Text', 'my-textdomain' ),
		'cc_timedmenu_editor_text',
		'cc-timedmenu-editor',
		'cc-timedmenu-editor_setting_section'
	);
	
	add_settings_field(
		'cc_timedmenu_url',
		__( 'URL', 'my-textdomain' ),
		'cc_timedmenu_editor_url',
		'cc-timedmenu-editor',
		'cc-timedmenu-editor_setting_section'
	);

	add_settings_field(
		'cc_timedmenu_class',
		__( 'CSS class', 'my-textdomain' ),
		'cc_timedmenu_editor_class',
		'cc-timedmenu-editor',
		'cc-timedmenu-editor_setting_section'
	);

	register_setting( 'cc-timedmenu-editor', 'cc_timedmenu_display' );
	register_setting( 'cc-timedmenu-editor', 'cc_timedmenu_text' );
	register_setting( 'cc-timedmenu-editor', 'cc_timedmenu_url' );
	register_setting( 'cc-timedmenu-editor', 'cc_timedmenu_class' );
}

function cc_timedmenu_editor_intro() {
	// Not currently used
}

function cc_timedmenu_editor_display() {
	$current_timedmenu_display=get_option('cc_timedmenu_display');
?>
		<input type="checkbox" name="cc_timedmenu_display" id="cc_timedmenu_display"<?php if($current_timedmenu_display=="on"){echo(' checked');} ?>>
<?php
}

function cc_timedmenu_editor_text() {
?>
		<textarea name="cc_timedmenu_text" id="cc_timedmenu_text" rows="1"><?php echo get_option('cc_timedmenu_text'); ?></textarea>
		<p style="font-size: small;">If your text fits in the box, it&rsquo;ll fit on the website &ndash; at least on large desktops.</p>
		<p style="font-size: small;">We&rsquo;ll automatically move your text to an overflow menu if it&rsquo;s too long to fit on devices with smaller screens.</p>
<?php
}

function cc_timedmenu_editor_url() {
?>
		<input type="text" name="cc_timedmenu_url" id="cc_timedmenu_url" value="<?php echo get_option('cc_timedmenu_url'); ?>" style="width: 400px">

<?php
}

function cc_timedmenu_editor_class() {
?>
		<p>Optionally, add a CSS class &ndash; like &ldquo;summer-game-fest&rdquo; &ndash; to your menu item.</p>
		<input type="text" name="cc_timedmenu_class" id="cc_timedmenu_class" value="<?php echo get_option('cc_timedmenu_class'); ?>" style="width: 400px">
		<p style="font-size: small;">If you don&rsquo;t need to add a CSS class, just leave this box blank.</p>
		<p style="font-size: small;">We&rsquo;ll always add the &ldquo;special&rdquo; class, regardless of what&rsquo;s in this box.</p>

<?php
}
