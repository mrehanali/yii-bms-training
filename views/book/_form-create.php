<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'title') ?>

<?= $form->field($model, 'author') ?>

<?= $form->field($model, 'isbn') ?>

<?= $form->field($model, 'category')->radioList(['1' => 'fiction', '2' => 'story', '3' => 'novel', '4' => 'magazine']); ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>