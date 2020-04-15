<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Agen */

$this->title = "Tambah Agen";
$this->params['breadcrumbs'][] = ['label' => 'Agens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agen-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
