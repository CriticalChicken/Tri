<?php /* Template Name: V2 Polls */ ?>
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
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/poll-archive.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/poll-archive.css">
<?php wp_head(); ?>
</head>
<body>
<div id="container">
<?php get_template_part('header'); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<main>
<section id="post-<?php the_ID(); ?>"<?php post_class('single-post full-width') ?>>
<div class="single-post-inner responsive">
<h1 class="page-header <?php echo get_post_field('post_name', get_post()); ?>"><span></span><?php the_title(); ?></h1>
<div class="poll-archive">
<?php echo the_content(); ?>
</div>
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
