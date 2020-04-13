<?php
/* @var $this \yii\web\Viewyiii */

use app\components\Helper;
use app\models\Kegiatan;
use app\models\Pegawai; 
use app\models\User;

?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            Rekap Data
        </h3>
    </div>
    <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>
                                <?= Kegiatan::getCount() ?>
                            </h3>

                            <p>Jumlah Kegiatan</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <a href="<?= yii\helpers\Url::to(['/kegiatan/index']) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php if (User::isAdmin()) { ?>
                    <div class="col-sm-3">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    <?= Pegawai::getCount() ?>
                                </h3>

                                <p>Jumlah Pegawai</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="<?= yii\helpers\Url::to(['/pegawai/index']) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
    </div><!-- .card-body -->
</div>

