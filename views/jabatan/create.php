<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jabatan */

$this->title = "Tambah Jabatan";
$this->params['breadcrumbs'][] = ['label' => 'Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
