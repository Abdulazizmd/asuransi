<?php

use yii\helpers\Html;

//use frontend\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */


$hide = "$('.hide-alert').animate({opacity: 1.0}, 3000).fadeOut('slow')";
$this->registerJs($hide, $this::POS_END, '');

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

<?php $baseUrl = Yii::$app->request->baseUrl;  ?>

<link rel="stylesheet" href="<?= $baseUrl; ?>/css/login.css">
<?php $this->registerCssFile(Yii::$app->request->baseUrl.'/css/login.css'); ?>


</head>

<body>


<div class="pen-title">
  <h1>SISTEM INFORMASI TINDAK LANJUT <br> HASIL PEMERIKSAAN</h1>
  <span>INSPEKTORAT DAERAH</span>
  <BR>
  <span>PROVINSI KEPULAUAN BANGKA BELITUNG</span>

</div>
  <?= $content; ?>

</body>


</html>
