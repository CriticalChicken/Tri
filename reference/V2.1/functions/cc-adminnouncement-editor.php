<?php

/* Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */

add_action( 'admin_menu', 'cc_adminnouncement_editor' );

function cc_adminnouncement_editor() {
	add_menu_page('Admin announcement editor', 'Announcements', 'manage_options', 'cc-adminnouncement-editor', 'cc_adminnouncement_editor_contents', 'dashicons-warning', 3.5  );
}

function cc_adminnouncement_editor_contents() {
?>

<div class="wrap">
	<h1 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/admin/v2-logo.png'); background-size: 54.5px 31px; background-position: left 12px; background-repeat: no-repeat; padding: 8px 0 12px 70.5px !important; height: 31px !important; line-height: 31px !important;">Admin announcement editor</h1>
	<form method="POST" action="options.php">
		<?php
		settings_fields('cc-adminnouncement-editor');
		do_settings_sections('cc-adminnouncement-editor');
		submit_button();
		?>
    </form>
</div>

<?php
}

add_action( 'admin_init', 'cc_adminnouncement_settings_init' );

function cc_adminnouncement_settings_init() {

	add_settings_section(
		'cc-adminnouncement-editor_setting_section',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_intro',
		'cc-adminnouncement-editor'
	);
	
	add_settings_field(
		'cc_adminnouncement_display',
		__( 'Display the announcements?', 'my-textdomain' ),
		'cc_adminnouncement_editor_display',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item1',
		__( 'Announcement items', 'my-textdomain' ),
		'cc_adminnouncement_editor_item1',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item2',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_item2',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item3',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_item3',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item4',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_item4',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item5',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_item5',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item6',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_item6',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item7',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_item7',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item8',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_item8',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item9',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_item9',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);
	
	add_settings_field(
		'cc_adminnouncement_item10',
		__( '', 'my-textdomain' ),
		'cc_adminnouncement_editor_item10',
		'cc-adminnouncement-editor',
		'cc-adminnouncement-editor_setting_section'
	);

	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_display' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item1' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item2' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item3' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item4' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item5' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item6' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item7' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item8' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item9' );
	register_setting( 'cc-adminnouncement-editor', 'cc_adminnouncement_item10' );
}

function cc_adminnouncement_editor_intro() {
	// Not currently used
}

function cc_adminnouncement_editor_display() {
	$current_cc_adminnouncement_display = get_option('cc_adminnouncement_display');
?>
		<input type="checkbox" name="cc_adminnouncement_display" id="cc_adminnouncement_display"<?php if($current_cc_adminnouncement_display == "on") { echo(' checked'); } ?>>

<?php
}

function cc_adminnouncement_editor_item1() {
?>
		<p>Each of these will be enclosed between &lt;p&gt; tags.</p><p>Don&rsquo;t need all the fields? You can leave some of them blank.<br><br></p>
		<input type="text" name="cc_adminnouncement_item1" id="cc_adminnouncement_item1" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item1'); ?>">

<?php
}

function cc_adminnouncement_editor_item2() {
?>
		<input type="text" name="cc_adminnouncement_item2" id="cc_adminnouncement_item2" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item2'); ?>">

<?php
}

function cc_adminnouncement_editor_item3() {
?>
		<input type="text" name="cc_adminnouncement_item3" id="cc_adminnouncement_item3" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item3'); ?>">

<?php
}

function cc_adminnouncement_editor_item4() {
?>
		<input type="text" name="cc_adminnouncement_item4" id="cc_adminnouncement_item4" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item4'); ?>">

<?php
}

function cc_adminnouncement_editor_item5() {
?>
		<input type="text" name="cc_adminnouncement_item5" id="cc_adminnouncement_item5" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item5'); ?>">

<?php
}

function cc_adminnouncement_editor_item6() {
?>
		<input type="text" name="cc_adminnouncement_item6" id="cc_adminnouncement_item6" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item6'); ?>">

<?php
}

function cc_adminnouncement_editor_item7() {
?>
		<input type="text" name="cc_adminnouncement_item7" id="cc_adminnouncement_item7" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item7'); ?>">

<?php
}

function cc_adminnouncement_editor_item8() {
?>
		<input type="text" name="cc_adminnouncement_item8" id="cc_adminnouncement_item8" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item8'); ?>">

<?php
}

function cc_adminnouncement_editor_item9() {
?>
		<input type="text" name="cc_adminnouncement_item9" id="cc_adminnouncement_item9" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item9'); ?>">

<?php
}

function cc_adminnouncement_editor_item10() {
?>
		<input type="text" name="cc_adminnouncement_item10" id="cc_adminnouncement_item10" style="width: 400px" value="<?php echo get_option('cc_adminnouncement_item10'); ?>">

<?php
}
