<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Agen */

$this->title = "Sunting Agen";
$this->params['breadcrumbs'][] = ['label' => 'Agens', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="agen-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
