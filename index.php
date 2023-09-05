<?php 

function myAutoloader($className) {
    $classFile =  'autoLoad/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once($classFile);
    }
}

spl_autoload_register('myAutoloader');



$obj = new person();
$obj2 = new product();


?>