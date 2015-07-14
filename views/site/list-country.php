<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<ul>
<?php foreach($countries as $country): ?>
    <li> <?= $country->name ?></li>
    <?php endforeach; ?>
    </ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>