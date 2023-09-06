<?php

class student {
    private $name;

    private static function info($fname,$lname){
        echo "This is static method";
    }
   static function __callStatic($mathod,$arg){
        if(method_exists(__class__,$mathod)){
            call_user_func_array([__class__, $mathod], $arg);
        }else{
                       echo "Method not found ".$arg;
        }
    }
}


student::info("fhim","sadnan")
?>