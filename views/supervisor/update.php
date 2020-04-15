<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supervisor */

$this->title = "Sunting Supervisor";
$this->params['breadcrumbs'][] = ['label' => 'Supervisors', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="supervisor-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
