<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenisAsuransi */

$this->title = "Tambah Jenis Asuransi";
$this->params['breadcrumbs'][] = ['label' => 'Jenis Asuransis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-asuransi-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
