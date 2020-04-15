<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "polis".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property int $id_pekerjaan
 * @property string $nama_tertanggung
 * @property int $uang_pertanggungan
 * @property int $id_jenis_asuransi
 * @property int $premi
 * @property int $id_agen
 * @property int $id_supervisor
 * @property string $tanggal
 */
class Polis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'polis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['id_pekerjaan', 'uang_pertanggungan', 'id_jenis_asuransi', 'premi', 'id_agen', 'id_supervisor'], 'integer'],
            [['tanggal'], 'safe'],
            [['nama', 'alamat', 'nama_tertanggung'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'id_pekerjaan' => 'Id Pekerjaan',
            'nama_tertanggung' => 'Nama Tertanggung',
            'uang_pertanggungan' => 'Uang Pertanggungan',
            'id_jenis_asuransi' => 'Id Jenis Asuransi',
            'premi' => 'Premi',
            'id_agen' => 'Id Agen',
            'id_supervisor' => 'Id Supervisor',
            'tanggal' => 'Tanggal',
        ];
    }
}
