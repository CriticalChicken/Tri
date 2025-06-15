<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"><\/script>')</script>
<?php if(get_option('cc_ticker_display')=='on'){ ?><script src="<?php echo get_template_directory_uri(); ?>/js/jquery.webticker.min.js"></script><script>$('#ticker-contents').webTicker({height:'63px',duplicate:!0,rssfrequency:0,startEmpty:!0,hoverpause:!1,speed:96});</script><?php } ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<?php if(defined('LETITSNOW')) { ?><script src="<?php echo get_template_directory_uri(); ?>/js/PureSnow.js"></script><?php } ?>
<?php wp_footer();?>
