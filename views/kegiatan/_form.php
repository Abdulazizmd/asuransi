<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use kartik\select2\Select2;
use kartik\date\DatePicker;

use app\models\Pegawai;
use app\models\User;


/* @var $this yii\web\View */
/* @var $model app\models\Kegiatan */
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

<div class="kegiatan-form card card-primary">

    <div class="card-header">
        <h3 class="card-title">Form Kegiatan</h3>
    </div>
	<div class="card-body">

        <?= $form->errorSummary($model); ?>

        <?php if(User::isPegawai() == true) { ?>
            <?= $form->field($model, 'namaPegawai')->textInput(['readonly'=>'readonly']) ?>
        <?php } ?>
    
        <?php if(User::isAdmin() == true) { ?>
            <?= $form->field($model, 'id_pegawai')->widget(Select2::class, [
                'data' =>  Pegawai::getList(),
                'options' => [
                    'placeholder' => '- Pilih Pegawai -',
                ],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        <?php } ?>

        <?= $form->field($model, 'tanggal')->widget(DatePicker::class, [
            'removeButton' => false,
            'value' => date('Y-m-d'),
            'options' => ['placeholder' => 'Tanggal Kegiatan'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd',
        ] ]) ?>

        <?= $form->field($model, 'kegiatan')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'keluaran')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'berkas')->fileInput() ?>

        <?= Html::hiddenInput('referrer',$referrer); ?>

	</div>
    <div class="card-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan',['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

</div>

<?php ActiveForm::end(); ?>
