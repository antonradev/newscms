<?php

// Set Project Environment
define('ENVIRONMENT', 'development');

if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'development':
            error_reporting(E_ALL);
            break;

        case 'testing':
        case 'production':
            error_reporting(0);
            break;

        default:
            exit('The application environment is not set correctly.');
    }
}

// Defining main application paths
define('BASE_URL', 'http://newscms.dev/');
define('BASE_PATH', realpath(dirname(__FILE__)));
define('APP_PATH', 'application/');
define('CLASSES_PATH', 'application/classes/');
define('VIEWS_PATH', 'application/views/');
define('DB_PATH', 'database/');

// Database connection
define('DB_HOST', 'localhost');
define('DB_USER', 'newscms');
define('DB_PASS', 'News_CMS^PasswordUSER');
define('DB_NAME', 'newscms');

/** To restrict access in files 
 * if ( ! defined('BASEPATH')) exit('Direct script access is not allowed');
 */


require_once APP_PATH . 'autoload.php';

?>