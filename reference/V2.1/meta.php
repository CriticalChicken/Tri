<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-title" content="Critical Chicken">
<meta name="application-name" content="Critical Chicken">
<meta name="msapplication-TileColor" content="#d20202">
<meta name="msapplication-config" content="<?php echo get_site_url(); ?>/manifest/browserconfig.xml">
<meta name="theme-color" content="#d20202">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_site_url(); ?>/manifest/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_site_url(); ?>/manifest/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_site_url(); ?>/manifest/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_site_url(); ?>/manifest/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_site_url(); ?>/manifest/safari-pinned-tab.svg" color="#d20202">
<link rel="shortcut icon" href="<?php echo get_site_url(); ?>/manifest/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&subset=latin-ext&display=swap" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/js/balancetext.min.js"></script>
<script type="text/javascript">balanceText();</script>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/style.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php if(get_option('cc_ticker_display')=='on'){ ?><link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/ticker.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ticker.css"><?php } ?>
<?php if(current_user_can('edit_posts')){ ?><link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/admin.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/admin.css"><?php } ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/ityped.min.js"></script>
