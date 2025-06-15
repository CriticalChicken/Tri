<?php get_template_part('maintenance-mode'); ?><!doctype html>
<html lang="en-GB">

<!--
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
-->

<head>
<?php get_template_part('meta'); ?>
<title><?php if(get_search_query() != '') { ?>Search results for &ldquo;<?php the_search_query(); ?>&rdquo;<?php } else { ?>Awkward&hellip;<?php } ?> - Critical Chicken</title>
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
<section class="listing full-width <?php echo get_queried_object()->slug; ?>">
<div class="listing_inner responsive">
<h1 class="tag-header search"><?php if(get_search_query() != '') { ?><img src="<?php echo get_template_directory_uri(); ?>/img/sections/search-header.png" width="30" height="30" alt="">Search results for &ldquo;<?php the_search_query(); ?>&rdquo;<?php } else { ?><img src="<?php echo get_template_directory_uri(); ?>/img/sections/blank-search-header.png" width="30" height="30" alt="" class="ha-ha">Did you think something funny would happen if you sent us an empty search box?<?php } ?></h1>
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
