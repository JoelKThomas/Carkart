<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Style;
use app\models\Fuel;
use app\models\Brand;
use yii\widgets\ActiveForm;
use app\models\Seat;
use app\models\Price;
use app\models\Addon;

/* @var $this yii\web\View */
/* @var $model app\models\CarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    
    <?php echo $form->field($model, 'bid')->dropDownList(ArrayHelper::map(Brand::find()->all(),'bid','bname')); ?>

     <?php echo $form->field($model, 'fid')->dropDownList(ArrayHelper::map(Fuel::find()->all(),'fid','fname')); ?>

      <?php echo $form->field($model, 'sid')->dropDownList(ArrayHelper::map(Style::find()->all(),'sid','sname')); ?>

     <?php echo $form->field($model, 'maxseat')->dropDownList(ArrayHelper::map(Seat::find()->all(),'seatid','maxseat'));?>

     <?php echo $form->field($model, 'price')->dropDownList(ArrayHelper::map(Price::find()->all(),'priceid','pname'));?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
