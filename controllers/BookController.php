<?php

namespace app\controllers;
use app\models\Utils;
use app\models\Book;
use yii\web\Controller;
use Yii;

class BookController extends Controller
{
    public function actionCreate()
    {
        $bookModel = new Book;
        if ( isset(Yii::$app->params['bookCategories']) )
            $categories = Yii::$app->params['bookCategories'];
        if ($bookModel->load(Yii::$app->request->post()) && $bookModel->validate()) {
            $nbook = new Book();
            $nbook->title = $bookModel->title;
            $nbook->author = $bookModel->author;
            $nbook->isbn = $bookModel->isbn;
            $nbook->category_id = $bookModel->category_id;
            if ($nbook->save()) {
                Yii::$app->getResponse()->redirect(array('book/index'));
            } else {
                Yii::$app->getResponse()->redirect(array('book/index'));
            }
        } else {
            return $this->render('create', ['bookModel' => $bookModel, 'categories' => $categories]);
        }
    }
    public function actionDestroy($id)
    {
        if ($id === NULL)
            throw new HttpException(404, 'Resource Not Found');
            $bookModel = Book::findOne($id);
        if ($bookModel === NULL)
            throw new HttpException(404, 'Document Not Found');
        $book = Book::findOne($id);
        if ($book->delete()) {
            Yii::$app->getResponse()->redirect(array('book/index'));
        } else {
            Yii::$app->getResponse()->redirect(array('book/index'));
        }
    }
    public function actionEdit($id)
    {
        if ($id === NULL)
            throw new HttpException(404, 'Resource Not Found');
            $bookModel = Book::findOne($id);
        if ($bookModel === NULL)
            throw new HttpException(404, 'Document Not Found');
        if ( isset(Yii::$app->params['bookCategories']) )
            $categories = Yii::$app->params['bookCategories'];

        if (isset($_POST['Book'])){
            $bookModel->title = $_POST['Book']['title'];
            $bookModel->author = $_POST['Book']['author'];
            $bookModel->isbn = $_POST['Book']['isbn'];
            $bookModel->category_id = $_POST['Book']['category_id'];
            $bookModel->updated_at = date('Y-m-d H:i:s');
            if ($bookModel->save()) {
                Yii::$app->getResponse()->redirect(array('book/index'));
            } else {
                Yii::$app->getResponse()->redirect(array('book/index'));
            }
        } else {
            return $this->render('create', ['bookModel' => $bookModel, 'categories' => $categories]);
        }
    }
    public function actionIndex()
    {
        if ( isset(Yii::$app->params['bookCategories']) )
            $categories = Yii::$app->params['bookCategories'];
        $query = Book::find();
        $books = $query->orderBy('title')->all();
        return $this->render('index', ['books' => $books, 'categories' => $categories]);
    }
    public function actionShow($id)
    {
        if ( isset(Yii::$app->params['bookCategories']) )
            $categories = Yii::$app->params['bookCategories'];
        $book = Book::findOne($id);
        return $this->render('show', ['book' => $book, 'categories' => $categories]);
    }
}