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
    ['label' => 'Agen', 'icon' => 'fa fa-users', 'url' => '#', 'items' => [
        ['icon' => 'far fa-circle', 'label' => 'List Agen', 'url' => ['/agen/index']],
        ['icon' => 'far fa-circle', 'label' => 'Tambah Agen', 'url' => ['/agen/create']],
    ]],

    ['label' => 'SISTEM',['class' => 'nav-header']],
    ['label' => 'Ganti Password','icon' => 'fa fa-lock', 'url' => ['user/change-password']],
    ['label' => 'Logout','icon' => 'fa fa-sign-out-alt', 'url' => ['site/logout'], 'template' => '<a class="nav-link {activeCssClass}" href="{url}" data-method="post">{icon} <p>{label} {icon-right}</p></a>'],
]]); ?>