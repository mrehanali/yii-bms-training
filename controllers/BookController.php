<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Book;

class BookController extends Controller
{
    public $defaultAction = 'list';
    
    public function actionList(){
        $books = Book::find()->all();
        return $this->render('list', [
            'books' => $books,
        ]);
    }
}