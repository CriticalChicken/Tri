<div class="teleport-marker alert"></div>
<section id="alert" class="content-box listing-item home-listing-item <?php echo get_option('tri_alert_colour'); if(get_option('tri_alert_classes')) { echo ' '; echo get_option('tri_alert_classes'); } if(get_option('tri_alert_yellow_background')=='on') { echo ' yellow-background'; } ?>" role="alert" data-sidebar>
    <div class="content-box-title-bar">
        <span class="content-box-title<?php if(get_option('tri_alert_title_bar_text_flash')=='on') { echo ' flashing'; } ?>" role="sectionhead"><?php if(get_option('tri_alert_title_bar_text')) { echo get_option('tri_alert_title_bar_text'); } else { echo 'Critical Chicken'; } ?></span>
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-<?php echo get_option('tri_alert_title_bar_icon'); ?>-white.svg" width="16" height="16" alt="" class="content-box-icon">
        <?php if(get_option('tri_alert_title_bar_slug')) { ?><span class="content-box-slug"><?php echo get_option('tri_alert_title_bar_slug'); ?></span><?php } ?>
        <?php if(get_option('tri_alert_distinction_text')) { ?><div class="content-box-distinction">
            <?php if(get_option('tri_alert_distinction_icon')!='none') { ?><img src="<?php echo get_template_directory_uri(); ?>/img/icon-<?php echo get_option('tri_alert_distinction_icon'); ?>-<?php echo get_option('tri_alert_colour'); ?>.svg" width="16" height="16" alt="" class="distinction-icon"><?php } echo get_option('tri_alert_distinction_text'); ?>
        </div><!--/content-box-distinction--><?php } ?>
    </div><!--/content-box-title-bar-->
    <div class="content-box-content">
        <div class="content-box-meta">
            <p><?php if(get_option('tri_alert_text')) { echo get_option('tri_alert_text'); } else { echo '&hellip;'; } ?></p>
            <?php if(get_option('tri_alert_button_text')) { ?><a href="<?php echo get_option('tri_alert_button_url'); ?>" <?php if(get_option('tri_alert_button_target')) { ?>target="<?php echo get_option('tri_alert_button_target'); ?>" <?php } if(get_option('tri_alert_button_rel')) { ?>rel="<?php echo get_option('tri_alert_button_rel'); ?>" <?php } ?>class="link-button primary-button"><?php echo get_option('tri_alert_button_text'); ?></a><?php if(get_option('tri_alert_link_text')) { ?><br><?php } } ?>
            <?php if(get_option('tri_alert_link_text')) { ?><a href="<?php echo get_option('tri_alert_link_url'); ?>" <?php if(get_option('tri_alert_link_target')) { ?>target="<?php echo get_option('tri_alert_link_target'); ?>" <?php } if(get_option('tri_alert_link_rel')) { ?>rel="<?php echo get_option('tri_alert_link_rel'); ?>" <?php } ?>class="arrow-link"><?php echo get_option('tri_alert_link_text'); ?></a><?php } ?>
        </div><!--/content-box-meta-->
    </div><!--/content-box-content-->
</section><!--/alert-->