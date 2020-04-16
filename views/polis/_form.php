<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\number\NumberControl;

use app\models\Agen;
use app\models\Pekerjaan;
use app\models\JenisAsuransi;

/* @var $this yii\web\View */
/* @var $model app\models\Polis */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'type'=>'vertical',
    'enableAjaxValidation'=>false,
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

        <?= $form->field($model, 'tanggal')->widget(DatePicker::class, [
            'removeButton' => false,
            'value' => date('Y-m-d'),
            'options' => ['placeholder' => 'Tanggal'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd',
        ] ]) ?>

        <?= $form->field($model, 'no_polis')->textInput() ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'alamat')->textArea(['maxlength' => true]) ?>

        <?= $form->field($model, 'id_pekerjaan')->widget(Select2::class, [
            'data' =>  Pekerjaan::getList(),
            'options' => [
                'placeholder' => '- Pilih Pekerjaan -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

        <?= $form->field($model, 'nama_tertanggung')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'uang_pertanggungan',[
            'addon' => ['prepend' => ['content'=>'Rp.']],
        ])->widget(NumberControl::class, [

            'maskedInputOptions' => [
                'groupSeparator' => '.',
                'radixPoint' => ',',
                'prefix' => '',
                'allowMinus' => false,
            ],
        ]); ?>

        <?= $form->field($model, 'id_jenis_asuransi')->widget(Select2::class, [
            'data' =>  JenisAsuransi::getList(),
            'options' => [
                'placeholder' => '- Pilih Jenis Asuransi -',
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

        <?= $form->field($model, 'premi',[
            'addon' => ['prepend' => ['content'=>'Rp.']],
        ])->widget(NumberControl::class, [

            'maskedInputOptions' => [
                'groupSeparator' => '.',
                'radixPoint' => ',',
                'prefix' => '',
                'allowMinus' => false,
            ],
        ]); ?>

        <?= $form->field($model, 'id_agen')->widget(Select2::class, [
            'data' =>  Agen::getList(),
            'options' => [
                'placeholder' => '- Pilih Agen -',
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
