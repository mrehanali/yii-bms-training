<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <ul>
        <?php foreach($users as $user): ?>
            <li> <?= $user->name ?></li>
        <?php endforeach; ?>
    </ul>
