<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

echo $this->title = 'List';
?>
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
                <?php echo Html::a('EDIT', array('book/edit', 'id' => $book->id), array('class' => 'btn btn-primary')); ?>
                <?php echo Html::a('Delete', array('book/delete', 'id' => $book->id), array('class' => 'btn btn-danger')); ?>
            </td>
        </tr>

    <?php endforeach; ?>
</table>
