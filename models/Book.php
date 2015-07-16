<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property integer $id
 * @property string $title
 * @property string $author
 * @property string $isbn
 * @property integer $category
 * @property string $created_at
 * @property string $updated_at
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @Description:    This function is to set table name for Model
     * @Return:         A string, table name
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @Description:    This is set of rule applied to books table
     * @Return:         An array of rules
     */
    public function rules()
    {
        return [
            [['title', 'author', 'isbn', 'category'], 'required'],  //Required Fields
            [['category'], 'integer'],                              //Should be a valid integer
            [['created_at', 'updated_at'], 'safe'],                 //Good to go (No validation required)
            [['title', 'author'], 'string', 'max' => 200],          //Strings with max 200 characters
            [['isbn'], 'string', 'max' => 17]                       //ISBN is maximum 17 characters including dashes
        ];
    }

    /**
     * @Description:    This is set of labels for books table columns
     * @Return:         An array of labels
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Book Title',
            'author' => 'Author Name',
            'isbn' => 'ISBN Number',
            'category' => 'Book Category',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
