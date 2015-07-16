<?php
use yii\helpers\Html;

echo $this->title = 'Book index';

?>
<p>
    Book/ index
</p>

<?php echo Html::a('List all', array('book/list'), array('class' => 'btn btn-primary')); ?> <br> <br>

<?php echo Html::a('Create Book', array('book/create'), array('class' => 'btn btn-primary')); ?>
