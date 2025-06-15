<section id="search-box">
<div id="search-box-inner">
<span class="search-title" aria-hidden="true">Search&nbsp;</span><span class="search-title2">for&nbsp;</span><span id="ityped" aria-hidden="true"></span>
<div id="search-box-gubbins">
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo site_url(); ?>/"><div><label class="screen-reader-text" for="s">Search for:</label><input type="text" name="s" id="s" /><input type="hidden" value="post" name="post_type" id="post_type"/><input type="submit" value="Search" title="Search" id="ss"/></div></form>
</div>
<div id="search-box-close-button" title="Close"></div>
</div>
</section>
<header class="full-width"><div id="header_inner" class="responsive"><a href="<?php echo get_site_url(); ?>" title="Home" class="hover-out"></a><span class="lgbtcal-text">International Transgender Day of Visibility &ndash; Sunday, 31st March</span></div></header>
<nav class="top full-width">
<div class="responsive-rounded nav_inner">
<?php get_template_part('nav'); ?>
</div>
<div class="responsive-rounded-no-padding nav_background"></div>
</nav>
<noscript class="full-width"><div id="noscript_inner" class="responsive-rounded-no-padding">Our website doesn&rsquo;t work without JavaScript. <a href="https://www.enablejavascript.io/en" target="_blank" rel="external help" class="hover-out">Find out how to enable it</a> (and why you should).</div></noscript>
<?php if(get_option('cc_ticker_display')=='on'){ ?><section id="ticker" class="full-width">
<div id="ticker_inner" class="responsive-rounded-no-padding">
<div id="ticker_top-layer">
<?php if(get_option('cc_ticker_link')!=""){ ?><a href="<?php echo get_option('cc_ticker_link'); ?>"></a><?php } ?><span class="titletag"><img src="<?php tkSpecialTitletag(); ?>" height="32" alt="<?php tkAlt(); ?>"></span>
</div>
<div id="ticker_bottom-layer"><ul id="ticker-contents"><?php tickerContents(); ?></ul></div>
</div>
</section><?php } ?>
