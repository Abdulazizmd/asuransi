<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = "Detail User";
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view card card-primary">

    <div class="card-header">
        <h3 class="box-title">Detail User</h3>
    </div>

    <div class="card-body">

    <?php if (User::isAdmin()) { ?>
        <?= DetailView::widget([
            'model' => $model,
            'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
            'attributes' => [
                [
                    'attribute' => 'id_user_role',
                    'format' => 'raw',
                    'value' => $model->userRole->nama
                ],
                [
                    'attribute' => 'username',
                    'format' => 'raw',
                    'value' => $model->username
                ],
                [
                    'attribute' => 'id_pegawai',
                    'format' => 'raw',
                    'visible' => ($model->id_pegawai !== null) ? true : false,
                    'value' => $model->getRelationField("pegawai","nama")
                ],
            ],
        ]) ?>
    <?php } elseif (User::isPegawai()) { ?>
        <?= DetailView::widget([
            'model' => $model,
            'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
            'attributes' => [
                [
                    'attribute' => 'username',
                    'format' => 'raw',
                    'value' => $model->username
                ],
            ],
        ]) ?>
    <?php } ?>
    </div>

    <div class="card-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting User', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar User', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
