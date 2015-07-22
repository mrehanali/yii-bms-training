<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form = ActiveForm::begin();
echo $form->field($bookModel, 'title');
echo $form->field($bookModel, 'author');
echo $form->field($bookModel, 'isbn');
echo $form->field($bookModel, 'category_id')->dropDownList($categories);
//echo $form->field($bookModel, 'category_id')->checkboxList($categories); ?>
<div class="form-group">
    <?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary']); ?>
    <?php echo Html::resetButton('Reset', ['class' => 'btn btn-danger']); ?>
</div>
<?php ActiveForm::end(); ?>