<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property integer $carid
 * @property string $carname
 * @property integer $bid
 * @property integer $fid
 * @property integer $price
 * @property integer $maxseat
 * @property integer $sid
 * @property integer $aid
 */
class Car extends \yii\db\ActiveRecord
{

    public $temp_image;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carname', 'bid', 'fid', 'price', 'maxseat', 'sid', 'aid'], 'required'],
            [['bid', 'fid', 'price', 'maxseat', 'sid', 'aid'], 'integer'],
            [['carname'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'carid' => 'Carid',
            'carname' => 'Carname',
            'bid' => 'Bid',
            'fid' => 'Fid',
            'price' => 'Price',
            'maxseat' => 'Maxseat',
            'sid' => 'Sid',
            'aid' => 'Aid',
        ];
    }
   public function getImageurl()
  { 
   return Yii::$app->request->BaseUrl . '/uploads/' . $this->carid . 'jpg' ;

   }

}
