<?php
include_once "App/iran.php" ;
spl_autoload_register(function($class){
    $class_file = __DIR__ . "/" . $class . ".php" ;
    if (!(file_exists($class_file) && is_readable($class_file)))
        die("$class Not Exists!") ;
    include_once $class_file ;
}) ;

