<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Agen */

$this->title = "Detail Agen";
$this->params['breadcrumbs'][] = ['label' => 'Agen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agen-view card card-primary">

    <div class="card-header">
        <h3 class="card-title">Detail Agen</h3>
    </div>

    <div class="card-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id_supervisor',
                'format' => 'raw',
                'value' => @$model->supervisor->nama,
            ],
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
            ],
        ],
    ]) ?>

    </div>

    <div class="card-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Agen', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Agen', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
