<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Golongan */

$this->title = "Sunting Golongan";
$this->params['breadcrumbs'][] = ['label' => 'Golongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="golongan-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
