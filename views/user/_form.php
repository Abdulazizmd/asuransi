<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\UserRole;
use kartik\select2\Select2;
use app\models\Pegawai;

/* @var $this yii\web\View */
/* @var $model app\models\User */
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

<div class="unit-form card card-primary">

    <div class="card-header">
        <h3 class="card-title">Form Unit</h3>
    </div>
    <div class="card-body">

        <?= $form->errorSummary($model); ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?php if($model->isNewRecord) { ?>

            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
            
        <?php } ?>
        
        <?php if($model->id_user_role == UserRole::PEGAWAI) { ?>
            
            <?= $form->field($model, 'id_pegawai')->dropDownList(
                \app\models\Pegawai::getList(),
                ['prompt'=>'- Pilih Pegawai -']
            ) ?>

        <?php } ?>


        <?= Html::hiddenInput('referrer',$referrer); ?>

    </div>
    <div class="card-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan',['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

</div>

<?php ActiveForm::end(); ?>

