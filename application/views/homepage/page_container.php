<div class="page">
    <div class="container">
        <div class="content">
            <div class="content-inner">
                <?php
                $post->show_featured_post();
                ?>
                <?php
                
                $post->category_box("1", "World");
                $post->category_box("2", "Politics");
                $post->category_box("3", "Culture");
                $post->category_box("4", "Technologies");
                $post->category_box("5", "Sports");
                $post->category_box("6", "Art");

                ?>
                <div class="clearfix"></div>
            </div><!-- end div.content-inner -->
        </div><!-- end div.content -->
        <?php
        include_once VIEWS_PATH . 'sidebar/sidebar.php';
        ?>
        <div class="clearfix"></div>
    </div><!-- end div.container -->