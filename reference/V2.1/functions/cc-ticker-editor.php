<?php

/* Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */

add_action( 'admin_menu', 'cc_ticker_editor' );

function cc_ticker_editor() {
	add_menu_page('Ticker editor', 'Ticker', 'manage_options', 'cc-ticker-editor', 'cc_ticker_editor_contents', 'dashicons-warning', 3.5  );
}

function cc_ticker_editor_contents() {
?>

<div class="wrap">
	<h1 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/admin/v2-logo.png'); background-size: 54.5px 31px; background-position: left 12px; background-repeat: no-repeat; padding: 8px 0 12px 70.5px !important; height: 31px !important; line-height: 31px !important;">Ticker editor</h1>
	<form method="POST" action="options.php">
		<?php
		settings_fields('cc-ticker-editor');
		do_settings_sections('cc-ticker-editor');
		submit_button();
		?>
    </form>
</div>

<?php
}

add_action( 'admin_init', 'cc_ticker_settings_init' );

function cc_ticker_settings_init() {

	add_settings_section(
		'cc-ticker-editor_setting_section',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_intro',
		'cc-ticker-editor'
	);
	
	add_settings_field(
		'cc_ticker_display',
		__( 'Display the ticker?', 'my-textdomain' ),
		'cc_ticker_editor_display',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_titletag_special',
		__( 'titleTag (required)', 'my-textdomain' ),
		'cc_ticker_editor_titletag_special',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item1',
		__( 'Ticker items', 'my-textdomain' ),
		'cc_ticker_editor_item1',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item2',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_item2',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item3',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_item3',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item4',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_item4',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item5',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_item5',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item6',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_item6',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item7',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_item7',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item8',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_item8',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item9',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_item9',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_item10',
		__( '', 'my-textdomain' ),
		'cc_ticker_editor_item10',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);
	
	add_settings_field(
		'cc_ticker_link',
		__( 'Link URL', 'my-textdomain' ),
		'cc_ticker_editor_link',
		'cc-ticker-editor',
		'cc-ticker-editor_setting_section'
	);

	register_setting( 'cc-ticker-editor', 'cc_ticker_display' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_titletag_special' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item1' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item2' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item3' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item4' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item5' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item6' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item7' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item8' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item9' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_item10' );
	register_setting( 'cc-ticker-editor', 'cc_ticker_link' );
}

function cc_ticker_editor_intro() {
	// Not currently used
}

function cc_ticker_editor_display() {
	$current_cc_ticker_display = get_option('cc_ticker_display');
?>
		<input type="checkbox" name="cc_ticker_display" id="cc_ticker_display"<?php if($current_cc_ticker_display == "on") { echo(' checked'); } ?>>

<?php
}

function cc_ticker_editor_titletag_special() {
	$current_titletag_special = get_option('cc_ticker_titletag_special');
?>
		<select name="cc_ticker_titletag_special" id="cc_ticker_titletag_special" style="width: 400px">
			<option value="ace-attorney"<?php if($current_titletag_special == "ace-attorney") { echo(' selected="selected"'); } ?>>Ace Attorney</option>
			<option value="breaking-news"<?php if($current_titletag_special == "breaking-news") { echo(' selected="selected"'); } ?>>Breaking news</option>
			<option value="critical-chicken"<?php if($current_titletag_special == "critical-chicken") { echo(' selected="selected"'); } ?>>Critical Chicken</option>
			<option value="dungeons-and-dragons"<?php if($current_titletag_special == "dungeons-and-dragons") { echo(' selected="selected"'); } ?>>Dungeons &amp; Dragons</option>
			<option value="e3s-future"<?php if($current_titletag_special == "e3s-future") { echo(' selected="selected"'); } ?>>E3&rsquo;s future</option>
			<option value="exclusive"<?php if($current_titletag_special == "exclusive") { echo(' selected="selected"'); } ?>>Exclusive</option>
			<option value="forthegaymers"<?php if($current_titletag_special == "forthegaymers") { echo(' selected="selected"'); } ?>>&num;ForTheGaymers</option>
			<option value="live"<?php if($current_titletag_special == "live") { echo(' selected="selected"'); } ?>>Live</option>
			<option value="news-alert"<?php if($current_titletag_special == "news-alert") { echo(' selected="selected"'); } ?>>News alert</option>
			<option value="nintendo-direct"<?php if($current_titletag_special == "nintendo-direct") { echo(' selected="selected"'); } ?>>Nintendo Direct</option>
			<option value="persona"<?php if($current_titletag_special == "persona") { echo(' selected="selected"'); } ?>>Persona</option>
			<option value="pokemon"<?php if($current_titletag_special == "pokemon") { echo(' selected="selected"'); } ?>>Pok&eacute;mon</option>
			<option value="pokemon-presents"<?php if($current_titletag_special == "pokemon-presents") { echo(' selected="selected"'); } ?>>Pok&eacute;mon Presents</option>
			<option value="state-of-play"<?php if($current_titletag_special == "state-of-play") { echo(' selected="selected"'); } ?>>State of Play</option>
			<option value="switch-2"<?php if($current_titletag_special == "switch-2") { echo(' selected="selected"'); } ?>>Switch 2</option>
			<option value="summer-game-fest-2024"<?php if($current_titletag_special == "summer-game-fest-2024") { echo(' selected="selected"'); } ?>>Summer Game Fest 2024</option>
		</select>

<?php
}

function cc_ticker_editor_item1() {
?>
		<p>Don&rsquo;t need all the fields? You can leave some of them blank.<br><br></p>
		<input type="text" name="cc_ticker_item1" id="cc_ticker_item1" style="width: 400px" value="<?php echo get_option('cc_ticker_item1'); ?>">

<?php
}

function cc_ticker_editor_item2() {
?>
		<input type="text" name="cc_ticker_item2" id="cc_ticker_item2" style="width: 400px" value="<?php echo get_option('cc_ticker_item2'); ?>">

<?php
}

function cc_ticker_editor_item3() {
?>
		<input type="text" name="cc_ticker_item3" id="cc_ticker_item3" style="width: 400px" value="<?php echo get_option('cc_ticker_item3'); ?>">

<?php
}

function cc_ticker_editor_item4() {
?>
		<input type="text" name="cc_ticker_item4" id="cc_ticker_item4" style="width: 400px" value="<?php echo get_option('cc_ticker_item4'); ?>">

<?php
}

function cc_ticker_editor_item5() {
?>
		<input type="text" name="cc_ticker_item5" id="cc_ticker_item5" style="width: 400px" value="<?php echo get_option('cc_ticker_item5'); ?>">

<?php
}

function cc_ticker_editor_item6() {
?>
		<input type="text" name="cc_ticker_item6" id="cc_ticker_item6" style="width: 400px" value="<?php echo get_option('cc_ticker_item6'); ?>">

<?php
}

function cc_ticker_editor_item7() {
?>
		<input type="text" name="cc_ticker_item7" id="cc_ticker_item7" style="width: 400px" value="<?php echo get_option('cc_ticker_item7'); ?>">

<?php
}

function cc_ticker_editor_item8() {
?>
		<input type="text" name="cc_ticker_item8" id="cc_ticker_item8" style="width: 400px" value="<?php echo get_option('cc_ticker_item8'); ?>">

<?php
}

function cc_ticker_editor_item9() {
?>
		<input type="text" name="cc_ticker_item9" id="cc_ticker_item9" style="width: 400px" value="<?php echo get_option('cc_ticker_item9'); ?>">

<?php
}

function cc_ticker_editor_item10() {
?>
		<input type="text" name="cc_ticker_item10" id="cc_ticker_item10" style="width: 400px" value="<?php echo get_option('cc_ticker_item10'); ?>">

<?php
}

function cc_ticker_editor_link() {
?>
		<input type="text" name="cc_ticker_link" id="cc_ticker_link" value="<?php echo get_option('cc_ticker_link'); ?>" style="width: 400px">
		<p style="font-size: small;">If a link isn&rsquo;t needed, just leave this field blank.</p>

<?php
}
