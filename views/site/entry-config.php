<?php

use yii\helpers\Html;
?>

<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Ваше имя</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Ваш Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
