<section id="sidebar">
<?php $thisCategory = get_queried_object()->slug; if($thisCategory != 'best-of') { ?><div id="section-info">
<h2>One of our best</h2>
<?php query_posts(array(
'orderby' => 'rand', 
'category_name' => 'best-of', 
'posts_per_page' => 1
)); 
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="one-of-our-best"<?php post_class('homepage-post') ?>>
<a href="<?php echo the_permalink(); ?>" class="thumb-link"><img src="<?php ccThumbHandler(); ?>" alt="<?php ccThumbAlt(); ?>" width="352" height="198"></a>
<?php ctTitletag(); ?>
<span class="homepage-post-title"><a href="<?php echo the_permalink(); ?>" class="hover-out"><?php the_title(); ?></a></span>
<?php if(comments_open()){ ?><span class="comment-count"><a href="<?php comments_link(); ?>"><?php comments_number("No comments","1 comment","% comments"); ?></a></span><?php } else { ?><span class="no-comment-count"></span><?php } ?>
</div>
<?php endwhile; endif; wp_reset_query(); ?>
</div><?php } else { echo '<div id="already-viewing-best-of"></div>'; } ?>
<?php moreInThisSection(); ?>
<div id="top-comments">
<h2><img src="<?php echo get_template_directory_uri(); ?>/img/sections/comments-icon.png" alt="" width="23" height="23">Latest comments</h2>
<?php echo do_shortcode('[better_recent_comments format="{date}{avatar}{author}{post}{comment}" number="3" date_format="j M Y" avatar_size="32"]'); ?>
</div>
<div id="sidebar-spacer"></div>
</section>
