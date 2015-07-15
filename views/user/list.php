<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <table class="table">
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Action
            </th>
        </tr>

        <?php foreach($users as $user): ?>
            <tr>
                <td> <?= Html::a('Details',['user/detail','id'=>$user->id]);  ?> </td>
                <td> <?= $user->name ?> </td>
                <td> <?= $user->email ?> </td>
                <td>
                    <?php echo Html::a('EDIT', array('user/edit', 'id' => $user->id), array('class' => 'btn btn-primary')); ?>
                    <?php echo Html::a('Delete', array('user/delete', 'id' => $user->id), array('class' => 'btn btn-danger')); ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
