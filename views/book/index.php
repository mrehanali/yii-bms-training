<?php
use yii\helpers\Html;

echo $this->title = 'Book index';

?>
<p>
    Book/ index
</p>
<?php if (Yii::$app->session->hasFlash('BookAdded')): ?>
    <div class="alert alert-success">
        Book has been added
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('BookNotAdded')): ?>
    <div class="alert alert-error">
        Error : Book has not been added
    </div>
<?php endif; ?>

<?php echo Html::a('List all', array('book/list'), array('class' => 'btn btn-primary')); ?> <br> <br>

<?php echo Html::a('Create Book', array('book/create'), array('class' => 'btn btn-primary')); ?>
