<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "polis".
 *
 * @property int $id
 * @property int $no_polis
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
            [['no_polis', 'nama'], 'required'],
            [['no_polis', 'id_pekerjaan', 'uang_pertanggungan', 'id_jenis_asuransi', 'premi', 'id_agen', 'id_supervisor'], 'integer'],
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
            'no_polis' => 'No Polis',
            'nama' => 'Nama Pemegang Polis',
            'alamat' => 'Alamat',
            'id_pekerjaan' => 'Pekerjaan',
            'nama_tertanggung' => 'Nama Tertanggung',
            'uang_pertanggungan' => 'Uang Pertanggungan',
            'id_jenis_asuransi' => 'Jenis Asuransi',
            'premi' => 'Premi',
            'id_agen' => 'Agen',
            'id_supervisor' => 'Supervisor',
            'tanggal' => 'Tanggal',
        ];
    }

    public function beforeValidate()
    {
        $agen = $this->agen;
        if ($agen !== null) {
            $this->id_supervisor = $agen->id_supervisor;
        }

        return parent::beforeValidate();
    }

    public function getAgen()
    {
        return $this->hasOne(Agen::class, ['id' => 'id_agen']);
    }

    public function getSupervisor()
    {
        return $this->hasOne(Supervisor::class, ['id' => 'id_supervisor']);
    }

    public function getJenisAsuransi()
    {
        return $this->hasOne(JenisAsuransi::class, ['id' => 'id_jenis_asuransi']);
    }
}
