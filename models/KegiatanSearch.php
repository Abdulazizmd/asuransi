<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

use app\models\Kegiatan;
use app\models\User;

/**
 * KegiatanSearch represents the model behind the search form of `app\models\Kegiatan`.
 */
class KegiatanSearch extends Kegiatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_pegawai', 'id_user_buat'], 'integer'],
            [['tanggal', 'kegiatan', 'keluaran', 'berkas', 'waktu_buat'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */

    public function getQuerySearch($params)
    {
        $query = Kegiatan::find();

        $this->load($params);

        // add conditions that should always apply here
        if (User::isPegawai()) {
            $query->andWhere(['id_pegawai' => Yii::$app->user->identity->id_pegawai]);
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_pegawai' => $this->id_pegawai,
            'tanggal' => $this->tanggal,
            'waktu_buat' => $this->waktu_buat,
            'id_user_buat' => $this->id_user_buat,
        ]);

        $query->andFilterWhere(['like', 'kegiatan', $this->kegiatan])
            ->andFilterWhere(['like', 'keluaran', $this->keluaran])
            ->andFilterWhere(['like', 'berkas', $this->berkas]);

        return $query;
    }
    
    public function search($params)
    {
        $query = $this->getQuerySearch($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);        

        return $dataProvider;
    }


}
