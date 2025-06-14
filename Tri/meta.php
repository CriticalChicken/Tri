<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-title" content="Critical Chicken">
<meta name="application-name" content="Critical Chicken">
<meta name="msapplication-TileColor" content="#d20202">
<meta name="msapplication-config" content="https://www.criticalchicken.com/manifest/browserconfig.xml">
<meta name="theme-color" content="#d20202">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&family=Sofia+Sans+Extra+Condensed:ital,wght@0,1..1000;1,1..1000&family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="https://www.criticalchicken.com/manifest/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.criticalchicken.com/manifest/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://www.criticalchicken.com/manifest/favicon-16x16.png">
<link rel="manifest" href="https://www.criticalchicken.com/manifest/site.webmanifest">
<link rel="mask-icon" href="https://www.criticalchicken.com/manifest/safari-pinned-tab.svg" color="#d20202">
<link rel="shortcut icon" href="https://www.criticalchicken.com/manifest/favicon.ico">
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/style.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php if(current_user_can('edit_posts')){ ?><link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/admin.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/admin.css"><?php } ?>
