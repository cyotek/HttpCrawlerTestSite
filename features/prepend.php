<?php

    $currentDir = __DIR__;
    
    define('CURDIR', $currentDir . '\\');
    define('LIBDIR', dirname($currentDir) . '\\includes\\');

    require_once LIBDIR . 'functions.php';
?>