<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Ganti Password User';

$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin([
    'layout'=>'horizontal',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'wrapper' => 'col-sm-4',
            'error' => '',
            'hint' => '',
        ],
    ]
]); ?>

<div class="site-login">
    
    <div class="form card card-danger">
        <div class="card-header">
            <h3 class="card-title">Form Ganti Password User</h3>
        </div>
        <div class="card-body">
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password_baru')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password_baru_konfirmasi')->passwordInput(['maxlength' => true]) ?>

            <div class="col-sm-offset-3 col-sm-3 ">
                <?= Html::submitButton('<i class="fa fa-check"></i> Ganti Password', ['class' => 'btn btn-success btn-flat', 'name' => 'register-button']) ?>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>
