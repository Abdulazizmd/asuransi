<?php
use app\models\User;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web').'/images/logobabel.png'; ?>" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= ucwords(Yii::$app->user->identity->username) ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

    <?php if (User::isAdmin()) { ?>
    <?= dmstr\widgets\Menu::widget(
        [
            'options' => ['class' => 'sidebar-menu'],
            'items' => [
                ['label' => 'MENU NAVIGASI', 'options' => ['class' => 'header']],
                ['label' => 'Menu Utama', 'icon' => 'home', 'url' => ['dashboard/index']],
                ['label' => 'Daftar Tindak Lanjut', 'icon' => 'list', 'url' => ['lhp-temuan/index'],],
                //['label' => 'Surat Tugas', 'icon' => 'pencil-square-o', 'url' => ['/surat-tugas']],
                /*[
                    'label' => 'Lap. Hasil Pemeriksaan',
                    'icon' => 'pencil-square-o',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Daftar LHP', 'icon' => 'list', 'url' => ['lhp/index'],],
                        ['label' => 'Terima LHP', 'icon' => 'pencil-square-o', 'url' => ['lhp/terima'],],
                    ],
                ],*/
                ['label' => 'Daftar LHP', 'icon' => 'list', 'url' => ['lhp/index'],],
                ['label' => 'Daftar LHPE', 'icon' => 'list', 'url' => ['lhpe/index'],],
                ['label' => 'Daftar Pegawai Bermasalah', 'icon' => 'user-times', 'url' => ['/pegawai-temuan/index'],],
                ['label' => 'MENU IRBAN', 'options' => ['class' => 'header']],
                ['label' => 'Irban', 'icon' => 'building', 'url' => ['/irban'],],
                ['label' => 'Instansi', 'icon' => 'building', 'url' => ['/instansi/index'],],
                ['label' => 'Pegawai', 'icon' => 'users', 'url' => ['/pegawai/index'],],

                ['label' => 'SISTEM', 'options' => ['class' => 'header']],
                ['label' => 'Kode Temuan', 'icon' => 'list', 'url' => ['/ref-temuan-jenis/index'],],
                [
                    'label' => 'Akun',
                    'icon' => 'user',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Irban', 'icon' => 'circle-o', 'url' => ['user/index','id_role'=>3],],
                        ['label' => 'Instansi', 'icon' => 'circle-o', 'url' => ['user/index','id_role'=>2],],
                        ['label' => 'Pegawai', 'icon' => 'circle-o', 'url' => ['user/index','id_role'=>4],],
                    ],
                ],
                ['label' => 'Ganti Password', 'icon' => 'key', 'url' => ['user/change-password']],
                ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],
            ],
        ]
    ) ?>
    <?php } elseif (User::isIrban()) { ?>
    <?= dmstr\widgets\Menu::widget(
        [
            'options' => ['class' => 'sidebar-menu'],
            'items' => [
                ['label' => 'MENU NAVIGASI', 'options' => ['class' => 'header']],
                ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['dashboard/index']],
                ['label' => 'Instansi', 'icon' => 'users', 'url' => ['instansi/index'],],
                ['label' => 'Surat Tugas', 'icon' => 'pencil-square-o', 'url' => ['/surat-tugas']],
                /*[
                    'label' => 'Lap. Hasil Pemeriksaan',
                    'icon' => 'pencil-square-o',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Daftar LHP', 'icon' => 'list', 'url' => ['lhp/index'],],
                        ['label' => 'Terima LHP', 'icon' => 'pencil-square-o', 'url' => ['#'],],
                    ],
                ],*/
                ['label' => 'Daftar LHP', 'icon' => 'list', 'url' => ['lhp/index'],],
                /*[
                    'label' => 'Tindak Lanjut',
                    'icon' => 'pencil-square-o',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Daftar Temuan', 'icon' => 'list', 'url' => ['/lhp-temuan'],],
                    ],
                ],*/
                ['label' => 'Daftar Temuan', 'icon' => 'list', 'url' => ['/lhp-temuan'],],
                ['label' => 'Pegawai', 'icon' => 'user', 'url' => ['pegawai/index'],],
                ['label' => 'MENU LAINNYA', 'options' => ['class' => 'header']],
                ['label' => 'Profil', 'icon' => 'user', 'url' => ['user/profil'],],
                ['label' => 'Ganti Password', 'icon' => 'key', 'url' => ['user/change-password']],
                ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],
            ],
        ]
    ) ?>
    <?php } elseif (User::isInstansi()) { ?>
    <?= dmstr\widgets\Menu::widget(
        [
            'options' => ['class' => 'sidebar-menu'],
            'items' => [
                ['label' => 'MENU NAVIGASI', 'options' => ['class' => 'header']],
                ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['dashboard/index']],
                /*['label' => 'Surat Tugas', 'icon' => 'pencil-square-o', 'url' => ['/pemeriksaan'],],*/
                ['label' => 'Daftar LHP', 'icon' => 'list', 'url' => ['lhp/index'],],
                ['label' => 'Daftar Temuan', 'icon' => 'list', 'url' => ['lhp-temuan/index'],],
                ['label' => 'MENU LAINNYA', 'options' => ['class' => 'header']],
                ['label' => 'Profil', 'icon' => 'user', 'url' => ['user/profil'],],
                ['label' => 'Ganti Password', 'icon' => 'key', 'url' => ['user/change-password']],
                ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],
            ],
        ]
    ) ?>
    <?php } elseif (User::isPegawai()) { ?>
    <?= dmstr\widgets\Menu::widget(
        [
            'options' => ['class' => 'sidebar-menu'],
            'items' => [
                ['label' => 'MENU NAVIGASI', 'options' => ['class' => 'header']],
                ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['dashboard/index']],

                ['label' => 'Lap. Hasil Pemeriksaan', 'icon' => 'list', 'url' => ['lhp/index'],],
                ['label' => 'Daftar Temuan', 'icon' => 'list', 'url' => ['/lhp-temuan'],],

                ['label' => 'MENU LAINNYA', 'options' => ['class' => 'header']],
                ['label' => 'Profil', 'icon' => 'user', 'url' => ['user/profil'],],
                ['label' => 'Ganti Password', 'icon' => 'key', 'url' => ['user/change-password']],
                ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],
            ],
        ]
    ) ?>
    <?php } ?>

    </section>

</aside>
