<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Supervisor */

$this->title = "Tambah Supervisor";
$this->params['breadcrumbs'][] = ['label' => 'Supervisors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supervisor-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
