<?php
/**
 * User: egorov
 * Date: 13.02.15
 * Time: 9:50
 */
?>

<!DOCTYPE html>
<html>
<head>
    <link href="<?php bloginfo('template_url'); ?>/css/grid.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/fonts/fonts.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/fonts/kelson.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
    <meta charset="utf-8" />
    <title><?php wp_title(); bloginfo('name');  ?></title>
    <?php wp_head(); ?>
    <?php show_admin_bar( true ); ?>
</head>
<body class="np nm">
<div class="container">
    <header>
        <?php if(is_front_page()) {?>
        <div class="row bg_color">
            <div class="col-xs-12 acenter video np">
                <video autoplay loop muted id="head_video" >
                    <source src="<?php bloginfo('template_url'); ?>/video/head720.mp4" type="video/mp4">
                </video>
                <div class="controls">
                    <div class="center_logo"></div>
                    <div class="sound s_t" onclick="mute_head_video(this)">ЗВУК ВКЛ</div>
                    <div class="scroll s_t" onclick="scrollTopage_start()">ЛИСТАЙ НИЖЕ!</div>
                </div>
            </div>
        </div>
        <?php } ?>
            <div class="row bg_color"  id="main-menu">
                <div class="col-xs-5 acenter">
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Анжрей Пределин" class="logo"></a>
                </div>
                <div class="col-xs-7">
                    <nav>
                        <?php wp_nav_menu( array( 'container' => '',"menu_id"=>"test" ) ); ?>
                    </nav>
                </div>
            </div>


    </header>
	<div id="page_start"></div>
	<div class="row">
        <div class="col-xs-12 content">
