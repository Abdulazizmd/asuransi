<?php

use yii\helpers\Html;

use app\components\Helper;
use app\models\Kegiatan;
use app\models\User;

?>

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Daftar Kegiatan Minggu Ini</h2>
    </div>
    <div class="card-body">
        <div style="margin-bottom: 20px">
            <?= Html::a('<i class="fa fa-plus"></i> Tambah Kegiatan',
                ['/kegiatan/create'],['class'=>'btn btn-success btn-flat']); 
            ?>
        </div>
        <table class="table table-bordered">
            <tr>
                <th style="text-align: center">Tanggal Kegiatan</th>
                <th style="text-align: center">Nama Pegawai</th>
                <th style="text-align: center">Nama Kegiatan</th>
                <th style="text-align: center">Hasil yang Dicapai</th>
                <th style="text-align: center">Berkas</th>
                <th style="text-align: center"></th>
            </tr>
            <?php 

            $query = Kegiatan::find();
            $query->orderBy([
                'tanggal' => SORT_ASC,
            ]);

            if (User::isPegawai()) {
                $query->andWhere(['id_pegawai' => Yii::$app->user->identity->id_pegawai]);
            }

            //check the current day
            if(date('D')!='Mon')
            {    
             //take the last monday
              $awalMinggu = date('Y-m-d',strtotime('last Monday'));    

            }else{
                $awalMinggu = date('Y-m-d');   
            }

            //always next saturday

            if(date('D')!='Sat')
            {
                $akhirMinggu = date('Y-m-d',strtotime('next Saturday'));
            }else{

                $akhirMinggu = date('Y-m-d');
            }

            $query->andWhere('tanggal >= :tanggal1 AND tanggal <= :tanggal2 ', [':tanggal1' => $awalMinggu, ':tanggal2' => $akhirMinggu]);


            foreach($query->all() as $data) { ?>
            <tr>
                <td style="text-align: center"><?= Helper::getTanggal($data->tanggal); ?></td>
                <td><?= @$data->pegawai->nama; ?></td>
                <td style="text-align: center"><?= $data->kegiatan; ?></td>
                <td style="text-align: center"><?= $data->keluaran; ?></td>
                <td style="text-align: center"><?= $data->getLinkBerkas(); ?></td>
                <td style="text-align: center"><?= $data->getView() .' '. $data->getEdit() .' '. $data->getHapus(); ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>