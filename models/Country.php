<?php
/**
 * Created by PhpStorm.
 * User: coeus
 * Date: 7/1/15
 * Time: 3:53 PM
 */

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{

    public static function tableName(){
        return 'country';
    }
}