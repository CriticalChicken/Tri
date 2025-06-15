<?php

/* Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */

add_action( 'admin_menu', 'jumbotron_editor' );

function jumbotron_editor() {
	add_menu_page('Jumbotron Editor', 'Jumbotron Editor', 'manage_options', 'jumbotron-editor', 'jumbotron_editor_contents', 'dashicons-megaphone', 3  );
}

function jumbotron_editor_contents() {
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,700;1,700&subset=latin-ext&display=swap" rel="stylesheet">
<style type="text/css">
#jumbotron_text {
	width: 544px;
	height: 326px;
	font-family: 'Noto Sans Display', sans-serif;
	font-size: 62px;
	line-height: 80px;
	font-weight: 700;
	resize: none;
	overflow: hidden;
	padding: 0 !important;
	margin: 0 !important;
}
</style>

<div class="wrap">
	<h1 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/admin/v2-logo.png'); background-size: 54.5px 31px; background-position: left 12px; background-repeat: no-repeat; padding: 8px 0 12px 70.5px !important; height: 31px !important; line-height: 31px !important;">Jumbotron Editor</h1>
	<form method="POST" action="options.php">
		<?php
		settings_fields('jumbotron-editor');
		do_settings_sections('jumbotron-editor');
		submit_button();
		?>
    </form>
</div>

<?php
}

add_action( 'admin_init', 'jumbotron_settings_init' );

function jumbotron_settings_init() {

	add_settings_section(
		'jumbotron-editor_setting_section',
		__( '', 'my-textdomain' ),
		'jumbotron_editor_intro',
		'jumbotron-editor'
	);

	add_settings_field(
		'jumbotron_color_field',
		__( 'Colour scheme', 'my-textdomain' ),
		'jumbotron_editor_color_field',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_titletag1_special',
		__( 'TitleTag 1', 'my-textdomain' ),
		'jumbotron_editor_titletag1_special',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_titletag1_text',
		__( '', 'my-textdomain' ),
		'jumbotron_editor_titletag1_text',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_titletag2_display',
		__( 'TitleTag2', 'my-textdomain' ),
		'jumbotron_editor_titletag2_display',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_titletag2_type',
		__( '', 'my-textdomain' ),
		'jumbotron_editor_titletag2_type',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_titletag2_special',
		__( '', 'my-textdomain' ),
		'jumbotron_editor_titletag2_special',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_titletag2_text',
		__( '', 'my-textdomain' ),
		'jumbotron_editor_titletag2_text',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_text',
		__( 'Main text', 'my-textdomain' ),
		'jumbotron_editor_text',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_image',
		__( 'Image', 'my-textdomain' ),
		'jumbotron_editor_image',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_alt',
		__( '', 'my-textdomain' ),
		'jumbotron_editor_alt',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'jumbotron_link',
		__( 'Link URL', 'my-textdomain' ),
		'jumbotron_editor_link',
		'jumbotron-editor',
		'jumbotron-editor_setting_section'
	);

	register_setting( 'jumbotron-editor', 'jumbotron_color_field' );
	register_setting( 'jumbotron-editor', 'jumbotron_titletag1_special' );
	register_setting( 'jumbotron-editor', 'jumbotron_titletag1_text' );
	register_setting( 'jumbotron-editor', 'jumbotron_titletag2_display' );
	register_setting( 'jumbotron-editor', 'jumbotron_titletag2_type' );
	register_setting( 'jumbotron-editor', 'jumbotron_titletag2_special' );
	register_setting( 'jumbotron-editor', 'jumbotron_titletag2_text' );
	register_setting( 'jumbotron-editor', 'jumbotron_text' );
	register_setting( 'jumbotron-editor', 'jumbotron_image' );
	register_setting( 'jumbotron-editor', 'jumbotron_alt' );
	register_setting( 'jumbotron-editor', 'jumbotron_link' );
}

function jumbotron_editor_intro() {
	// Not currently used
}

function jumbotron_editor_color_field() {
	$current_color_scheme = get_option('jumbotron_color_field');
?>
		<select name="jumbotron_color_field" id="jumbotron_color_field" style="width: 400px">
			<option value="black"<?php if($current_color_scheme == "black") { echo(' selected="selected"'); } ?>>Generic (black)</option>
			<option value="red"<?php if($current_color_scheme == "red") { echo(' selected="selected"'); } ?>>News (red)</option>
			<option value="blue"<?php if($current_color_scheme == "blue") { echo(' selected="selected"'); } ?>>Features (blue)</option>
			<option value="orange"<?php if($current_color_scheme == "orange") { echo(' selected="selected"'); } ?>>Reviews (orange)</option>
		</select>

<?php
}

function jumbotron_editor_titletag1_special() {
	$current_titletag1_special = get_option('jumbotron_titletag1_special');
?>
		<p>Icon:</p>
		<select name="jumbotron_titletag1_special" id="jumbotron_titletag1_special" style="width: 400px">
			<option value="none"<?php if($current_titletag1_special == "none") { echo(' selected="selected"'); } ?>>None</option>
			<option value="ace-attorney"<?php if($current_titletag1_special == "ace-attorney") { echo(' selected="selected"'); } ?>>Ace Attorney</option>
			<option value="e3"<?php if($current_titletag1_special == "e3") { echo(' selected="selected"'); } ?>>E3</option>
			<option value="live"<?php if($current_titletag1_special == "live") { echo(' selected="selected"'); } ?>>Live</option>
			<option value="nintendo-direct"<?php if($current_titletag1_special == "nintendo-direct") { echo(' selected="selected"'); } ?>>Nintendo Direct</option>
			<option value="pokemon-presents"<?php if($current_titletag1_special == "pokemon-presents") { echo(' selected="selected"'); } ?>>Pok&eacute;mon Presents</option>
			<option value="state-of-play"<?php if($current_titletag1_special == "state-of-play") { echo(' selected="selected"'); } ?>>State of Play</option>
			<option value="summer-game-fest"<?php if($current_titletag1_special == "summer-game-fest") { echo(' selected="selected"'); } ?>>Summer Game Fest</option>
		</select>

<?php
}

