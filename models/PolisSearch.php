<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Polis;

/**
 * PolisSearch represents the model behind the search form of `app\models\Polis`.
 */
class PolisSearch extends Polis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_pekerjaan', 'uang_pertanggungan', 'id_jenis_asuransi', 'premi', 'id_agen', 'id_supervisor'], 'integer'],
            [['nama', 'alamat', 'nama_tertanggung', 'tanggal'], 'safe'],
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
        $query = Polis::find();

        $this->load($params);

        // add conditions that should always apply here

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_pekerjaan' => $this->id_pekerjaan,
            'uang_pertanggungan' => $this->uang_pertanggungan,
            'id_jenis_asuransi' => $this->id_jenis_asuransi,
            'premi' => $this->premi,
            'id_agen' => $this->id_agen,
            'id_supervisor' => $this->id_supervisor,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nama_tertanggung', $this->nama_tertanggung]);

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
