<?php

use app\components\Helper;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Dashboard';
?>

<?php echo $this->render('_card-rekap'); ?>

<?php echo $this->render('_daftar-kegiatan'); ?>