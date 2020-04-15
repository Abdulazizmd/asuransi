<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Polis */

$this->title = "Sunting Polis";
$this->params['breadcrumbs'][] = ['label' => 'Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="polis-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
