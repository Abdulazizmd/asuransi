<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Polis */

$this->title = "Detail Polis";
$this->params['breadcrumbs'][] = ['label' => 'Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polis-view card card-primary">

    <div class="card-header">
        <h3 class="card-title">Detail Polis</h3>
    </div>

    <div class="card-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => $model->id,
            ],
            [
                'attribute' => 'no_polis',
                'format' => 'raw',
                'value' => $model->no_polis,
            ],
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
            ],
            [
                'attribute' => 'alamat',
                'format' => 'raw',
                'value' => $model->alamat,
            ],
            [
                'attribute' => 'id_pekerjaan',
                'format' => 'raw',
                'value' => $model->id_pekerjaan,
            ],
            [
                'attribute' => 'nama_tertanggung',
                'format' => 'raw',
                'value' => $model->nama_tertanggung,
            ],
            [
                'attribute' => 'uang_pertanggungan',
                'format' => 'raw',
                'value' => $model->uang_pertanggungan,
            ],
            [
                'attribute' => 'id_jenis_asuransi',
                'format' => 'raw',
                'value' => $model->id_jenis_asuransi,
            ],
            [
                'attribute' => 'premi',
                'format' => 'raw',
                'value' => $model->premi,
            ],
            [
                'attribute' => 'id_agen',
                'format' => 'raw',
                'value' => $model->id_agen,
            ],
            [
                'attribute' => 'id_supervisor',
                'format' => 'raw',
                'value' => $model->id_supervisor,
            ],
            [
                'attribute' => 'tanggal',
                'format' => 'raw',
                'value' => $model->tanggal,
            ],
        ],
    ]) ?>

    </div>

    <div class="card-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Polis', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Polis', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
