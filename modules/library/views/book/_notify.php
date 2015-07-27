<?php foreach (Yii::$app->session->getAllFlashes() as $key => $message) { ?>
<div class="alert alert-<?php echo $key; ?>" role="alert">
	<?php echo $message; ?>
</div>
<?php } ?>
