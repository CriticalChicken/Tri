<?php get_template_part('maintenance-mode'); ?><!doctype html>
<html lang="en-GB">

<!--
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
-->

<head>
<?php get_template_part('meta'); ?>
<title>Posts by <?php the_author(); ?> - Critical Chicken</title>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/listing.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/listing.css">
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/single.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
<?php wp_head(); ?>
</head>
<body>
<div id="container">
<?php get_template_part('header'); ?>
<main>
<section class="listing full-width <?php the_author_meta('user_login'); ?>">
<div class="listing_inner responsive">
<h1 class="author-header"><?php writer_page_avatar(); ?>Posts by <?php the_author(); ?></h1>
<?php get_template_part('sidebar'); ?>
<?php get_template_part('listing'); ?>
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
</div>
<?php get_template_part('endscripts'); ?>
</body>
</html>
