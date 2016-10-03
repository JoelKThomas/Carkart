<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seat".
 *
 * @property integer $seatid
 * @property integer $maxseat
 */
class Seat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['maxseat'], 'required'],
            [['maxseat'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'seatid' => 'Seat',
            'maxseat' => 'Maxseat',
        ];
    }
}
