<?php

use yii\helpers\Html;
use yii\helpers\Url;

use app\models\User;

?>
<aside class="main-sidebar sidebar-light-primary elevation-3 <?php // print $assetBundle->sidebarVariant ?>">

    <a href="<?= $assetBundle->brandUrl ?>" class="brand-link <?= $assetBundle->brandVariant ?>">
        
        <span class="brand-text font-weight-light"><?= Yii::$app->name ?></span>
    </a>

    <div class="sidebar" id="<?= $assetBundle->sidebarId ?>">

        <?php if ($assetBundle->showUserOnSidebar): ?>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Yii::getAlias('@web') ?>/images/avatar.jpeg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->{$assetBundle->user}->isGuest ? 'John Doe <span class="badge badge-danger">guest</span>' : Yii::$app->{$assetBundle->user}->identity->username ?></a>
            </div>
        </div>
        <?php endif ?>

        <nav class="mt-2">
            <?php if(User::isAdmin()) {
                print $this->render('_menu-admin');
            } ?>

            <?php if(User::isSupervisor()) {
                print $this->render('_menu-supervisor');
            } ?>
        </nav>

    </div>

</aside>
