<?php

namespace app\controllers;

use app\models\GPModel;
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

    public function actionCreate($id = null)
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
            return $this->render('create', ['model' => $model]);
        }
    }

    public function actionDelete($id = null)
    {
        if ($id === NULL) {
            Yii::$app->session->setFlash('UserDeletedError');
            Yii::$app->getResponse()->redirect(array('user/index'));
        }

        $user = User::findOne($id);


        if ($user === NULL) {
            Yii::$app->session->setFlash('UserDeletedError');
            Yii::$app->getResponse()->redirect(array('user/index'));
        }

        $user->delete();

        Yii::$app->session->setFlash('UserDeleted');
        Yii::$app->getResponse()->redirect(array('user/index'));
    }

    public function actionEdit($id = null)
    {

        if ($id === NULL)
            throw new HttpException(404, 'Not Found');

        $model = User::findOne($id);

        if ($model === NULL)
            throw new HttpException(404, 'Document Does Not Exist');

        if (isset($_POST['User'])) {
            $model->name = $_POST['User']['name'];
            $model->email = $_POST['User']['email'];

            if ($model->save())
                return Yii::$app->getResponse()->redirect(array('user/detail','id'=>$model->id));
        }

        echo $this->render('create', array(
            'model' => $model
        ));
    }

    public function actionDetail($id)
    {
        $user = User::findOne($id);
        echo $this->render('detail', ['user' => $user]);
    }

}
