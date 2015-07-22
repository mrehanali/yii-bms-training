<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;

if (Yii::$app->session->hasFlash('bookCreated')): 
    ?>

    <div class="alert alert-success">
        New Book Created Successfully.
    </div>


<?php 
elseif (Yii::$app->session->hasFlash('bookUpdated')): 
?>
        <div class="alert alert-success">
            Book Updated Successfully.
        </div>
<?php 
elseif (Yii::$app->session->hasFlash('bookDeleted')): 
?>
        <div class="alert alert-success">
            Book Deleted Successfully.
        </div>
<?php
endif; 

if(count($books)){ ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Type</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($books as $book){  ?>

                <tr>
                    <td><?php echo $book->title; ?></td>
                    <td><?php echo $book->author; ?></td>
                    <td><?php echo $book->isbn; ?></td>
                    <td><?php echo $book->type; ?></td>
                    <td>
                        <a class="delete-book" href="<?php echo Url::to(['delete', 'id' => $book->id]) ?>"><span class="glyphicon glyphicon-trash"></span></a>
                        <a href="<?php echo Url::to(['update', 'id' => $book->id]) ?>"><span class="glyphicon glyphicon-edit"></span></a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
<?php
}else{
    echo 'No Book found.';
}
    
?>
