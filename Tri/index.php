<?php get_template_part('maintenance-mode.min'); ?>
<!doctype html>
<html lang="en-GB">

<!--
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
-->

<head>
<?php get_template_part('meta'); ?>
<title>Critical Chicken &vert; Video game news, reviews, and features &num;ForTheGaymers.</title>
<?php wp_head(); ?>
</head>
<body>
    <?php get_template_part('modals'); ?>
    <div id="container">
        <header>
            <a href="https://www.criticalchicken.com"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="280" height="122" alt="Critical Chicken. &num;ForTheGaymers"></a>
        </header>
        <main>
            <aside id="sidebar">
            </aside>
            <?php if(get_option('tri_alert_enabled')=='on'){ get_template_part('alert'); } ?>
            <section id="hero" class="content-box listing-item home-listing-item" role="alert" data-sidebar>
                <div class="content-box-title-bar">
                    <span class="content-box-title" role="sectionhead">Breaking news</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-news-white.svg" width="16" height="16" alt="" class="content-box-icon">
                    <span class="content-box-slug">P5X global release</span>
                    <div class="content-box-distinction">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-topstory-blue.svg" width="16" height="16" alt="" class="content-box-icon distinction-icon">Top story
                    </div><!--/content-box-distinction-->
                </div><!--/content-box-title-bar-->
                <div class="content-box-content">
                    <a href="#" class="content-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/temp/bsky30-thumb-png.avif" width="263" height="148" alt="A picture of Claude playing Pok&eacute;mon"></a>
                    <div class="content-thumbnail-gradient"></div>
                    <div class="content-box-meta">
                        <p>Atlus to announce global release date for <b>Persona 5: The Phantom X</b> at 3pm UK time (10am PT / 7am ET) tomorrow, according to <i>Eurogamer</i>.</p>
                        <a href="https://www.criticalchicken.com/privacy" rel="external" class="link-button primary-button">Watch the live stream</a><br>
                        <a href="https://www.criticalchicken.com/privacy" rel="external me" class="arrow-link">Get LIVE reaction on Bluesky</a>
                    </div><!--/content-box-meta-->
                </div><!--/content-box-content-->
            </section><!--/hero-->
        </main>
    </div><!--/container-->
</body>
</html>
