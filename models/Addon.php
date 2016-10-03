<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addon".
 *
 * @property integer $aid
 * @property string $aname
 */
class Addon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aname'], 'required'],
            [['aname'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Addon',
            'aname' => 'Aname',
        ];
    }
}
