<?php

namespace app\models;

use Yii;
use app\models\Jabatan;
use app\models\Golongan;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id
 * @property string $nama
 * @property string $nip
 * @property int $id_jabatan
 * @property int $id_golongan
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nip', 'id_jabatan'], 'required'],
            [['id_jabatan', 'id_golongan'], 'integer'],
            [['nama'], 'string', 'max' => 255],
            [['nip'], 'string', 'max' => 20],
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
            'nip' => 'Nip',
            'id_jabatan' => 'Jabatan',
            'id_golongan' => 'Golongan',
        ];
    }

    public static function getList()
    {
        $query = static::find();

        if (User::isPegawai()) {
            $query->andWhere(['id' => User::getIdPegawai()]);
        }

        $list = [];

        foreach($query->all() as $data) {
            $list[$data->id] = $data->nama;
        }
        return $list;
    }

    public static function getCount()
    {
        $query = static::find();

        if (User::isPegawai()) {
            $query->andWhere(['id' => User::getIdPegawai()]);
        }

        return $query->count();
    }

    public function getJabatan()
    {
        return $this->hasOne(Jabatan::className(), ['id' => 'id_jabatan']);
    }

    public function getGolongan()
    {
        return $this->hasOne(Golongan::className(), ['id' => 'id_golongan']);
    }
}
