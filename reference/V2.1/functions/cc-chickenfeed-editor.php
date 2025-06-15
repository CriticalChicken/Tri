<?php

/* Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */

add_action( 'admin_menu', 'cc_chickenfeed_editor' );

function cc_chickenfeed_editor() {
	add_menu_page('ChickenFeed editor', 'ChickenFeed', 'manage_options', 'cc-chickenfeed-editor', 'cc_chickenfeed_editor_contents', 'dashicons-chart-line', 3.8  );
}

function cc_chickenfeed_editor_contents() {
?>

<div class="wrap">
	<h1 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/admin/v2-logo.png'); background-size: 54.5px 31px; background-position: left 12px; background-repeat: no-repeat; padding: 8px 0 12px 70.5px !important; height: 31px !important; line-height: 31px !important;">ChickenFeed editor</h1>
	<form method="POST" action="options.php">
		<?php
		settings_fields('cc-chickenfeed-editor');
		do_settings_sections('cc-chickenfeed-editor');
		submit_button();
		?>
    </form>
</div>

<?php
}

add_action( 'admin_init', 'cc_chickenfeed_settings_init' );

function cc_chickenfeed_settings_init() {

	add_settings_section(
		'cc-chickenfeed-editor_setting_section',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_intro',
		'cc-chickenfeed-editor'
	);
	
	add_settings_field(
		'cc_chickenfeed_sentiment1',
		__( 'Top item', 'my-textdomain' ),
		'cc_chickenfeed_editor_sentiment1',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_symbol1',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_symbol1',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_name1',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_name1',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_blurb1',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_blurb1',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_linktext1',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_linktext1',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_linkurl1',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_linkurl1',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_sentiment2',
		__( 'Bottom item', 'my-textdomain' ),
		'cc_chickenfeed_editor_sentiment2',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_symbol2',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_symbol2',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_name2',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_name2',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_blurb2',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_blurb2',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_linktext2',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_linktext2',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	add_settings_field(
		'cc_chickenfeed_linkurl2',
		__( '', 'my-textdomain' ),
		'cc_chickenfeed_editor_linkurl2',
		'cc-chickenfeed-editor',
		'cc-chickenfeed-editor_setting_section'
	);

	register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_sentiment1' );
	register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_symbol1' );
    register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_name1' );
    register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_blurb1' );
    register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_linktext1' );
    register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_linkurl1' );
	register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_sentiment2' );
	register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_symbol2' );
    register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_name2' );
    register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_blurb2' );
    register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_linktext2' );
    register_setting( 'cc-chickenfeed-editor', 'cc_chickenfeed_linkurl2' );
}

function cc_chickenfeed_editor_intro() {
	// Not currently used
}

function cc_chickenfeed_editor_sentiment1() {
	$current_sentiment = get_option('cc_chickenfeed_sentiment1');
?>
        <p>Sentiment:</p>
		<select name="cc_chickenfeed_sentiment1" id="cc_chickenfeed_sentiment1" style="width: 400px">
			<option value="green"<?php if($current_sentiment == "green") { echo(' selected="selected"'); } ?>>Positive (green)</option>
			<option value="red"<?php if($current_sentiment == "red") { echo(' selected="selected"'); } ?>>Negative (red)</option>
			<option value="orange"<?php if($current_sentiment == "orange") { echo(' selected="selected"'); } ?>>Mixed (orange)</option>
		</select>

<?php
}

function cc_chickenfeed_editor_symbol1() {
?>
        <p>Five-character stock exchange symbol:</p>
		<input type="text" name="cc_chickenfeed_symbol1" id="cc_chickenfeed_symbol1" value="<?php echo get_option('cc_chickenfeed_symbol1'); ?>" style="width: 400px" maxlength="5">
        <p style="font-size: small;">E.g. &ldquo;PRSNA&rdquo; for &ldquo;The <b>Persona</b> series&rdquo;, or &ldquo;VSNVL&rdquo; for &ldquo;Visual novels&rdquo;.</p>
        <p style="font-size: small;">This must be <strong>exactly</strong> five characters, and entirely uppercase.</p>

<?php
}

function cc_chickenfeed_editor_name1() {
?>
        <p>Title:</p>
        <input type="text" name="cc_chickenfeed_name1" id="cc_chickenfeed_name1" value="<?php echo get_option('cc_chickenfeed_name1'); ?>" style="width: 400px">

<?php
}

function cc_chickenfeed_editor_blurb1() {
?>
        <p>Description:</p>
        <input type="text" name="cc_chickenfeed_blurb1" id="cc_chickenfeed_blurb1" value="<?php echo get_option('cc_chickenfeed_blurb1'); ?>" style="width: 400px">

<?php
}

function cc_chickenfeed_editor_linktext1() {
?>
        <p>Link text:</p>
        <input type="text" name="cc_chickenfeed_linktext1" id="cc_chickenfeed_linktext1" value="<?php echo get_option('cc_chickenfeed_linktext1'); ?>" style="width: 400px">

<?php
}

function cc_chickenfeed_editor_linkurl1() {
?>
        <p>Link URL:</p>
        <input type="text" name="cc_chickenfeed_linkurl1" id="cc_chickenfeed_linkurl1" value="<?php echo get_option('cc_chickenfeed_linkurl1'); ?>" style="width: 400px">
        <p style="font-size: small;">If a link isn&rsquo;t needed, just leave this field blank.</p>

<?php
}

function cc_chickenfeed_editor_sentiment2() {
	$current_sentiment = get_option('cc_chickenfeed_sentiment2');
?>
        <p>Sentiment:</p>
		<select name="cc_chickenfeed_sentiment2" id="cc_chickenfeed_sentiment2" style="width: 400px">
			<option value="green"<?php if($current_sentiment == "green") { echo(' selected="selected"'); } ?>>Positive (green)</option>
			<option value="red"<?php if($current_sentiment == "red") { echo(' selected="selected"'); } ?>>Negative (red)</option>
			<option value="orange"<?php if($current_sentiment == "orange") { echo(' selected="selected"'); } ?>>Mixed (orange)</option>
		</select>

<?php
}

function cc_chickenfeed_editor_symbol2() {
?>
        <p>Five-character stock exchange symbol:</p>
		<input type="text" name="cc_chickenfeed_symbol2" id="cc_chickenfeed_symbol2" value="<?php echo get_option('cc_chickenfeed_symbol2'); ?>" style="width: 400px" maxlength="5">
        <p style="font-size: small;">E.g. &ldquo;PRSNA&rdquo; for &ldquo;The <b>Persona</b> series&rdquo;, or &ldquo;VSNVL&rdquo; for &ldquo;Visual novels&rdquo;.</p>
        <p style="font-size: small;">This must be <strong>exactly</strong> five characters, and entirely uppercase.</p>

<?php
}

function cc_chickenfeed_editor_name2() {
?>
        <p>Title:</p>
        <input type="text" name="cc_chickenfeed_name2" id="cc_chickenfeed_name2" value="<?php echo get_option('cc_chickenfeed_name2'); ?>" style="width: 400px">

<?php
}

function cc_chickenfeed_editor_blurb2() {
?>
        <p>Description:</p>
        <input type="text" name="cc_chickenfeed_blurb2" id="cc_chickenfeed_blurb2" value="<?php echo get_option('cc_chickenfeed_blurb2'); ?>" style="width: 400px">

<?php
}

function cc_chickenfeed_editor_linktext2() {
?>
        <p>Link text:</p>
        <input type="text" name="cc_chickenfeed_linktext2" id="cc_chickenfeed_linktext2" value="<?php echo get_option('cc_chickenfeed_linktext2'); ?>" style="width: 400px">

<?php
}

function cc_chickenfeed_editor_linkurl2() {
?>
        <p>Link URL:</p>
        <input type="text" name="cc_chickenfeed_linkurl2" id="cc_chickenfeed_linkurl2" value="<?php echo get_option('cc_chickenfeed_linkurl2'); ?>" style="width: 400px">
        <p style="font-size: small;">If a link isn&rsquo;t needed, just leave this field blank.</p>

<?php
}
