<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agen".
 *
 * @property int $id
 * @property int $id_supervisor
 * @property string $nama
 */
class Agen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supervisor', 'nama'], 'required'],
            [['id_supervisor'], 'integer'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_supervisor' => 'Supervisor',
            'nama' => 'Nama',
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

    public function getSupervisor()
    {
        return $this->hasOne(Supervisor::class, ['id' => 'id_supervisor']);
    }
}
