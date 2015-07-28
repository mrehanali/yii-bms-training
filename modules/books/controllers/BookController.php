<?php

namespace app\modules\books\controllers;

use yii\web\Controller;
use app\modules\books\models\Book;

class BookController extends Controller
{
    public $defaultAction = 'list';
    
    public function actionList(){
        $books = Book::find()->all();
        return $this->render('list', [
            'books' => $books,
        ]);
    }
    
    public function actionCreate()
    {
        $model = new Book;

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            \Yii::$app->session->setFlash('bookCreated');
            return $this->redirect(['list']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionUpdate($id)
    {
        $model = Book::findOne($id);

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            \Yii::$app->session->setFlash('bookUpdated');
            return $this->redirect(['list']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionDelete($id)
    {
        $model = Book::findOne($id);
        $model->delete();
        \Yii::$app->session->setFlash('bookDeleted');
        return $this->redirect(['list']);
    }
}