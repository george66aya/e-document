<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "government".
 *
 * @property integer $government_id
 * @property string $government_name
 */
class Government extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'government';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['government_name'], 'required'],
            [['government_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'government_id' => 'รหัสหน่วยงาน',
            'government_name' => 'ชื่อหน่วยงาน',
        ];
    }
}
