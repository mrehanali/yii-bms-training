<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

echo $this->title = 'List';
?>
<?php if (Yii::$app->session->hasFlash('BookDeleted')): ?>
    <div class="alert alert-success">
        Book has been deleted
    </div>
<?php endif; ?>
<table class="table">
    <tr>
        <th>
            Details
        </th>
        <th>
            Title
        </th>
        <th>
            Author
        </th>
        <th>
            ISBN
        </th>
        <th>
            Category
        </th>
        <th>
            Action
        </th>
    </tr>

    <?php foreach ($books as $book): ?>
        <tr>
            <td> <?= Html::a('Details', ['book/detail', 'id' => $book->id]); ?> </td>
            <td> <?= $book->title ?> </td>
            <td> <?= $book->author ?> </td>
            <td> <?= $book->isbn ?> </td>
            <td> <?= $book->category ?> </td>
            <td>
                <?php echo Html::a('', array('book/edit', 'id' => $book->id), array('class' => 'glyphicon glyphicon-edit')); ?>
                <!--    <a class="glyphicon glyphicon-remove" id="delete-book"></a>-->
                <?php echo Html::a('', array('book/delete', 'id' => $book->id), array('confirm' => 'Are you sure?', 'class' => 'glyphicon glyphicon-remove', 'id' => 'delete-book')); ?>
            </td>
        </tr>

    <?php endforeach; ?>
</table>
