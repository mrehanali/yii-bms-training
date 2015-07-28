<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?php echo $form->field($model, 'title') ?>
                <?php echo $form->field($model, 'author') ?>
                <?php echo $form->field($model, 'isbn') ?>
                <?php echo $form->field($model, 'type') ?>
                <div class="form-group">
                    <?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
