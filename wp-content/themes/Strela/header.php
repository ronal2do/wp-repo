<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        <?php wp_title(''); ?>
    </title>
    <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
</head>

<body class="body" <?php body_class();?> background="<?php echo get_template_directory_uri(); ?>/img/background.png">
<nav>
   <div>
      <a href="<?php echo get_site_url(1); ?>">Home Page </a>
   </div>
    <div>
    <a href="<?php echo get_site_url(3); ?>/index.php/contact">Contact </a>
    </div>
    
</nav>