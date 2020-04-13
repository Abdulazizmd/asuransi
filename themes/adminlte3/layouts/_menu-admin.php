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

    ['label' => 'DATA MASTER',['class' => 'nav-header']],
    ['label' => 'Pegawai', 'icon' => 'fa fa-users', 'url' => ['/pegawai/create'], 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Pegawai', 'url' => ['/pegawai/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Pegawai', 'url' => ['/pegawai/create']],
    ]],

    ['label' => 'Jabatan', 'icon' => 'fa fa-graduation-cap', 'url' => ['/jabatan/index'], 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Jabatan', 'url' => ['/jabatan/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Jabatan', 'url' => ['/jabatan/create']],
    ]],

    ['label' => 'Golongan', 'icon' => 'fa fa-cubes', 'url' => ['/golongan/index'], 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Golongan', 'url' => ['/golongan/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Golongan', 'url' => ['/golongan/create']],
    ]],

    ['label' => 'SISTEM',['class' => 'nav-header']],
    ['icon' => 'fa fa-user', 'label' => 'User', 'url'=>'#', 'items' => [
        ['label'=>'Admin','icon'=>'fa fa-circle','url'=>['/user/index','id_user_role'=>UserRole::ADMIN]],
        ['label'=>'Pegawai','icon'=>'fa fa-circle','url'=>['/user/index','id_user_role'=>UserRole::PEGAWAI]],
    ]],

    ['label' => 'Logout','icon' => 'fa fa-sign-out-alt', 'url' => ['site/logout'], 'template' => '<a class="nav-link {activeCssClass}" href="{url}" data-method="post">{icon} <p>{label} {icon-right}</p></a>'],
]]); ?>