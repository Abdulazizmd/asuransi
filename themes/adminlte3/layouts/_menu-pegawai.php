<?php

use app\models\UserRole;
use maswahyu\adminlte\widgets\Menu;

?>

<?= Menu::widget(['items' => [
    ['icon' => 'fa fa-tachometer-alt', 'label' => 'Dashboard', 'url' => ['/dashboard/index']],

    ['label' => 'Kegiatan', 'icon' => 'fa fa-check', 'url' => '#', 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Kegiatan', 'url' => ['/kegiatan/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Kegiatan', 'url' => ['/kegiatan/create']],
        /*['icon' => 'far fa-circle', 'label' => 'Statistik kegiatan', 'url' => ['/output/index']],*/
    ]],

    ['label' => 'SISTEM',['class' => 'nav-header']],
    ['label' => 'Ganti Password','icon' => 'fa fa-lock', 'url' => ['user/change-password']],
    ['label' => 'Logout','icon' => 'fa fa-sign-out-alt', 'url' => ['site/logout'], 'template' => '<a class="nav-link {activeCssClass}" href="{url}" data-method="post">{icon} <p>{label} {icon-right}</p></a>'],
]]); ?>