<div class="page">
    <div class="container">
        <div class="content">
            <div class="content-inner">

                <div class="breadcrumb">
                    <a href="#">Home</a> &raquo; <?php echo $category->select_categories_names(); ?>
                </div><!-- end div.breadcrumb -->

                <div class="category-name category-page">
                    <h2>News in <span><?php echo $category->select_categories_names(); ?></span></h2>
                </div><!-- end div.category-name -->

                


                <?php
                $post->category_boxes();
                ?>




                <div class="clearfix"></div>
            </div><!-- end div.content-inner -->
        </div><!-- end div.content -->
        <?php
        include_once VIEWS_PATH . 'sidebar/sidebar.php';
        ?>
        <div class="clearfix"></div>
    </div><!-- end div.container -->