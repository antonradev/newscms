<div class="category-box">
    <div class="category-name">
        <?php print $category_name ?>
    </div><!-- end div.category-name -->

    <div class="category-box-content">
        <h2><a href="post.php?id=<?php print $this->current_category_posts[0]['post_id']; ?>"><?php print $this->current_category_posts[0]['post_title']; ?></a></h2>
        <div class="published-date">
            <?php print $this->current_category_posts[0]['post_published_date']; ?>
        </div><!-- end div.published-date -->
        <div class="main-photo">
            <a href="post.php?id=<?php print $this->current_category_posts[0]['post_id']; ?>"><img src="<?php print BASE_URL . 'public/uploads/images/' . $this->current_category_posts[0]['post_photo']; ?>.jpg" alt=""></a>
            <span class="photo-caption">
                <?php print $this->current_category_posts[0]['post_photo_caption']; ?>
            </span><!-- end div.photo-caption -->
        </div><!-- end div.main-photo -->
        <div class="excerpt">
            <a href="post.php?id=<?php print $this->current_category_posts[0]['post_id']; ?>" 
               title="<?php print $this->current_category_posts[0]['post_content']; ?>"><?php print $this->current_category_posts[0]['post_content']; ?></a>
        </div><!-- end div.excerpt -->
        <div class="latest-posts">
            <div class="more-publications">
                More publications in <?php print $category_name ?>
            </div>
            <ul>
                <?php
                foreach ($this->current_category_posts as $key => $post_in_list) {


                    if ($key > 0 && $key < 6) {

                        if ($post_in_list['category_id'] === $category_id) {
                            print '<li><a href="post.php?id=' . $post_in_list['post_id'] . ' " title="' . $post_in_list['post_title'] . '" >' .
                                    $post_in_list['post_title'] . '</a></li>';
                        }
                    }
                }
                ?>
            </ul>

            <a href="#" class="all-publications">All publications &raquo;</a>
            <div class="clearfix"></div>
        </div><!-- end div.latest-posts -->
    </div><!-- end div.category-box-content -->
</div><!-- end div.category-box -->