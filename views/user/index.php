<?php

use app\models\Unit;
use yii\helpers\Html;
use yii\grid\GridView;

use app\models\UserRole;
use app\models\Pegawai;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index card card-default">

    <div class="card-header">

        <h2 class='card-title'> <i class='fa fa-list'></i> <?=$this->title; ?> </h2>        <div class='card-tools'>
            <?= Html::a('<i class="fa fa-plus"></i> Tambah User', ['create', 'id_user_role'=>$searchModel->id_user_role], ['class' => 'btn btn-success btn-flat btn-sm']) ?>
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
                'headerOptions' => ['style' => 'text-align:center; width: 50px'],
                'contentOptions' => ['style' => 'text-align:center']
            ],
            [
                'attribute' => 'username',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;'],
            ],
            [
                'attribute' => 'id_pegawai',
                'options' => ['style' => 'width:250px'],
                'filter' => Pegawai::getList(),
                'visible' => $searchModel->id_user_role == UserRole::PEGAWAI,
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'value' => function($data) {
                    return @$data->pegawai->nama;
                }
            ],
            [
                'attribute' => 'id_user_role',
                'options' => ['style' => 'width:250px'],
                'filter' => UserRole::getList(),
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'value' => function($data) {
                    return ucwords($data->userRole->nama);
                }
            ],
            [
                'label' => '',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;width:50px'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'value' => function($data) {
                    return Html::a('<i class="fa fa-lock">', ['set-password','id'=>$data->id], ['data-toggle' => 'tooltip', 'title' => 'Set Password']);
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center;width:80px']
            ],
        ],
    ]); ?>
    </div>
</div>
