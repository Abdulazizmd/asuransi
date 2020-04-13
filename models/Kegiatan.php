<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\web\UploadedFile;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

use app\models\Pegawai;


/**
 * This is the model class for table "kegiatan".
 *
 * @property int $id
 * @property int $id_pegawai
 * @property string $tanggal
 * @property string $kegiatan
 * @property string $keluaran
 * @property string $berkas
 * @property string $waktu_buat
 * @property int $id_user_buat
 */
class Kegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'tanggal', 'kegiatan'], 'required'],
            [['id_pegawai', 'id_user_buat', 'id_user_ubah'], 'integer'],
            [['tanggal', 'waktu_buat', 'waktu_ubah'], 'safe'],
            [['kegiatan', 'keluaran'], 'string'],
            [['berkas'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pegawai' => 'Pegawai',
            'tanggal' => 'Tanggal Kegiatan',
            'kegiatan' => 'Nama Kegiatan',
            'keluaran' => 'Hasil Yang Di Capai Hari Ini',
            'berkas' => 'Berkas',
            'waktu_buat' => 'Waktu Buat',
            'waktu_ubah' => 'Waktu Ubah',
            'id_user_buat' => 'User Pembuat',
            'id_user_ubah' => 'User Pengubah',
        ];
    }

    public function behaviors()
    {
        return [
            'blameableBehavior' => [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'id_user_buat',
                'updatedByAttribute' => 'id_user_ubah',
            ],
            'timestampBehavior' => [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'waktu_buat',
                'updatedAtAttribute' => 'waktu_ubah',
                'value' => date("Y-m-d H:i:s"),
            ],
        ];
    }

    public static function getCount()
    {
        $query = static::find();

        if (User::isPegawai()){
            $query->andWhere(['id_pegawai' => Yii::$app->user->identity->id_pegawai]);
        }

        return $query->count();
    }

    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'id_pegawai']);
    }

    public function getNamaPegawai()
    {
        return @$this->pegawai->nama;
    }

    public function getLinkBerkas()
    {   
        if ($this->berkas != '') {
            $url = Yii::getAlias('@web') . '/berkas/' . $this->berkas;
            return Html::a('<i class="fa fa-download"></i>',$url,[
                'data-toggle'=>'tooltip',
                'title'=>'Unduh Berkas'
            ]);
        } 
        
        return '<i class="fa fa-times" data-toggle="tooltip" title="Berkas Tidak Tersedia"></i>';
        
    }

    public function saveBerkas()
    {
        /* @var $file UploadedFile */
        $file = UploadedFile::getInstance($this, 'berkas');

        if (is_object($file)) {
            $this->berkas = $file->basename;
            $this->berkas .= Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s'));
            $this->berkas .= '.' . $file->extension;

            $path = Yii::getAlias('@app').'/web/berkas/'.$this->berkas;
            $file->saveAs($path, false);

        }
    }

    public function updateBerkas($berkas_lama=null)
    {
        /* @var $file UploadedFile */
        $file = UploadedFile::getInstance($this, 'berkas');

        if (is_object($file)) {
            $this->berkas = $file->basename;
            $this->berkas .= Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s'));
            $this->berkas .= '.' . $file->extension;

            $path = Yii::getAlias('@app').'/web/berkas/'.$this->berkas;
            $file->saveAs($path, false);

        } else {
            $this->berkas = $berkas_lama;
        }
    }

    public function getView()
    {
        return Html::a(
                    '<i class="fa fa-eye"></i>',
                    [
                        'kegiatan/view',
                        'id' => $this->id,
                    ],
                    [
                        'title' => 'Lihat Kegiatan',
                        'data-toggle' => 'tooltip',
                    ]
                );
    }

    public function getEdit()
    {
        return  Html::a(
                    '<i class="fa fa-edit"></i>',
                    [
                        'kegiatan/update',
                        'id' => $this->id,
                    ],
                    [
                        'title' => 'Edit Kegiatan',
                        'data-toggle' => 'tooltip',
                    ]
                );
    }

    public function getHapus()
    {
        return  Html::a(
                    '<i class="fa fa-trash"></i>',
                    [
                        'kegiatan/delete',
                        'id' => $this->id
                    ],
                    [
                        'title' => 'Hapus Kegiatan',
                        'data' => [
                            'toggle' => 'tooltip',
                            'confirm' => 'Yakin akan menghapus Kegiatan?',
                            'method' => 'post',
                        ],
                    ]
                );
    }

}
