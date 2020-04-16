<?php

use app\components\Helper;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Dashboard';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.14/css/highcharts.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.14/highcharts.js"></script>


<?php /*echo $this->render('_card-rekap');*/ ?>

<?php /*echo $this->render('_daftar-kegiatan');*/ ?>

<?php echo $this->render ('_grafik'); ?>