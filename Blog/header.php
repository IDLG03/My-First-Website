<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        
        <?php wp_head(); ?>
    </head>
    <body>
    
    <header class="site-header">
    <div class="site-header-container">
        <div class="site-header-title">
            <h1 class="page-title",>
                <strong>My Blog</strong>
            </h1>
        </div>
        <div class="site-header-menu">
            <nav class="main-navigation">
                <a class="navi">
                <a href="<?php echo site_url('')?>">Home</a> |
                <a href="<?php echo site_url('/web-development')?>">About Web Development</a> |
                <a href="<?php echo site_url('/about-us')?>">About Us</a> |   
                <?php if (current_user_can('administrator')) : ?>
                <a href="<?php echo site_url('/post')?>">Post</a> |                
                <?php endif; ?>
                </a>
            </nav>        
        </div>
    </div>
    </header>