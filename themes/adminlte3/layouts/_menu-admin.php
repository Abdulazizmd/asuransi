<?php

use app\models\UserRole;
use maswahyu\adminlte\widgets\Menu;

?>

<?= Menu::widget(['items' => [
    ['icon' => 'fa fa-tachometer-alt', 'label' => 'Dashboard', 'url' => ['/dashboard/index']],

    ['label' => 'Polis', 'icon' => 'fa fa-handshake', 'url' => '#', 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Polis', 'url' => ['/polis/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Polis', 'url' => ['/polis/create']],
        /*['icon' => 'far fa-circle', 'label' => 'Statistik kegiatan', 'url' => ['/output/index']],*/
    ]],

    ['label' => 'DATA MASTER',['class' => 'nav-header']],
    ['label' => 'Supervisor', 'icon' => 'fa fa-graduation-cap', 'url' => '#', 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Supervisor', 'url' => ['/supervisor/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Supervisor', 'url' => ['/supervisor/create']],
    ]],

    ['label' => 'Agen', 'icon' => 'fa fa-users', 'url' => '#', 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Agen', 'url' => ['/agen/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Agen', 'url' => ['/agen/create']],
    ]],

    ['label' => 'Jenis Asuransi', 'icon' => 'fa fa-list', 'url' => '#', 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Jenis Asuransi', 'url' => ['/jenis-asuransi/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Jenis Asuransi', 'url' => ['/jenis-asuransi/create']],
    ]],

    ['label' => 'Pekerjaan', 'icon' => 'fa fa-briefcase', 'url' => '#', 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Pekerjaan', 'url' => ['/pekerjaan/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Pekerjaan', 'url' => ['/pekerjaan/create']],
    ]],

    ['label' => 'SISTEM',['class' => 'nav-header']],
    ['icon' => 'fa fa-user', 'label' => 'User', 'url'=>'#', 'items' => [
        ['label'=>'Admin','icon'=>'fa fa-circle','url'=>['/user/index','id_user_role'=>UserRole::ADMIN]],
        ['label'=>'Pegawai','icon'=>'fa fa-circle','url'=>['/user/index','id_user_role'=>UserRole::PEGAWAI]],
    ]],

    ['label' => 'Logout','icon' => 'fa fa-sign-out-alt', 'url' => ['site/logout'], 'template' => '<a class="nav-link {activeCssClass}" href="{url}" data-method="post">{icon} <p>{label} {icon-right}</p></a>'],
]]); ?>