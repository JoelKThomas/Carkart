<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "style".
 *
 * @property integer $sid
 * @property string $sname
 */
class Style extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'style';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sname'], 'required'],
            [['sname'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sid' => 'Style',
            'sname' => 'Sname',
        ];
    }
}
