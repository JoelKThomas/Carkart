<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fuel".
 *
 * @property integer $fid
 * @property string $fname
 */
class Fuel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fuel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname'], 'required'],
            [['fname'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fid' => 'Fuel',
            'fname' => 'Fname',
        ];
    }
}
