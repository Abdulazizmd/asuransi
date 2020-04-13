<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */

$this->title = "Detail Pegawai";
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-view card card-primary">

    <div class="card-header">
        <h3 class="card-title">Detail Pegawai</h3>
    </div>

    <div class="card-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
            ],
            [
                'attribute' => 'nip',
                'format' => 'raw',
                'value' => $model->nip,
            ],
            [
                'attribute' => 'id_jabatan',
                'format' => 'raw',
                'value' => @$model->jabatan->nama,
            ],
            [
                'attribute' => 'id_golongan',
                'format' => 'raw',
                'value' => @$model->golongan->nama,
            ],
        ],
    ]) ?>

    </div>

    <div class="card-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Pegawai', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Pegawai', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
