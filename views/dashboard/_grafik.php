<?php

use miloschuman\highcharts\Highcharts;

use app\models\Supervisor;
use app\models\JenisAsuransi;


?>

<div class="row">
    <div class="col-sm-6">
        <div class="card card-primary">
            <div class="card-header with-border">
                <h3 class="card-title">Grafik Jumlah Polis</h3>
            </div>
            <div class="card-body">
                <?= Highcharts::widget([
                    'options' => [
                        'credits' => true,
                        'title' => ['text' => 'Grafik Jumlah Polis '],
                        'subtitle' => ['text' => 'Jumlah Polis'],
                        'exporting' => ['enabled' => true],
                        'xAxis' => [
                            'categories' => Supervisor::getListGrafik(),
                        ],
                        'yAxis' => [
                            'title' => [
                                'text' => 'Polis'
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'column',
                                'name' => 'Jumlah Polis',
                                'data' => Supervisor::getGrafikPolis(),
                                'showInLegend' => false,
                                'colorByPoint' => true
                            ],
                        ]
                    ]
                ]) ?>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card card-primary">
            <div class="card-header with-border">
                <h3 class="card-title">Diagram Jumlah Polis Berdasarkan Supervisor</h3>
            </div>
            <div class="card-body">
                <?= Highcharts::widget([
                    'options' => [
                        'credits' => false,
                        'title' => false,
                        'exporting' => ['enabled' => true],
                        'plotOptions' => [
                            'pie' => [
                                'cursor' => 'pointer',
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'pie',
                                'name' => 'Polis',
                                'data' => Supervisor::getGrafikList(),
                            ],
                        ],
                    ],
                ]);?>
            </div>
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="card card-primary">
            <div class="card-header with-border">
                <h3 class="card-title">Diagram Jumlah Polis Berdasarkan Jenis Asuransi</h3>
            </div>
            <div class="card-body">
                <?= Highcharts::widget([
                    'options' => [
                        'credits' => false,
                        'title' => false,
                        'exporting' => ['enabled' => true],
                        'plotOptions' => [
                            'pie' => [
                                'cursor' => 'pointer',
                            ],
                        ],
                        'series' => [
                            [
                                'type' => 'pie',
                                'name' => 'Polis',
                                'data' => JenisAsuransi::getGrafikList(),
                            ],
                        ],
                    ],
                ]);?>
            </div>
        </div>
    </div>
</div>