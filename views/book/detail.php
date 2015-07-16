<?php
echo $this->title = 'Detail';
?>
<h1>Book/detail</h1>
<?php if (Yii::$app->session->hasFlash('BookEdited')): ?>
    <div class="alert alert-success">
        Book has been Edited
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('BookNotEdited')): ?>
    <div class="alert alert-error">
        Book has been Edited
    </div>
<?php endif; ?>

<p>
    title : <?= $book->title ?> <br>
    author : <?= $book->author ?> <br>
    isbn : <?= $book->isbn ?> <br>
    category : <?= $book->category ?> <br>
</p>

