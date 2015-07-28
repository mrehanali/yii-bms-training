<?php
use yii\helpers\Html;
$this->title = 'Users';
?>
<h1><?php echo $this->title; ?></h1>
<?php
if (Yii::$app->session->hasFlash('notification')){
    echo $this->render('_notify', ['message' => $notification['message'], 'status' => $notification['status']]);
}
echo Html::a('Create New', array('user/create'), array('class' => 'btn btn-primary pull-right')); ?>
<table class="table table-focus">
    <?php if(!empty($users)){ ?>
        <tr>
            <th>User Id</th>
            <th>Username</th>
            <th></th>
        </tr>
        <?php foreach($users as $record) { ?>
            <tr id="book_<?php echo $record->id; ?>">
                <td><?php echo $record->id; ?></td>
                <td><?php echo Html::a($record->username, ['user/show', 'id' => $record->id]); ?></td>
                <td>
                    <?php echo Html::a('&nbsp;Edit', ['user/edit', 'id' => $record->id], ['class' => 'glyphicon glyphicon-edit']); ?>
                    <?php echo Html::a('&nbsp;Delete', ['user/destroy', 'id' => $record->id], ['class' => 'glyphicon glyphicon-trash', 'onclick' => "return confirm('Are you sure you want to delete this user?');"]); ?>
                </td>
            </tr>
        <?php } //end of foreach?>
    <?php } else { ?>
        <tr>
            <td>No Record(s) Found</td>
        </tr>
    <?php } ?>
</table>