<?php


namespace app\components;


use app\models\Kegiatan;
use app\models\Output;
use app\models\Suboutput;
use Yii;

class Session
{
    public static function isUnit()
    {
        return @Yii::$app->user->identity->id_user_role == 2;
    }

    public static function getIdUnit()
    {
        return @Yii::$app->user->identity->id_unit;
    }

    public static function getListIdOutput()
    {
        $query = Output::find();
        $query->andWhere(['id_kegiatan'=>Session::getListIdKegiatan()]);
        $query->select('id');
        return $query->column();
    }

    public static function getListIdSuboutput()
    {
        $query = Suboutput::find();
        $query->andWhere(['id_output'=>Session::getListIdOutput()]);
        $query->select('id');
        return $query->column();
    }

    public static function getListIdKegiatan()
    {
        $query = Kegiatan::find();
        $query->andWhere(['id_unit'=>Session::getIdUnit()]);
        $query->select('id');
        return $query->column();
    }
}