function jumbotron_editor_titletag1_text() {
?>
		<p>Text:</p>
		<input type="text" name="jumbotron_titletag1_text" id="jumbotron_titletag1_text" style="width: 400px" value="<?php echo get_option('jumbotron_titletag1_text'); ?>">

<?php
}

function jumbotron_editor_titletag2_display() {
	$current_titletag2_display = get_option('jumbotron_titletag2_display');
?>
		<p>Visible?</p>
		<input type="checkbox" name="jumbotron_titletag2_display" id="jumbotron_titletag2_display"<?php if($current_titletag2_display == "on") { echo(' checked'); } ?>>

<?php
}

function jumbotron_editor_titletag2_type() {
	$current_titletag2_type = get_option('jumbotron_titletag2_type');
?>
		<p>Type:</p>
		<select name="jumbotron_titletag2_type" id="jumbotron_titletag2_type" style="width: 400px">
			<option value="main"<?php if($current_titletag2_type == "main") { echo(' selected="selected"'); } ?>>Main TitleTag (filled in)</option>
			<option value="sub"<?php if($current_titletag2_type == "sub") { echo(' selected="selected"'); } ?>>Sub TitleTag (outlined)</option>
		</select>

<?php
}

function jumbotron_editor_titletag2_special() {
	$current_titletag2_special = get_option('jumbotron_titletag2_special');
?>
		<p>Icon:</p>
		<select name="jumbotron_titletag2_special" id="jumbotron_titletag2_special" style="width: 400px">
			<option value="none"<?php if($current_titletag2_special == "none") { echo(' selected="selected"'); } ?>>None</option>
			<option value="ace-attorney"<?php if($current_titletag2_special == "ace-attorney") { echo(' selected="selected"'); } ?>>Ace Attorney</option>
			<option value="e3"<?php if($current_titletag2_special == "e3") { echo(' selected="selected"'); } ?>>E3</option>
			<option value="live"<?php if($current_titletag2_special == "live") { echo(' selected="selected"'); } ?>>Live</option>
			<option value="nintendo-direct"<?php if($current_titletag2_special == "nintendo-direct") { echo(' selected="selected"'); } ?>>Nintendo Direct</option>
			<option value="pokemon-presents"<?php if($current_titletag2_special == "pokemon-presents") { echo(' selected="selected"'); } ?>>Pok&eacute;mon Presents</option>
			<option value="state-of-play"<?php if($current_titletag2_special == "state-of-play") { echo(' selected="selected"'); } ?>>State of Play</option>
			<option value="summer-game-fest"<?php if($current_titletag2_special == "summer-game-fest") { echo(' selected="selected"'); } ?>>Summer Game Fest</option>
		</select>
		<p style="font-size: small;">The icon will only be shown if &ldquo;Type&rdquo; (above) is set to &ldquo;Main&rdquo;.</p>

<?php
}

function jumbotron_editor_titletag2_text() {
?>
		<p>Text:</p>
		<input type="text" name="jumbotron_titletag2_text" style="width: 400px" id="jumbotron_titletag2_text" value="<?php echo get_option('jumbotron_titletag2_text'); ?>">

<?php
}

function jumbotron_editor_text() {
?>
		<textarea name="jumbotron_text" id="jumbotron_text" rows="4"><?php echo get_option('jumbotron_text'); ?></textarea>
		<p style="font-size: small;">If your text fits in the box, it&rsquo;ll fit on the website.</p>

<?php
}

function jumbotron_editor_image() {
?>
		<p>URL:</p>
		<input type="text" name="jumbotron_image" id="jumbotron_image" value="<?php echo get_option('jumbotron_image'); ?>" style="width: 400px">
		<p style="font-size: small;">Your image <strong>must</strong> be 16:9 (widescreen) and <strong>at least</strong> 1,080 &times; 608 pixel resolution.</p>
		<p><a href="<?php echo get_site_url(); ?>/wp-admin/upload.php" target="_blank"><b>Media Library &raquo;</b></a></p>

<?php
}

function jumbotron_editor_alt() {
?>
		<p>Alt text:</p>
		<input type="text" name="jumbotron_alt" id="jumbotron_alt" value="<?php echo get_option('jumbotron_alt'); ?>" style="width: 400px">
		<p style="font-size: small;"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree/" target="_blank" rel="external nofollow help"><b>Describe the purpose of your image &raquo;</b></a></p>

<?php
}

function jumbotron_editor_link() {
?>
		<input type="text" name="jumbotron_link" id="jumbotron_link" value="<?php echo get_option('jumbotron_link'); ?>" style="width: 400px">
		<p style="font-size: small;">In rare cases where a link isn&rsquo;t needed, just leave this field blank.</p>

<?php
}