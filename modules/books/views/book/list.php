<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

echo $this->title = 'List';
?>

<div class="alert alert-success" id="BookDeleted">
    Book has been deleted
</div>
<div class="alert alert-danger" id="BookNotDeleted">
    Book has not been deleted
</div>

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
        <tr id="row_<?php echo $book->id ?>">
            <td> <?= Html::a('Details', ['book/detail', 'id' => $book->id]); ?> </td>
            <td> <?= $book->title ?> </td>
            <td> <?= $book->author ?> </td>
            <td> <?= $book->isbn ?> </td>
            <td> <?= $book->category ?> </td>
            <td>
                <?php echo Html::a('', array('book/edit', 'id' => $book->id), array('class' => 'glyphicon glyphicon-edit')); ?>
                <a class="glyphicon glyphicon-remove" onclick="deleteBook(<?= $book->id ?>)"
                   style="cursor:pointer;"></a>


            </td>
        </tr>

    <?php endforeach; ?>
</table>
