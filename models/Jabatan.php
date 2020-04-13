<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan".
 *
 * @property int $id
 * @property string $nama
 * @property int $id_induk
 */
class Jabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['id_induk'], 'integer'],
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
            'nama' => 'Nama',
            'id_induk' => 'Id Induk',
        ];
    }

    public static function getList() {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id','nama');
    }
}
