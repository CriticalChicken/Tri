<?php add_action('admin_menu','mm_editor');function mm_editor(){add_menu_page('Maintenance Mode','Maintenance Mode','manage_options','mm-editor','mm_editor_contents','dashicons-hidden',3.6);}function mm_editor_contents(){ ?>

<div class="wrap">
	<h1 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/admin/v2-logo.png'); background-size: 54.5px 31px; background-position: left 12px; background-repeat: no-repeat; padding: 8px 0 12px 70.5px !important; height: 31px !important; line-height: 31px !important;">Maintenance Mode</h1>
	<form method="POST" action="options.php">
		<?php settings_fields('mm-editor');do_settings_sections('mm-editor');submit_button(); ?>
    </form>
</div>

<?php }add_action('admin_init','mm_settings_init');function mm_settings_init(){add_settings_section('mm-editor_setting_section',__('','my-textdomain'),'mm_editor_intro','mm-editor');add_settings_field('mm_display',__('Enable Maintenance Mode?','my-textdomain'),'mm_editor_display','mm-editor','mm-editor_setting_section');register_setting('mm-editor','mm_display');}function mm_editor_intro(){ ?>
<h2>When Maintenance Mode is enabled, the website will only be visibly by people with the edit_posts permission.</h2>
<h2>It&rsquo;s designed to limit HTTP requests, so it could be useful in the unlikely event of (e.g.) a &ldquo;Reddit hug of death&rdquo;.</h2>
<h2 style="color: #d20202;">Use it sparingly.</h2>

<?php }function mm_editor_display(){$current_mm_display=get_option('mm_display'); ?>
		<input type="checkbox" name="mm_display" id="mm_display"<?php if($current_mm_display=="on"){echo(' checked');} ?>>

<?php }