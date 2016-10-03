<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\DataColumn;

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="plugin/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugin/css/shop-homepage.css" rel="stylesheet">
</head>
<body>
<div class="car-index">
  <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                         <div class="thumbnail">
                                <img src="<?=Yii::$app->request->BaseUrl . '/uploads/' . $model['carid'] . '.jpg' ?>" alt="">
                                  <div class="caption">
                                    <h4 class="pull-right">Rs <?=$model['price']?>/-</h4>
                                    <h4><a href="#"><?=  $model['Car Name']?> </a>
                                    </h4>
                                    <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                                </div>
                                <div class="ratings">
                                    <p class="pull-right">15 reviews</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>















                </div>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery -->
    <script src="plugin/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="plugin/js/bootstrap.min.js"></script>
</body>