<ul id="nav_home"><li><a href="<?php echo get_site_url(); ?>" class="hover-out" title="Home"></a></li></ul>
<ul id="nav_main">
<li><a href="<?php echo get_site_url(); ?>/latest" class="hover-out latest">Latest</a></li>
<li><a href="<?php echo get_site_url(); ?>/section/news" class="hover-out news">News</a></li>
<li><a href="<?php echo get_site_url(); ?>/section/features" class="hover-out features">Features</a></li>
<li><a href="<?php echo get_site_url(); ?>/section/reviews" class="hover-out reviews">Reviews</a></li>
<li><a href="<?php echo get_site_url(); ?>/explore" class="hover-out">Explore</a></li>
</ul>
<?php if(get_option('cc_timedmenu_display')=='on'){ ?><ul id="nav_timed">
<li><a href="<?php echo get_option('cc_timedmenu_url'); ?>" class="hover-out special" name="<?php $optional_class = get_option('cc_timedmenu_class'); if($optional_class != '') { echo $optional_class; } else { echo 'no-optional-class-provided'; } ?>"><?php echo get_option('cc_timedmenu_text'); ?></a></li>
</ul><?php } ?>
<div class="floated-right">
<ul id="nav_sub">
<li><a href="<?php echo get_site_url(); ?>/radar" class="hover-out">Radar</a></li>
<li><a href="<?php echo get_site_url(); ?>/about" class="hover-out">About</a></li>
<li><a href="mailto:office@criticalchicken.com" rel="me" class="hover-out">Contact</a></li>
</ul>
<ul id="nav_context">
<li class="menu"><a title="Menu" class="hover-out"></a></li>
<li class="search" aria-hidden="true"><a title="Search" rel="search" class="hover-out" aria-hidden="true"></a></li>
</ul>
</div>
<ul id="nav_iconic">
<li class="bluesky"><a href="https://bsky.app/profile/criticalchicken.com" target="_blank" title="Bluesky" rel="external me"></a></li>
<li class="discord"><a href="https://discord.gg/XtGUe4vaVm" target="_blank" title="Discord" rel="external me"></a></li>
<li class="instagram"><a href="https://www.instagram.com/criticalchicken" target="_blank" title="Instagram" rel="external me"></a></li>
<li class="ko-fi"><a href="https://ko-fi.com/criticalchicken" target="_blank" title="Ko-fi" rel="external me"></a></li>
<li class="mastodon"><a href="https://mastodon.world/@CriticalChicken" target="_blank" title="Mastodon" rel="external me"></a></li>
<li class="tumblr"><a href="https://criticalchicken.tumblr.com" target="_blank" title="Tumblr" rel="external me"></a></li>
</ul>
