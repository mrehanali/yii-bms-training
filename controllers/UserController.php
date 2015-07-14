<?php

namespace app\controllers;

use app\models\User;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionList()
    {
        $query = User::find();
        $users = $query->orderBy('name')
            ->all();
        return $this->render('list',['users'=>$users]);
    }

}
