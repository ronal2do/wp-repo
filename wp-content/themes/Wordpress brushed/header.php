<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <?php wp_head(); ?>
        <!-- Meta Tags -->
        <link rel="icon" type="image/ico" href="favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>
            <?php bloginfo('title'); ?>
        </title>

        <meta name="description" content="<?php bloginfo('description'); ?>" />

        <!-- Mobile Specifics -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="320" />


        <!-- Bootstrap -->
        <link href="_include/css/bootstrap.min.css" rel="stylesheet">

        <!-- Main Style -->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

        <!-- Supersized -->
        <link href="_include/css/supersized.css" rel="stylesheet">
        <link href="_include/css/supersized.shutter.css" rel="stylesheet">

        <!-- FancyBox -->
        <link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

        <!-- Font Icons -->
        <link href="_include/css/fonts.css" rel="stylesheet">

        <!-- Shortcodes -->
        <link href="_include/css/shortcodes.css" rel="stylesheet">

        <!-- Responsive -->
        <link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="_include/css/responsive.css" rel="stylesheet">

        <!-- Supersized -->
        <link href="_include/css/supersized.css" rel="stylesheet">
        <link href="_include/css/supersized.shutter.css" rel="stylesheet">

        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

        <!-- Fav Icon -->
        <link rel="shortcut icon" href="#">








</head>


<body>

    <!-- Homepage Slider -->
    <div id="home-slider">
        <div class="overlay"></div>

        <div class="slider-text">
            <div id="slidecaption"></div>
        </div>

        <div class="control-nav">
            <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
            <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
            <ul id="slide-list"></ul>

            <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
        </div>
    </div>
    <!-- End Homepage Slider -->

    <!-- Header -->
    <header>
        <div class="sticky-nav">
            <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

            <div id="logo">
                <a id="goUp" href="#home-slider" title="Go UP">Change The Game Clan</a>
            </div>

            <nav id="menu">
                <ul id="menu-nav">
                    <li class="current"><a href="#home-slider">Home</a></li>
                    <li><a href="#work">Recent Games</a></li>
                    <li><a href="#about">The TEAM</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <!-- <li><a href="shortcodes.html" class="external">Shortcodes</a></li> -->
                </ul>
            </nav>

        </div>
    </header>
    <!-- End Header -->
