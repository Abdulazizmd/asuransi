<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Polis */

$this->title = "Tambah Polis";
$this->params['breadcrumbs'][] = ['label' => 'Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polis-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
