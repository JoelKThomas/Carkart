<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Car;

/**
 * CarSearch represents the model behind the search form about `app\models\Car`.
 */
class CarSearch extends Car
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carid', 'bid', 'fid', 'price', 'maxseat', 'sid', 'aid'], 'integer'],
            [['carname'], 'safe'],
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
    public function search($params)
    {
        $query = Car::find();
          $query = (new \yii\db\Query())
        ->select(
            [  'carid',
              'carname AS `Car Name`', 
              'brand.bname AS `Brand`',
              'fuel.fname AS `Fuel`',
              'price AS `price`',
              'maxseat AS `max seat`',
              'style.sname AS `Style`',
              'addon.aname AS `Addon`',])
        ->from('car')
        ->join('LEFT JOIN','brand','car.bid=brand.bid')
        ->join('LEFT JOIN','fuel','car.fid=fuel.fid')
        ->join('LEFT JOIN','style','car.sid=style.sid')
        ->join('LEFT JOIN','addon','car.aid=addon.aid');



        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'carid' => $this->carid,
            'car.bid' => $this->bid,
            'car.fid' => $this->fid,
            'car.sid' => $this->sid,
            'car.aid' => $this->aid,
        ]);
             

    if(isset($this->maxseat) && $this->maxseat!= '' ) 
    {
      switch($this->maxseat)
      {
        case 1:$query->andFilterWhere(['maxseat' => 4]);
        break;
        case 2: $query->andFilterWhere(['maxseat' => 6]);
        break;
      }
}
    if(isset($this->price) && $this->price!= '' ) 
    {
      switch($this->price)
      {
        case 1:  $query->andFilterWhere(['<', 'price', 500000]);
        break;
        case 2:  $query->andFilterWhere(['<=', 'price', 1000000]);
        break;
        case 3:   $query->andFilterWhere(['>', 'price', 1000000]);
         break;
      }
}
        $query->andFilterWhere(['like', 'carname', $this->carname]);

        return $dataProvider;
    }
}
