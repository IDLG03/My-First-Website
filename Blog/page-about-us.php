<?php 
/*
    Template Name: About Us
*/
?>
<?php get_header(); ?>

<div class="content-container">        
    <div class="page-banner-container", 
        style="background-image: url(<?php echo get_theme_file_uri('/images/web.png')?>);">
    </div>
    
    <div class="posts-container-page">
        <div class="back-btn">
            <a class="back-btn-txt", href="<?php echo site_url('') ?>">Go Home</a>
        </div>
        <div class="page-content-title">
            <h2>About Us</h2>                            
        </div>

        <div class="page-content-aboutme">            
            <div class="profile", 
                style="background-image: url(<?php echo get_theme_file_uri('/images/profile.png')?>);">
            </div>
            
            <h1 class="form">Name:</h1>
			<a class="detail", href="https://www.facebook.com/profile.php?id=100004627815080", target="_blank">Ian Dhanel L. Guico</a>
		
            <h1 class="form">Course:</h1>
            <p class="detail">BS Computer Engineering</p>
            
            <h1 class="form">Company:</h1>
            <a class="detail", href="https://decodetokyo.com/", target="_blank">decode Inc.</a>            
        
        </div>
    </div>
</div>

<?php get_footer(); ?>