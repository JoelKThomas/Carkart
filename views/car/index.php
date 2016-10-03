<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
    echo $this->render('_search', ['model' => $searchModel]); ?>





<?= yii\grid\GridView::widget([
  'dataProvider' => $dataProvider,
  'columns' => [
    [
      'format' => 'raw',
      'value' => function ($model) {
        return $this->render('design.php', ['model' => $model]);
      },
    ]
  ]
]);?>
 
</div>
