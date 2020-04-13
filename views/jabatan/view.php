<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jabatan */

$this->title = "Detail Jabatan";
$this->params['breadcrumbs'][] = ['label' => 'Jabatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-view card card-primary">

    <div class="card-header">
        <h3 class="card-title">Detail Jabatan</h3>
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
            /*[
                'attribute' => 'id_induk',
                'format' => 'raw',
                'value' => $model->id_induk,
            ],*/
        ],
    ]) ?>

    </div>

    <div class="card-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Jabatan', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Jabatan', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
