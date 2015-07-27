<?php

//namespace app\controllers;
namespace app\modules\library\controllers;

use app\modules\library\models\Book;
use yii\web\Controller;
use Yii;

class BookController extends Controller
{
    public $defaultAction = 'index';
    
    /**
      * Provides an array of Book Categories.
      *
      * @param      nothing.
      *
      * @return     Array   Array items to create flash messages.
     **/

    private function categoriesList()
    {
        if ( isset(Yii::$app->params['bookCategories']) )
            return Yii::$app->params['bookCategories'];
    }

    /**
      * Generates listing for books.
      *
      * @param      nothing.
      *
      * @return     Rendered listing view with $books and $categories.
     **/

    public function actionIndex()
    {
        $categories = $this->categoriesList();
        $query = Book::find();
        $books = $query->orderBy('title')->all();
        return $this->render('index', ['books' => $books, 'categories' => $categories]);
    }

    /**
      * Generates form for create/Provides POST for book.
      *
      * @param      nothing.
      *
      * @return     Rendered create view with form/Redirect to Listing after successful storage.
     **/

    public function actionCreate()
    {
        $bookModel = new Book;
        if ($bookModel->load(Yii::$app->request->post()) && $bookModel->save()) {
            Yii::$app->session->setFlash('success', 'Book created successfully');
            return $this->redirect(['book/index']);
        } else {
            $categories = $this->categoriesList();
            return $this->render('create', ['bookModel' => $bookModel, 'categories' => $categories]);
        }
    }

    /**
      * Generates form for edit/Provides PUT/PATCH for book.
      *
      * @param      int     $id     Identifier for Book to be edited.
      *
      * @return     Rendered create view with form/Redirect to Listing after successful storage
     **/

    public function actionEdit($id)
    {
        if ($id === NULL)
            throw new HttpException(404, 'Resource Not Found');
            $bookModel = Book::findOne($id);
        if ($bookModel === NULL)
            throw new HttpException(404, 'Document Not Found');
        if ($bookModel->load(Yii::$app->request->post()) && $bookModel->save()) {
            Yii::$app->session->setFlash('success', 'Book edited successfully');
            return $this->redirect(['book/index']);
        } else {
            $categories = $this->categoriesList();
            return $this->render('edit', ['bookModel' => $bookModel, 'categories' => $categories]);
        }
    }
    
    /**
      * Generates form for edit/Provides DELETE for book.
      *
      * @param      int     $id     Identifier for Book to be deleted.
      *
      * @return     Redirect to Listing after success/error
     **/

    public function actionDestroy($id)
    {
        if ($id === NULL)
            throw new HttpException(404, 'Resource Not Found');
            $bookModel = Book::findOne($id);
        if ($bookModel === NULL)
            throw new HttpException(404, 'Document Not Found');
        $book = Book::findOne($id);
        if ($book->delete()) {
            Yii::$app->session->setFlash('success', 'Book deleted successfully');
            return $this->redirect(['book/index']);
        } else {
            Yii::$app->session->setFlash('error', 'Sorry! Unable to delete specific record');
            return $this->redirect(['book/index']);
        }
    }

    /**
      * Generates details page for books.
      *
      * @param      int     $id     Identifier for Book to be deleted.
      *
      * @return     Rendered show view with details
     **/

    public function actionShow($id)
    {
        $categories = $this->categoriesList();
        $book = Book::findOne($id);
        return $this->render('show', ['book' => $book, 'categories' => $categories]);
    }
}