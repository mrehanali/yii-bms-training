<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
?>
<div class="site-login login-contanier">
    <div class="login-image">
        <img src="<?php echo Yii::getAlias('@web').'/favicon.ico' ?>" />
    </div>
    

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => [],
        'fieldConfig' => [
            'template' => "<div class=\"login-error\">{error}</div><div class=\"login-fields-row\">{label}{input}</div>",
        ],
    ]); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password')->passwordInput() ?>
    <p class="help-block-error"></p>
    <?= $form->field($model, 'rememberMe', [
        'template' => "<div class=\"login-error\">{error}</div><div class=\"remember-me\">{input}</div>",
    ])->checkbox() ?>
    
    <div class="submit-login">
        <?= Html::submitButton('Login', ['class' => 'login-btn', 'name' => 'login-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
    <div class="login-links">
        <div><a href="#">=> Passwort vergessen?</a></div>
        <div><a href="#">=> Neu hier?</a></div>
        <div><a href="#">=> Hilfe</a></div>
    </div>
    <div class="bottom-div">
        <span>Impressum</span>
        <span>Netzungbdingen</span>
        <span class="copy-right">&copy; 2015 Coeus</span>
    </div>

</div>
