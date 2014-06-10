<div class="sidebar">
    <div class="sidebar-inner">
        <div class="latest-posts">
            <h3>Latest Publications</h3>
            <nav>
                <ul>
                    <?php
                    $sidebar = new Sidebar();
                    $sidebar->show_latests();
                    ?>
                </ul>
            </nav> 
        </div><!-- end div.latest-posts -->
    </div><!-- end div.sidebar-inner -->
</div><!-- end div.sidebar -->