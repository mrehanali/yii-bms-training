<?php
/**
 * Created by PhpStorm.
 * User: coeus
 * Date: 7/15/15
 * Time: 10:28 AM
 */

namespace app\models;


class GPModel {
    public static function printArray($arr){
        echo '<pre>';
        var_dump($arr);
        die;
    }
    public static function printString($str){
        echo '<pre>';
        echo $str;
        die;
    }
}