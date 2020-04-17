<?php

use app\components\Helper;
use yii\helpers\Html;

use app\models\User;

/* @var $this yii\web\View */
$this->title = 'Dashboard';
?>

<?php /*echo $this->render('_card-rekap');*/ ?>

<?php /*echo $this->render('_daftar-kegiatan');*/ ?>

<?php 
if(User::isAdmin()){
	echo $this->render ('_grafik'); 
}

?>