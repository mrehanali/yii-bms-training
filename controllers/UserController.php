<?php

namespace app\controllers;

use app\models\User;
use app\models\UserForm;
use yii\web\Controller;
use Yii;

class UserController extends Controller
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
        return $this->render('list', ['users' => $users]);
    }

    public function actionCreate()
    {
        $model = new UserForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $name = $model->name;
            $email = $model->email;
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->save();
            return $this->render('create', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('create', ['model' => $model]);
        }
    }

}
