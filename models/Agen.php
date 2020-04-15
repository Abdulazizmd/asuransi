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
            'id_supervisor' => 'Id Supervisor',
            'nama' => 'Nama',
        ];
    }
}
