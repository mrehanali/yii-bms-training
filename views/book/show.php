<?php
use yii\helpers\Html;
$this->title = $book->title."'s Details";
?>
<h1> <?php echo $this->title; ?></h1>
<?php echo Html::a('Create New', array('book/create'), array('class' => 'btn btn-primary pull-right')); ?>
<p>
    Title: <?php echo $book->title; ?>
</p>
<p>
    Author: <?php echo $book->author; ?>
</p>
<p>
    ISBN: <?php echo $book->isbn; ?>
</p>
<p>
    Category: <?php echo $categories[$book->category_id]; ?>
</p>
