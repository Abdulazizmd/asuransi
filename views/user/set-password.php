<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Set Password';

$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin([            
    'layout'=>'horizontal',
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'wrapper' => 'col-sm-4',
            'error' => '',
            'hint' => '',
        ],
    ]
]); ?>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Set Password</h3>
        </div>
        <div class="card-body">
        
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password_konfirmasi')->passwordInput(['maxlength' => true]) ?>

        </div>
        <div class="card-footer">        
            <?= Html::submitButton('<i class="fa fa-check"></i> Set Password', [
                'class' => 'btn btn-success btn-flat', 
                'name' => 'register-button'
            ]) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>
