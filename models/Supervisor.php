<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supervisor".
 *
 * @property int $id
 * @property string $nama
 */
class Supervisor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supervisor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
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
        ];
    }

    public static function getList()
    {
        $query = static::find();

        if (User::isSupervisor()){
            $query->andWhere(['id' => Yii::$app->user->identity->id_supervisor]);
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

        return $query->count();
    }

    public function getManyPolis()
    {
        return $this->hasMany(Polis::class, ['id_supervisor' => 'id']);
    }

    public static function getGrafikList()
    {   
        $query = static::find();

        if (User::isSupervisor()){
            $query->andWhere(['id' => Yii::$app->user->identity->id_supervisor]);
        }

        $data = [];
        foreach ($query->all() as $supervisor) {
            $data[] = [($supervisor->nama), (int) $supervisor->getManyPolis()->count()];
        }
        return $data;
    }

    /*public static function getListGrafik()
    {
        $list = [];
        foreach (self::find()->all() as $supervisor) {
            $list[] = $supervisor->nama;
        }

        return $list;
    }

    public static function getGrafikPolis()
    {
        $list = [];
        foreach (self::find()->all() as $supervisor) {
            $polis = $supervisor->getManyPolis();
            $list[] = (int) $polis->count();
        }

        return $list;
    }*/
}
