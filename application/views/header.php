<body>

    <header>
        <div class="header-inner">
            <div class="user-area">
                <a href="#">Sign Up</a>
                |
                <a href="#">Log in</a>
                <div class="rss">
                    <a href="#"><span class="fa fa-rss"></span>RSS</a>
                </div><!-- end div.rss -->
                <div class="clearfix"></div>
                <div class="search-area">
                    <form action="" method="post">
                        <input type="text"><input type="submit" value="Search">
                    </form>
                </div><!-- end div.search-area -->
                <div class="clearfix"></div>
            </div><!-- end div.user-area -->
            <div class="logo">
                <h1><span class="fa fa-globe"></span> News CMS</h1>
            </div>
            <div class="project-description">
                <span>News CMS project, written in PHP</span>
            </div><!-- end div.project-description -->
        </div>
        <div class="top-navigation-wrapper">

            <nav class="categories">
                <ul>
                    <li><a href="http://newscms.dev/">Home</a></li>
                    <?php
                        $category->build_category_menu();
                    ?>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div><!-- end div.top-navigation-wrapper -->

    </header>
