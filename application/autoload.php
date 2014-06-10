<?php

function autoload_classes($class) {
    if (file_exists(CLASSES_PATH . $class . '.php')) {
        require_once CLASSES_PATH . $class . '.php';
        return true;
    } else {
        return false;
    }
}

spl_autoload_register('autoload_classes');
?>