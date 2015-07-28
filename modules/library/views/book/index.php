<?php
use yii\helpers\Html;
$this->title = \Yii::t('app', 'Books');
?>
<h1><?php echo $this->title; ?></h1>
<?php
if (Yii::$app->session->hasFlash('notification')){
	echo $this->render('_notify', ['message' => $notification['message'], 'status' => $notification['status']]);
}
echo Html::a('Create New', array('book/create'), array('class' => 'btn btn-primary pull-right')); ?>
<table class="table table-focus">
<?php if(!empty($books)){ ?>
<tr>
	<th>Title</th>
	<th>Author</th>
	<th>ISBN</th>
	<th>Category</th>
	<th></th>
</tr>
<?php foreach($books as $record) { ?>
	<tr id="book_<?php echo $record->id; ?>">
		<td><?php echo Html::a($record->title, ['book/show', 'id' => $record->id]); ?></td>
		<td><?php echo $record->author; ?></td>
		<td><?php echo $record->isbn; ?></td>
		<td><?php echo $categories[$record->category_id]; ?></td>
		<td>
			<?php echo Html::a('&nbsp;Edit', ['book/edit', 'id' => $record->id], ['class' => 'glyphicon glyphicon-edit']); ?>
			<?php echo Html::a('&nbsp;Delete', ['book/destroy', 'id' => $record->id], ['class' => 'glyphicon glyphicon-trash', 'onclick' => "return confirm('Are you sure you want to delete this book?');"]); ?>
		</td>
	</tr>
<?php } //end of foreach?>
<?php } else { ?>
	<tr>
		<td>No Record(s) Found</td>
	</tr>
<?php } ?>
</table>