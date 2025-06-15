<?php

/* Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */

add_action( 'admin_menu', 'ticker_editor' );

function ticker_editor() {
	add_menu_page('Ticker Editor', 'Ticker Editor', 'manage_options', 'ticker-editor', 'ticker_editor_contents', 'dashicons-warning', 3.5  );
}

function ticker_editor_contents() {
?>

<div class="wrap">
	<h1 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/admin/v2-logo.png'); background-size: 54.5px 31px; background-position: left 12px; background-repeat: no-repeat; padding: 8px 0 12px 70.5px !important; height: 31px !important; line-height: 31px !important;">Ticker Editor</h1>
	<form method="POST" action="options.php">
		<?php
		settings_fields('ticker-editor');
		do_settings_sections('ticker-editor');
		submit_button();
		?>
    </form>
</div>

<?php
}

add_action( 'admin_init', 'ticker_settings_init' );

function ticker_settings_init() {

	add_settings_section(
		'ticker-editor_setting_section',
		__( '', 'my-textdomain' ),
		'ticker_editor_intro',
		'ticker-editor'
	);
	
	add_settings_field(
		'ticker_display',
		__( 'Display the ticker?', 'my-textdomain' ),
		'ticker_editor_display',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_titletag_special',
		__( 'TitleTag', 'my-textdomain' ),
		'ticker_editor_titletag_special',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_titletag_text',
		__( '', 'my-textdomain' ),
		'ticker_editor_titletag_text',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item1',
		__( 'Ticker items', 'my-textdomain' ),
		'ticker_editor_item1',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item2',
		__( '', 'my-textdomain' ),
		'ticker_editor_item2',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item3',
		__( '', 'my-textdomain' ),
		'ticker_editor_item3',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item4',
		__( '', 'my-textdomain' ),
		'ticker_editor_item4',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item5',
		__( '', 'my-textdomain' ),
		'ticker_editor_item5',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item6',
		__( '', 'my-textdomain' ),
		'ticker_editor_item6',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item7',
		__( '', 'my-textdomain' ),
		'ticker_editor_item7',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item8',
		__( '', 'my-textdomain' ),
		'ticker_editor_item8',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item9',
		__( '', 'my-textdomain' ),
		'ticker_editor_item9',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_item10',
		__( '', 'my-textdomain' ),
		'ticker_editor_item10',
		'ticker-editor',
		'ticker-editor_setting_section'
	);
	
	add_settings_field(
		'ticker_link',
		__( 'Link URL', 'my-textdomain' ),
		'ticker_editor_link',
		'ticker-editor',
		'ticker-editor_setting_section'
	);

	register_setting( 'ticker-editor', 'ticker_display' );
	register_setting( 'ticker-editor', 'ticker_titletag_special' );
	register_setting( 'ticker-editor', 'ticker_titletag_text' );
	register_setting( 'ticker-editor', 'ticker_item1' );
	register_setting( 'ticker-editor', 'ticker_item2' );
	register_setting( 'ticker-editor', 'ticker_item3' );
	register_setting( 'ticker-editor', 'ticker_item4' );
	register_setting( 'ticker-editor', 'ticker_item5' );
	register_setting( 'ticker-editor', 'ticker_item6' );
	register_setting( 'ticker-editor', 'ticker_item7' );
	register_setting( 'ticker-editor', 'ticker_item8' );
	register_setting( 'ticker-editor', 'ticker_item9' );
	register_setting( 'ticker-editor', 'ticker_item10' );
	register_setting( 'ticker-editor', 'ticker_link' );
}

function ticker_editor_intro() {
	// Not currently used
}

function ticker_editor_display() {
	$current_ticker_display = get_option('ticker_display');
?>
		<input type="checkbox" name="ticker_display" id="ticker_display"<?php if($current_ticker_display == "on") { echo(' checked'); } ?>>

<?php
}

