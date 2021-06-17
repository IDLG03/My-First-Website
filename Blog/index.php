<?php get_header();?>

    <div class="content-container">
        <div class="welcome-banner-container", 
            style="background-image: url(<?php echo get_theme_file_uri('/images/comp.png')?>);">
        </div>
        
        <div class="welcome-container">
            <h1 id="welcome",>Welcome to my Web Development Journal</h1>
        </div>

        
        <div id="recent-container">
            <div class="recent">
                <h1>Recent Post</h1>
            </div>
            <div id="latest">
            </div>
        </div>        
        
        <div class="posts-container">
            <?php while(have_posts()){
                the_post(); ?>                
                <div class="post">
                <div class="post-title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <hr>
                <div class="post-content">
                    
                    <?php the_content(); ?>
                    
                </div>
                
                </div>
                <?php } ?>
        </div>
        
        
    </div>
    
<?php get_footer();?>