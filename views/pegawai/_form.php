<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use kartik\select2\Select2;

use app\models\Jabatan;
use app\models\Golongan;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
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

<div class="pegawai-form card card-primary">

    <div class="card-header">
        <h3 class="card-title">Form Pegawai</h3>
    </div>
	<div class="card-body">

        <?= $form->errorSummary($model); ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'id_jabatan')->widget(Select2::class, [
            'data' =>  Jabatan::getList(),
            'options' => [
                'placeholder' => '- Pilih Jabatan -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

        <?= $form->field($model, 'id_golongan')->widget(Select2::class, [
            'data' =>  Golongan::getList(),
            'options' => [
                'placeholder' => '- Pilih Golongan -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

        <?= Html::hiddenInput('referrer',$referrer); ?>

	</div>
    <div class="card-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan',['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

</div>

<?php ActiveForm::end(); ?>
