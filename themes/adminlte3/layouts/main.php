<?php

use yii\helpers\Html;
use maswahyu\adminlte\assets\AdminLteAsset;

/* @var $this yii\web\View */

app\assets\AppAsset::register($this);
$assetBundle = AdminLteAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');

$tooltip = <<< SCRIPT
        $('body').tooltip({
            selector: '[data-toggle="tooltip"]'
        });
SCRIPT;
$this->registerJs($tooltip, \yii\web\View::POS_READY);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<body class="<?= $assetBundle->bodyClass ?>" id="<?= $assetBundle->bodyId ?>">

<?php $this->beginBody() ?>

    <div class="wrapper">

        <?= yii2mod\alert\Alert::widget(); ?>

        <?= $this->render('_header', [
            'assetBundle' => $assetBundle,
            'directoryAsset' => $directoryAsset,
        ]) ?>

        <?= $this->render('_left', [
            'assetBundle' => $assetBundle,
            'directoryAsset' => $directoryAsset,
        ]) ?>

        <?= $this->render('_content', [
            'assetBundle' => $assetBundle,
            'content' => $content,
            'directoryAsset' => $directoryAsset,
        ]) ?>

        <?= $this->render('_footer', [
            'assetBundle' => $assetBundle,
            'directoryAsset' => $directoryAsset,
        ]) ?>

    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
