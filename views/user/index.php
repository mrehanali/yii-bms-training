<?php
/* @var $this yii\web\View */
?>
<h1>user/index</h1>

<p>
    <?php if (Yii::$app->session->hasFlash('UserDeletedError')): ?>
    <div class="alert alert-error">
        There was an error deleting your user!
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('UserDeleted')): ?>
    <div class="alert alert-success">
        Your user has successfully been deleted!
    </div>
<?php endif; ?>
</p>

