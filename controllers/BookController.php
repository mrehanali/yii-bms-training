<?php

namespace app\controllers;
use app\models\Utils;
use app\models\Book;
use yii\web\Controller;
use Yii;

class BookController extends Controller
{
    public $defaultAction = 'index';
    private function categoriesList()
    {
        if ( isset(Yii::$app->params['bookCategories']) )
            return Yii::$app->params['bookCategories'];
    }
    // $this->makeResponse(['error', 'There is some error while creating new record']);
    private function makeResponse(array $values)
    {
        Yii::$app->session->setFlash('notification');
        Yii::$app->session->setFlash('message', $values[0]);
        Yii::$app->session->setFlash('status', $values[1]);
        return true;
    }
    private function getResponse()
    {
        $message = Yii::$app->session->getFlash('message');
        $status = Yii::$app->session->getFlash('status');
        return $notification = ['status' => $status, 'message' => $message];
    }

    public function actionIndex()
    {
        $categories = $this->categoriesList();
        $query = Book::find();
        $books = $query->orderBy('title')->all();
        $notification = $this->getResponse();
        print_r($notification); exit();
        return $this->render('index', ['books' => $books, 'categories' => $categories, 'notification' => $notification]);
    }
    public function actionCreate()
    {
        $bookModel = new Book;
        if ($bookModel->load(Yii::$app->request->post()) && $bookModel->save()) {
            $this->makeResponse(['error', 'There is some error while creating new record']);
            return $this->redirect(['book/index']);
        } else {
            $categories = $this->categoriesList();
            $notification = $this->getResponse();
            return $this->render('create', ['bookModel' => $bookModel, 'categories' => $categories, 'notification' => $notification]);
        }
    }
    public function actionEdit($id)
    {
        if ($id === NULL)
            throw new HttpException(404, 'Resource Not Found');
        $bookModel = Book::findOne($id);
        if ($bookModel === NULL)
            throw new HttpException(404, 'Document Not Found');
        if ($bookModel->load(Yii::$app->request->post()) && $bookModel->save()) {
            return $this->redirect(['book/index']);
        } else {
            $categories = $this->categoriesList();
            return $this->render('edit', [
                'bookModel' => $bookModel,
                'categories' => $categories,
            ]);
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
            return $this->redirect(['book/index']);
        } else {
            return $this->redirect(['book/index']);
        }
    }
    public function actionShow($id)
    {
        $categories = $this->categoriesList();
        $book = Book::findOne($id);
        return $this->render('show', ['book' => $book, 'categories' => $categories]);
    }
}