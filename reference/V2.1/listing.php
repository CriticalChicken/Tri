<div id="listing-container">
<?php if(have_posts() && (!is_search() || get_search_query() != '')):while(have_posts()):the_post(); ?>
<div class="a-listing-post">
<div class="thumbnail-and-headline">
<span class="listing-post-title"><a href="<?php echo the_permalink(); ?>" class="hover-out"><?php the_title(); ?></a></span>
<a href="<?php echo the_permalink(); ?>" class="thumb-link"><img src="<?php ccThumbHandler(); ?>" alt="<?php ccThumbAlt(); ?>" width="224" height="126"></a><div class="listing-stats"><span class="date"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-listing-info-date.png" width="12" height="12" alt=""><?php echo get_the_date("j M Y"); ?></span><?php if(comments_open()){ ?><span class="comments"><a href="<?php comments_link(); ?>" class="hover-out"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-listing-info-comments.png" width="12" height="12" alt=""><?php comments_number("No comments","1 comment","% comments"); ?></a></span><?php } ?><span class="author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author" class="hover-out"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-listing-info-author.png" width="12" height="12" alt=""><?php the_author(); ?></a></span><span class="excerpt"><?php echo the_excerpt(); ?></span></div>
</div>
<div class="titletags"><?php ctTitletag(); ?></div>
</div>
<?php endwhile;else: ?>
<?php if(is_search()) { if(get_search_query() != '') { get_template_part("no-results-found"); } else { get_template_part("blank-search"); } } else { get_template_part("no-posts-found"); } ?>
<?php endif; ?>
<div id="pagenavi-wrapper">
<?php if(!is_search() || get_search_query() != '') { wp_pagenavi(); } ?>
</div>
</div>
</div>
