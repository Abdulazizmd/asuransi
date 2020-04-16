<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\JenisAsuransi;
use app\models\Agen;
use app\models\Supervisor;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PolisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Polis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polis-index card card-default">

    <div class="card-header">

        <h2 class='card-title'> <i class='fa fa-list'></i> <?=$this->title; ?> </h2>        <div class='card-tools'>
            <?= Html::a('<i class="fa fa-plus"></i> Tambah Polis', ['create'], ['class' => 'btn btn-success btn-flat btn-sm']) ?>
            <?= Html::a('<i class="fa fa-print"></i> Export Excel Polis', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat btn-sm']) ?>
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
                'contentOptions' => ['style' => 'text-align:center;width:20px;']
            ],

            [
                'attribute' => 'no_polis',
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
                'attribute' => 'id_jenis_asuransi',
                'filter' => JenisAsuransi::getList(),
                'format' => 'raw',
                'value' => function ($data)
                {
                    return @$data->jenisAsuransi->nama;
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'id_agen',
                'filter' => Agen::getList(),
                'format' => 'raw',
                'value' => function ($data)
                {
                    return @$data->agen->nama;
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'id_supervisor',
                'filter' => Supervisor::getList(),
                'format' => 'raw',
                'value' => function ($data)
                {
                    return @$data->supervisor->nama;
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center;width:100px']
            ],
        ],
    ]); ?>
    </div>
</div>
