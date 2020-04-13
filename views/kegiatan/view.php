<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use app\components\Helper;

/* @var $this yii\web\View */
/* @var $model app\models\Kegiatan */

$this->title = "Detail Kegiatan";
$this->params['breadcrumbs'][] = ['label' => 'Kegiatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kegiatan-view card card-primary">

    <div class="card-header">
        <h3 class="card-title">Detail Kegiatan</h3>
    </div>

    <div class="card-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id_pegawai',
                'format' => 'raw',
                'value' => $model->namaPegawai,
            ],
            [
                'attribute' => 'tanggal',
                'format' => 'raw',
                'value' => Helper::getTanggal($model->tanggal),
            ],
            [
                'attribute' => 'kegiatan',
                'format' => 'raw',
                'value' => $model->kegiatan,
            ],
            [
                'attribute' => 'keluaran',
                'format' => 'raw',
                'value' => $model->keluaran,
            ],
            [
                'attribute' => 'berkas',
                'format' => 'raw',
                'value' => $model->getLinkBerkas(),
            ],
            /*[
                'attribute' => 'waktu_buat',
                'format' => 'raw',
                'value' => $model->waktu_buat,
            ],
            [
                'attribute' => 'id_user_buat',
                'format' => 'raw',
                'value' => $model->id_user_buat,
            ],*/
        ],
    ]) ?>

    </div>

    <div class="card-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Kegiatan', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Kegiatan', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
