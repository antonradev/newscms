<?php

/**
 * NewsCMS
 *
 * Content Management System for News web project. 
 *
 * @package		NewsCMS
 * @author		Anton Radev
 * @copyright	Copyright (c) 2014, Anton Radev
 * @license		http://opensource.org/licenses/MIT
 * @link		http://
 * @since		Version 0.1
 */
// ------------------------------------------------------------------------
// Including configurations

include_once './config.php';


$page_id = $_GET['id'];

$database = new Database();

$database->query("SELECT * from pages WHERE page_id = '$page_id'");


$page = new Page();
$page->build_page();
?>