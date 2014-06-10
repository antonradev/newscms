<?php

include_once './config.php';


$category = new Category();

$post = new Post();

require_once VIEWS_PATH . 'head.php';
require_once VIEWS_PATH . 'header.php';
require_once VIEWS_PATH . '/categories/category_container.php';


require_once VIEWS_PATH . 'footer.php';
?>