<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_asuransi".
 *
 * @property int $id
 * @property string $nama
 * @property string $keterangan
 */
class JenisAsuransi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_asuransi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama', 'keterangan'], 'string', 'max' => 255],
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
            'keterangan' => 'Keterangan',
        ];
    }

    public static function getList()
    {
        $query = static::find();

        $list = [];

        foreach($query->all() as $data) {
            $list[$data->id] = $data->nama;
        }
        return $list;
    }
}
