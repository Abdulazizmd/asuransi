<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisAsuransi */

$this->title = "Sunting Jenis Asuransi";
$this->params['breadcrumbs'][] = ['label' => 'Jenis Asuransis', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="jenis-asuransi-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
