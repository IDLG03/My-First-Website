<?php 
/*
    Template Name: New Post
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
            <h2>Add New Post</h2>                            
        </div>

        <div class="page-content">            
            <div class="new-post">
				<input type="text" name="title" placeholder="Title">
				<textarea name="content" placeholder="Content"></textarea>
				<button id="post">Create Post</button>
			</div>
        
        </div>
    </div>
</div>

<?php get_footer(); ?>