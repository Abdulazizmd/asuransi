<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PekerjaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Pekerjaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pekerjaan-index card card-default">

    <div class="card-header">

        <h2 class='card-title'> <i class='fa fa-list'></i> <?=$this->title; ?> </h2>        <div class='card-tools'>
            <?= Html::a('<i class="fa fa-plus"></i> Tambah Pekerjaan', ['create'], ['class' => 'btn btn-success btn-flat btn-sm']) ?>
            <?= Html::a('<i class="fa fa-print"></i> Export Excel Pekerjaan', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat btn-sm']) ?>
        </div>
    </div>

    <div class="card-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' => ['style' => 'text-align:center']
            ],

            [
                'attribute' => 'id',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center;width:80px']
            ],
        ],
    ]); ?>
    </div>
</div>
