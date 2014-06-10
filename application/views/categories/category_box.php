<div class="category-box">
    <div class="category-box-content">
        <h2><a href="post.php?id=<?php print $category_boxes_post['post_id']; ?>"><?php print $category_boxes_post['post_title']; ?></a></h2>
        <div class="published-date">
            <?php print $category_boxes_post['post_published_date']; ?>
        </div><!-- end div.published-date -->
        <div class="main-photo">
            <a href="post.php?id=<?php print $category_boxes_post['post_id']; ?>"><img src="<?php print BASE_URL . 'public/uploads/images/' . $category_boxes_post['post_photo']; ?>.jpg" alt=""></a>
                
            <span class="photo-caption">
                <?php print $category_boxes_post['post_photo_caption']; ?> 
            </span><!-- end div.photo-caption -->
        </div><!-- end div.main-photo -->
        <div class="excerpt">
            <a href="post.php?id=<?php print $category_boxes_post['post_id']; ?>" 
               title="Sometimes I think the media live in a time warp..."><?php print $category_boxes_post['post_content']; ?></a>
        </div><!-- end div.excerpt -->
    </div><!-- end div.category-box-content -->
</div><!-- end div.category-box -->
