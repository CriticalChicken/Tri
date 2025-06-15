<?php get_template_part('maintenance-mode'); ?><!doctype html>
<html lang="en-GB">

<!--
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
-->

<head>
<?php get_template_part('meta'); ?>
<title><?php echo single_post_title(); ?> - Critical Chicken</title>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/single.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
<?php wp_head(); ?>
</head>
<body>
<div id="container">
<?php get_template_part('header'); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div id="progress-container"<?php post_class(); ?>><div id="reading-progress"></div></div>
<main>
<section id="post-<?php the_ID(); ?>"<?php post_class('single-post full-width') ?>>
<div class="single-post-inner responsive">
<div class="titletags"><?php ctTitletag(); ?></div>
<h1><?php the_title(); ?></h1>
<div class="echo-the-content">
<?php echo the_content(); ?>
</div>

<div id="post-meta">
<h2>More like this</h2>
<?php ctTitletag(); ?>
<?php if(has_tag()) { ?><span class="post-meta-tags"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-meta-topic.png" height="15" alt=""><?php echo the_tags("Topics in this post: ", ", ", "<span class='full-stop'>.</span>"); ?></span><?php } else { ?><div class="no-tags"></div><?php } ?>
</div><!-- /post-meta -->
<?php if ( function_exists( 'yarpp_related' ) ) { yarpp_related(); } ?>
<?php if(comments_open()) : ?><a name="comments"></a><div id="the-comments">
	<div id="comment-listing">
	<h2><img src="<?php echo get_template_directory_uri(); ?>/img/icon-comments<?php comments_number("-sad-header","-header","-header"); ?>.png" width="30" height="30" alt="">This post has <?php comments_number("no comments.","1 comment.","% comments."); ?><br />Will yours be <?php comments_number("the first?","next?","next?"); ?></h2>
	<?php comment_form(); ?><?php comments_template(); ?>
	</div>
	<div id="comment-rules">
	<h3>Comment rules</h3>
	<p><img src="<?php echo get_template_directory_uri(); ?>/img/icon-comments-rule-nice.png" alt="" width="15" height="15">Keep your comments PG-13, and play nice. Don&rsquo;t spam.</p>
	<p><img src="<?php echo get_template_directory_uri(); ?>/img/icon-comments-rule-privacy.png" alt="" width="15" height="15">Read our <a href="<?php echo get_site_url(); ?>/privacy" rel="help" class="hover-out">privacy policy</a> before commenting.</p>
	<p><img src="<?php echo get_template_directory_uri(); ?>/img/icon-comments-rule-queue.png" alt="" width="15" height="15">Your comment may be held in a moderation queue before it&rsquo;s published.</p>
	<p><img src="<?php echo get_template_directory_uri(); ?>/img/icon-comments-rule-gravatar.png" alt="" width="15" height="15">Want a custom profile picture? Sign up for a free <a href="https://en.gravatar.com/" target="_blank" rel="external" class="hover-out">Gravatar</a>.</p>
	<a href="mailto:office@criticalchicken.com" class="need-help hover-out">Need help? Let us know</a>
	</div>
	<div id="comment-clearing"></div>
</div><!-- / the-comments --><?php else : ?><div id="the-lack-of-comments"></div><?php endif; ?>

</div>
</section>
</main>
<?php endwhile;endif; ?>
<nav class="bottom full-width">
<div class="responsive-rounded nav_inner">
<?php get_template_part('nav'); ?>
</div>
<div class="responsive-rounded-no-padding nav_background"></div>
</nav>
<?php get_template_part('footer'); ?>
</div>
<?php get_template_part('endscripts'); ?>
</body>
</html>