function ticker_editor_titletag_special() {
	$current_titletag_special = get_option('ticker_titletag_special');
?>
		<p>Icon:</p>
		<select name="ticker_titletag_special" id="ticker_titletag_special" style="width: 400px">
			<option value="none"<?php if($current_titletag_special == "none") { echo(' selected="selected"'); } ?>>None</option>
			<option value="ace-attorney"<?php if($current_titletag_special == "ace-attorney") { echo(' selected="selected"'); } ?>>Ace Attorney</option>
			<option value="e3"<?php if($current_titletag_special == "e3") { echo(' selected="selected"'); } ?>>E3</option>
			<option value="live"<?php if($current_titletag_special == "live") { echo(' selected="selected"'); } ?>>Live</option>
			<option value="nintendo-direct"<?php if($current_titletag_special == "nintendo-direct") { echo(' selected="selected"'); } ?>>Nintendo Direct</option>
			<option value="pokemon-presents"<?php if($current_titletag_special == "pokemon-presents") { echo(' selected="selected"'); } ?>>Pok&eacute;mon Presents</option>
			<option value="state-of-play"<?php if($current_titletag_special == "state-of-play") { echo(' selected="selected"'); } ?>>State of Play</option>
			<option value="summer-game-fest"<?php if($current_titletag_special == "summer-game-fest") { echo(' selected="selected"'); } ?>>Summer Game Fest</option>
		</select>

<?php
}

function ticker_editor_titletag_text() {
?>
		<p>Text:</p>
		<input type="text" name="ticker_titletag_text" id="ticker_titletag_text" style="width: 400px" value="<?php echo get_option('ticker_titletag_text'); ?>">

<?php
}

function ticker_editor_item1() {
?>
		<p>Don&rsquo;t need all the fields? You can leave some of them blank.<br><br></p>
		<input type="text" name="ticker_item1" id="ticker_item1" style="width: 400px" value="<?php echo get_option('ticker_item1'); ?>">

<?php
}

function ticker_editor_item2() {
?>
		<input type="text" name="ticker_item2" id="ticker_item2" style="width: 400px" value="<?php echo get_option('ticker_item2'); ?>">

<?php
}

function ticker_editor_item3() {
?>
		<input type="text" name="ticker_item3" id="ticker_item3" style="width: 400px" value="<?php echo get_option('ticker_item3'); ?>">

<?php
}

function ticker_editor_item4() {
?>
		<input type="text" name="ticker_item4" id="ticker_item4" style="width: 400px" value="<?php echo get_option('ticker_item4'); ?>">

<?php
}

function ticker_editor_item5() {
?>
		<input type="text" name="ticker_item5" id="ticker_item5" style="width: 400px" value="<?php echo get_option('ticker_item5'); ?>">

<?php
}

function ticker_editor_item6() {
?>
		<input type="text" name="ticker_item6" id="ticker_item6" style="width: 400px" value="<?php echo get_option('ticker_item6'); ?>">

<?php
}

function ticker_editor_item7() {
?>
		<input type="text" name="ticker_item7" id="ticker_item7" style="width: 400px" value="<?php echo get_option('ticker_item7'); ?>">

<?php
}

function ticker_editor_item8() {
?>
		<input type="text" name="ticker_item8" id="ticker_item8" style="width: 400px" value="<?php echo get_option('ticker_item8'); ?>">

<?php
}

function ticker_editor_item9() {
?>
		<input type="text" name="ticker_item9" id="ticker_item9" style="width: 400px" value="<?php echo get_option('ticker_item9'); ?>">

<?php
}

function ticker_editor_item10() {
?>
		<input type="text" name="ticker_item10" id="ticker_item10" style="width: 400px" value="<?php echo get_option('ticker_item10'); ?>">

<?php
}

function ticker_editor_link() {
?>
		<input type="text" name="ticker_link" id="ticker_link" value="<?php echo get_option('ticker_link'); ?>" style="width: 400px">
		<p style="font-size: small;">If a link isn&rsquo;t needed, just leave this field blank.</p>

<?php
}
