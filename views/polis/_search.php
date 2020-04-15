<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PolisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="polis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'id_pekerjaan') ?>

    <?= $form->field($model, 'nama_tertanggung') ?>

    <?php // echo $form->field($model, 'uang_pertanggungan') ?>

    <?php // echo $form->field($model, 'id_jenis_asuransi') ?>

    <?php // echo $form->field($model, 'premi') ?>

    <?php // echo $form->field($model, 'id_agen') ?>

    <?php // echo $form->field($model, 'id_supervisor') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
