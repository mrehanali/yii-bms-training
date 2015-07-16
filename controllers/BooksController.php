<?php

namespace app\controllers;

class BooksController extends \yii\web\Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionDestroy()
    {
        return $this->render('destroy');
    }

    public function actionEdit()
    {
        return $this->render('edit');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShow()
    {
        return $this->render('show');
    }

    public function actionStore()
    {
        return $this->render('store');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
