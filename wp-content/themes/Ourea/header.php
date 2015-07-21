<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Meta Tag 
        <link rel="icon" type="image/ico" href="favicon.ico" />-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>
        <?php bloginfo('title'); ?>
    </title>

    <meta name="description" content="<?php bloginfo('description'); ?>" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
</head>
<body>
<!--
###############################
###############################
########     NAVBAR
###############################
###############################
-->

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>">TechTalks</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul id="menu" class="nav navbar-nav">
            <li onmouseover="hoverFunctionIn(this)" onmouseout="hoverFunctionOut(this)"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li onmouseover="hoverFunctionIn(this)" onmouseout="hoverFunctionOut(this)"><a href="index.php?page_id=16">Mobile</a></li>
            <li onmouseover="hoverFunctionIn(this)" onmouseout="hoverFunctionOut(this)"><a href="index.php?page_id=18">Electric Vehicles</a></li>
            <li onmouseover="hoverFunctionIn(this)" onmouseout="hoverFunctionOut(this)"><a href="index.php?page_id=20">Science</a></li>
            <li onmouseover="hoverFunctionIn(this)" onmouseout="hoverFunctionOut(this)"><a href="index.php?page_id=22">Apps</a></li>
            <li onmouseover="hoverFunctionIn(this)" onmouseout="hoverFunctionOut(this)" class="dropdown"><a href="index.php?page_id=24">Web</a></li>
      </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<script>
    var navColors = ["#EF6745" , "#FEC65E", "#7AC8A4", "#4CC2D9", "#93658D", "#d2e663"];
    function hoverFunctionIn(x){
        Color = x.style.borderBottomColor;
        x.style.backgroundColor = Color;
    }
    function hoverFunctionOut(x){
        x.style.backgroundColor = "inherit";
    }
    var current = "<?php wp_title(); ?>";
    current = current.slice(9);
    x = document.getElementById("menu").getElementsByTagName("li");
    for(var i = 0; i < x.length; i++){
         
        x[i].style.borderBottom ="6px solid " + navColors[i];
    }
</script>