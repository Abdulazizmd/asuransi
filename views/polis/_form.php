<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Polis */
/* @var $form yii\widgets\ActiveForm */
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

<div class="polis-form card card-primary">

    <div class="card-header">
        <h3 class="card-title">Form Polis</h3>
    </div>
	<div class="card-body">

        <?= $form->errorSummary($model); ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'id_pekerjaan')->textInput() ?>

        <?= $form->field($model, 'nama_tertanggung')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'uang_pertanggungan')->textInput() ?>

        <?= $form->field($model, 'id_jenis_asuransi')->textInput() ?>

        <?= $form->field($model, 'premi')->textInput() ?>

        <?= $form->field($model, 'id_agen')->textInput() ?>

        <?= $form->field($model, 'id_supervisor')->textInput() ?>

        <?= $form->field($model, 'tanggal')->textInput() ?>

        <?= Html::hiddenInput('referrer',$referrer); ?>

	</div>
    <div class="card-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan',['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

</div>

<?php ActiveForm::end(); ?>
