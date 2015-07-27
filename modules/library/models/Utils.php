<?php
namespace app\modules\library\models;
class Utils {
    public static function printArray($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        exit();
    }
    public static function printString($string){
        echo '<pre>';
        echo($string);
        echo '</pre>';
        exit();
    }
}