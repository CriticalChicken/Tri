<?php add_action('admin_menu','cc_mm_editor');function cc_mm_editor(){add_menu_page('Maintenance mode','Maintenance mode','manage_options','cc-mm-editor','cc_mm_editor_contents','dashicons-hidden',3.6);}function cc_mm_editor_contents(){ ?>

<div class="wrap">
	<h1 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/admin/v2-logo.png'); background-size: 54.5px 31px; background-position: left 12px; background-repeat: no-repeat; padding: 8px 0 12px 70.5px !important; height: 31px !important; line-height: 31px !important;">Maintenance mode</h1>
	<form method="POST" action="options.php">
		<?php settings_fields('cc-mm-editor');do_settings_sections('cc-mm-editor');submit_button(); ?>
    </form>
</div>

<?php }add_action('admin_init','cc_mm_settings_init');function cc_mm_settings_init(){add_settings_section('cc-mm-editor_setting_section',__('','my-textdomain'),'cc_mm_editor_intro','cc-mm-editor');add_settings_field('cc_mm_display',__('Enable maintenance mode?','my-textdomain'),'cc_mm_editor_display','cc-mm-editor','cc-mm-editor_setting_section');register_setting('cc-mm-editor','cc_mm_display');}function cc_mm_editor_intro(){ ?>
<h2>When maintenance mode is enabled, the website will only be visibly by people with the edit_posts permission.</h2>
<h2>It&rsquo;s designed to limit HTTP requests, so it could be useful in the unlikely event of (e.g.) a &ldquo;Reddit hug of death&rdquo;.</h2>
<h2 style="color: #d20202;">Use it sparingly.</h2>

<?php }function cc_mm_editor_display(){$current_cc_mm_display=get_option('cc_mm_display'); ?>
		<input type="checkbox" name="cc_mm_display" id="cc_mm_display"<?php if($current_cc_mm_display=="on"){echo(' checked');} ?>>

<?php }
