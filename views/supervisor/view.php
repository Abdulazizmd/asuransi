<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supervisor */

$this->title = "Detail Supervisor";
$this->params['breadcrumbs'][] = ['label' => 'Supervisor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supervisor-view card card-primary">

    <div class="card-header">
        <h3 class="card-title">Detail Supervisor</h3>
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
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
            ],
        ],
    ]) ?>

    </div>

    <div class="card-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Supervisor', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Supervisor', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
