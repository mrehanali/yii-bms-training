<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login form-center">

    <img src="http://local.basic/images/logo.png" width="100px"/>


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal form-top-margin'],
        'fieldConfig' => [
            'template' => "<span class='error-message-class'>{error}</span>\n{label}<span>{input}</span>",
            'labelOptions' => ['class' => ''],
        ],
    ]); ?>
    <div class="inner-fld-div">
        <div class="form-field-grp">
            <?= $form->field($model, 'username')->textInput(['class' => 'field-height'])->label('Name', ['class' => 'label-right-margin']) ?>
        </div>
        <div class="form-field-grp">
            <?= $form->field($model, 'password')->passwordInput(['class' => 'field-height password-top-margin'])->label('Password', ['class' => 'label-right-margin']) ?>
        </div>
    </div>
    <div class='margin-chk-box'>
        <?= $form->field($model, 'rememberMe', [
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ])->checkbox() ?>

    </div>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'yellow-button', 'name' => 'login-button']) ?>
        </div>
    </div>
    <ul class="u-list">
        <li>
            <a class="li-list"> Forgot Password ? </a>
        </li>
        <li>
            <a class="li-list"> Niew hueor </a>
        </li>
        <li>
            <a class="li-list"> Niew hueor </a>
        </li>
    </ul>

    <?php ActiveForm::end(); ?>
</div>
