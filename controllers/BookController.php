<?php

namespace app\controllers;

use app\models\GPModel;
use app\models\Book;
use yii\web\Controller;
use Yii;

class BookController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');

    }

    public function actionList()
    {
        $query = Book::find();
        $books = $query->orderBy('title')
            ->all();
        return $this->render('list', ['books' => $books]);
    }

    public function actionCreate()
    {
        $model = new Book;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $book = new Book();
            $book->title = $model->title;
            $book->author = $model->author;
            $book->isbn = $model->isbn;
            $book->category = $model->category;
            if ($book->save()) {
                Yii::$app->session->setFlash('BookAdded');
                Yii::$app->getResponse()->redirect(array('book/index'));
            } else {
                Yii::$app->session->setFlash('BookNotAdded');
                Yii::$app->getResponse()->redirect(array('book/index'));
            }


        } else {
            return $this->render('create', ['model' => $model]);
        }
    }

    public function actionEdit($id)
    {
        if ($id === NULL)
            throw new HttpException(404, 'Not Found');

        $model = Book::findOne($id);

        if ($model === NULL)
            throw new HttpException(404, 'Document Does Not Exist');

        if (isset($_POST['Book'])) {
            $model->title = $_POST['Book']['title'];
            $model->author = $_POST['Book']['author'];
            $model->isbn = $_POST['Book']['isbn'];
            $model->category = $_POST['Book']['category'];

            if ($model->save()) {
                Yii::$app->session->setFlash('BookEdited');
                return Yii::$app->getResponse()->redirect(array('book/detail', 'id' => $model->id));
            } else {
                Yii::$app->session->setFlash('BookNotEdited');
                return Yii::$app->getResponse()->redirect(array('book/detail', 'id' => $model->id));
            }
        }

        echo $this->render('create', array(
            'model' => $model
        ));
    }

    public function actionDetail($id)
    {
        $book = Book::findOne($id);
        echo $this->render('detail', ['book' => $book]);
    }

    public function actionDelete($id)
    {
        $book = Book::findOne($id);
        $book->delete();
        Yii::$app->session->setFlash('BookDeleted');
        return Yii::$app->getResponse()->redirect(array('book/list'));
    }

}
