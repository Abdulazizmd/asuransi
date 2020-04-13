<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jabatan */

$this->title = "Sunting Jabatan";
$this->params['breadcrumbs'][] = ['label' => 'Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="jabatan-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
