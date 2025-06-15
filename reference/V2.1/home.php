<?php /* Template Name: V2 Home */ ?>
<?php get_template_part('maintenance-mode'); ?><!doctype html>
<html lang="en-GB">

<!--
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
-->

<head>
<?php if(date('n') == 12) { define("LETITSNOW", 1); } else if(date('n') == 1 && date('j') <= 5) { define("LETITSNOW", 1); } ?>
<?php get_template_part('meta'); ?>
<title>Critical Chicken - Video game news, features, and reviews #ForTheGaymers</title>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/home.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
<?php wp_head(); ?>
</head>
<body>
    <div id="container">
        <?php get_template_part('header'); ?>
        <main>
            <section id="jumbotron-outer" class="full-width <?php echo get_option('cc_jumbotron_color_field'); ?>">
                <div id="jts-left" class="jts"><div id="jts-left-top-corner" class="jts-corner"></div><div id="jts-left-bottom-corner" class="jts-corner"></div></div>
                <div id="jts-right" class="jts"><div id="jts-right-top-corner" class="jts-corner"></div><div id="jts-right-bottom-corner" class="jts-corner"></div></div>
                <div id="jts-shadow"></div>
                <?php if(defined('LETITSNOW')) { ?><div id="snow"></div><?php } ?>
                <div class="bg"></div>
                <div class="bg bg2"></div>
                <div class="bg bg3"></div>
                <?php if(get_option('cc_jumbotron_link')!=''){ ?><div id="jumbotron-link"><a href="<?php echo get_option('cc_jumbotron_link'); ?>" class="full-width"></a></div><!-- /jumbotron-link --><?php } ?>
                <div id="jumbotron-inner" class="responsive">
                    <div id="jumbotron-text">
                    <?php if(get_option('cc_jumbotron_titletag1_special')!='none'){ ?><span class="titletag<?php if(get_option('cc_jumbotron_titletag1_special')=='ace-attorney'){ ?> ace-attorney<?php } ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/titletags/jumbotron/<?php echo get_option('cc_jumbotron_titletag1_special'); jtSpecialTitletag(); ?>" height="32" alt="<?php jtSpecialAlt(); ?>"></span><?php } jtIcon(); ?><img src="<?php echo get_template_directory_uri(); ?>/img/titletags/jumbotron/<?php echo get_option('cc_jumbotron_titletag2_type'); ?>.png" height="32" alt="<?php jtMainAlt(); ?>"></span>
                        <span><?php echo get_option('cc_jumbotron_text'); ?></span>
                    </div><!--/jumbotron-text-->
                    <div id="jumbotron-image"><img src="<?php echo get_option('cc_jumbotron_image'); ?>" alt="<?php echo get_option('cc_jumbotron_alt'); ?>" width="540" height="304"></div>
                </div><!--/jumbotron-inner-->
            </section><!--/jumbotron-outer-->
            <section class="home_listing listing upper full-width">
                <div class="home_listing-inner responsive">
                    <h1 class="context-title">Posts we think you&rsquo;ll like</h1>
                    <div id="posts-container-upper">
                    <?php query_posts('cat=35&posts_per_page=6&offset=0'); if(have_posts()):while(have_posts()):the_post(); ?>
                    <div id="post-<?php the_ID(); ?>"<?php post_class('homepage-post') ?>>
                    <a href="<?php echo the_permalink(); ?>" class="thumb-link"><img src="<?php ccThumbHandler(); ?>" alt="<?php ccThumbAlt(); ?>" width="352" height="198"></a>
                    <?php ctTitletag(); ?>
                    <span class="homepage-post-title"><a href="<?php echo the_permalink(); ?>" class="hover-out"><?php the_title(); ?></a></span>
                    <?php if(comments_open()){ ?><span class="comment-count"><a href="<?php comments_link(); ?>"><?php comments_number("No comments","1 comment","% comments"); ?></a></span><?php } ?>
                    </div>
                    <?php endwhile;endif; ?>
                    </div><!-- /posts-container-upper -->
                </div>
            </section>
            <section id="not-sidebar" class="full-width">
                <div id="not-sidebar-inner">
                    <div id="not-sidebar-left">
                        <div id="chickenfeed-top-arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-chickenfeed.png" alt="" width="30" height="30">
                        </div><div id="chickenfeed-bottom-arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-chickenfeed.png" alt="" width="30" height="30">
                        </div>
                        <h2>ChickenFeed</h2>
                        <span class="markets">Your look at the gaming markets for <?php echo date('l, jS F'); ?></span>
                        <div class="not-sidebar-wrapper">
                            <div class="<?php echo get_option('cc_chickenfeed_sentiment1'); ?>">
                                <span class="symbol"><?php echo get_option('cc_chickenfeed_symbol1'); ?></span><span><?php if(get_option('cc_chickenfeed_sentiment1')=='red'){ echo '-'; echo numChange(); }else if(get_option('cc_chickenfeed_sentiment1')=='green'){ echo '+'; echo numChange(); } else { echo '&pm;0.00'; } ?></span>
                                <span class="main"><?php echo get_option('cc_chickenfeed_name1'); ?></span>
                                <span><?php echo get_option('cc_chickenfeed_blurb1'); ?></span>
                                <?php if(get_option('cc_chickenfeed_linkurl1')!=''){ ?><span class="link"><a href="<?php echo get_option('cc_chickenfeed_linkurl1'); ?>" class="hover-out"><?php echo get_option('cc_chickenfeed_linktext1'); ?></a></span><?php } ?>
                            </div>
                            <div class="<?php echo get_option('cc_chickenfeed_sentiment2'); ?>">
                                <span class="symbol"><?php echo get_option('cc_chickenfeed_symbol2'); ?></span><span><?php if(get_option('cc_chickenfeed_sentiment2')=='red'){ echo '-'; echo numChange(); }else if(get_option('cc_chickenfeed_sentiment2')=='green'){ echo '+'; echo numChange(); } else { echo '&pm;0.00'; } ?></span>
                                <span class="main"><?php echo get_option('cc_chickenfeed_name2'); ?></span>
                                <span><?php echo get_option('cc_chickenfeed_blurb2'); ?></span>
                                <?php if(get_option('cc_chickenfeed_linkurl2')!=''){ ?><span class="link"><a href="<?php echo get_option('cc_chickenfeed_linkurl2'); ?>" class="hover-out"><?php echo get_option('cc_chickenfeed_linktext2'); ?></a></span><?php } ?>
                            </div>
                    </div>
                    </div><!--/not-sidebar-left-->
                    <div id="not-sidebar-middle">
                        <h3><a href="https://bsky.app/profile/criticalchicken.com" target="_blank" rel="external me" class="hover-out">Follow us on Bluesky</a></h3>
                        <iframe width="352" src="<?php echo get_template_directory_uri(); ?>/bluesky-feed.php" frameborder="0"></iframe>
                    </div><!--/not-sidebar-middle-->
                    <div id="not-sidebar-right">
                        <h3>We did the math(s)</h3>
                        <div class="fact-and-figure"><span class="text">Days we&rsquo;ve spent waiting for <b>Ace&nbsp;Attorney&nbsp;7</b>:</span><span class="big-number since-soj"><?php echo do_shortcode('[DateCounter startDate="2016-09-08" endDate="now" format="%a"]'); ?></span></div>
                        <div class="fact-and-figure"><span class="text">Cost of the entire <b>Sims&nbsp;4</b> collection (so far) on EA&rsquo;s store:</span><span class="big-number">&pound;982</span></div>
                        <div class="fact-and-figure"><span class="text">Avg. mainline <b>Pok&eacute;mon</b> games per year since 1996:</span><span class="big-number"><?php pkmnAvg(); ?></span></div>
                        <?php if ( function_exists( 'vote_poll' ) && ! in_pollarchive() ): ?>
                            <li class="poll-area">
                                <h3>This week&rsquo;s poll</h3>
                                <ul>
                                    <li><?php get_poll();?></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </div><!--/not-sidebar-right-->
                    <br>
                </div><!--/not-sidebar-inner-->
            </section>
            <section class="home_listing listing lower full-width">
                <div class="home_listing-inner responsive">
                    <div id="posts-container-lower">
                    <?php query_posts('cat=35&posts_per_page=6&offset=6'); if(have_posts()):while(have_posts()):the_post(); ?>
                    <div id="post-<?php the_ID(); ?>"<?php post_class('homepage-post') ?>>
                    <a href="<?php echo the_permalink(); ?>" class="thumb-link"><img src="<?php ccThumbHandler(); ?>" alt="<?php ccThumbAlt(); ?>" width="352" height="198"></a>
                    <?php ctTitletag(); ?>
                    <span class="homepage-post-title"><a href="<?php echo the_permalink(); ?>" class="hover-out"><?php the_title(); ?></a></span>
                    <?php if(comments_open()){ ?><span class="comment-count"><a href="<?php comments_link(); ?>"><?php comments_number("No comments","1 comment","% comments"); ?></a></span><?php } ?>
                    </div>
                    <?php endwhile;endif; ?>
                    </div><!--/posts-container-lower-->
                </div>
            </section>
        </main>
        <nav class="bottom full-width">
            <div class="responsive-rounded nav_inner">
                <?php get_template_part('nav'); ?>
            </div>
            <div class="responsive-rounded-no-padding nav_background"></div>
        </nav>
        <?php get_template_part('footer'); ?>
    </div><!--/container-->
<?php get_template_part('endscripts'); ?>
</body>
</html>
