<?php
/**
 * Created by PhpStorm.
 * User: coeus
 * Date: 7/1/15
 * Time: 3:53 PM
 */

namespace app\modules\books\models;

use yii\db\ActiveRecord;
use Yii;

class Book extends ActiveRecord
{
    /**
     * This is the model class for table "book".
     *
     * @property integer $id
     * @property string $title
     * @property string $author
     * @property string $isbn
     * @property string $category
     */

    public static function tableName()
    {
        return 'books';
    }

    public function rules()
    {
        return [
            [['author'], 'string', 'message' => 'Please enter alpha bets'],
            [['title', 'author', 'isbn', 'category'], 'required'],
            [['title'], 'string', 'max' => 52],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Book title'),
            'author' => Yii::t('app', 'Book author'),
            'isbn' => Yii::t('app', 'Book isbn'),
            'category' => Yii::t('app', 'Book category'),
        ];
    }
}