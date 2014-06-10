<div class="featured-publication">
    
    <h1><a href="#"><?php print $post_featured['post_title']; ?></a></h1>
    <div class="published-date">
        <?php print $post_featured['post_published_date']; ?>
    </div><!-- end div.published-date -->
    <div class="main-photo">
        <a href="#"><img src="<?php print BASE_URL . 'public/uploads/images/' .$post_featured['post_photo']; ?>.jpg" alt=""></a>
        <span class="photo-caption">
            <?php print $post_featured['post_photo_caption']; ?>
        </span><!-- end div.photo-caption -->
    </div><!-- end div.main-photo -->
    <div class="excerpt">
        <a href="#" 
           title="Sometimes I think the media live in a time warp..."><?php print $post_featured['post_content']; ?></a>
    </div><!-- end div.excerpt -->
</div><!-- end div.featured-publication -->