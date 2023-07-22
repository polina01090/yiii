<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;

/** @var $bouquets */

echo Html::a('Добавить', ['create']);
//var_dump($bouquet);
?>

<div class="wrapper">
    <?php foreach ($bouquets as $bouquet): ?>
    <div class="bouquet">
        <img src="images/Букет1.png" class="bouquet-img" alt="bouquet">
        <div class="title"><?=$bouquet['name']?></div>
        <div class="btns">
            <a href="flowers?id=<?=$bouquet['id']?>" class="bouquet-btn">Просмотр</a>
            <a href="delete?id=<?=$bouquet['id']?>" class="bouquet-btn btn-del">Удалить</a>
        </div>
    </div>
    <?php endforeach;?>
</div>
