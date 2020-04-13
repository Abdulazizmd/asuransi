<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\components\Helper;

use app\models\Pegawai;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KegiatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Kegiatan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kegiatan-index card card-default">

    <div class="card-header">

        <h2 class='card-title'> <i class='fa fa-list'></i> <?=$this->title; ?> </h2>        <div class='card-tools'>
            <?= Html::a('<i class="fa fa-plus"></i> Tambah Kegiatan', ['create'], ['class' => 'btn btn-success btn-flat btn-sm']) ?>
            <?= Html::a('<i class="fa fa-print"></i> Export Excel Kegiatan', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat btn-sm']) ?>
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
                'attribute' => 'id_pegawai',
                'format' => 'raw',
                'filter' => Pegawai::getList(),
                'value' => function($data) {
                    return $data->namaPegawai;
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'tanggal',
                'format' => 'raw',
                'value' => function($data) {
                    return Helper::getTanggal($data->tanggal);
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'kegiatan',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'keluaran',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'berkas',
                'format' => 'raw',
                'value' => function($data) {
                    return $data->getLinkBerkas();
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            /*[
                'attribute' => 'waktu_buat',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'id_user_buat',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],*/

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center;width:80px']
            ],
        ],
    ]); ?>
    </div>
</div>
