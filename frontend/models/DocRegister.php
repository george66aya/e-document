<?php

namespace frontend\models;

use Yii;
use backend\models\Government;
/**
 * This is the model class for table "doc_register".
 *
 * @property integer $id
 * @property string $register_number
 * @property string $register_date
 * @property string $register_from
 * @property string $register_to
 * @property string $register_subject
 * @property string $practice
 * @property string $reference
 * @property string $nortify
 */
class DocRegister extends \yii\db\ActiveRecord//\yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doc_register';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['register_number', 'register_date', 'register_from', 'register_to', 'register_subject'], 'required'],
            [['register_date'], 'safe'],
            [['register_number'], 'string', 'max' => 20],
            [['register_from', 'register_to', 'register_subject', 'practice', 'reference', 'nortify'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'เลขที่รับ',
            'register_number' => 'เลขที่หนังสือ',
            'register_date' => 'ลงวันที่',
            'register_from' => 'หนังสือจาก',
            'register_to' => 'เรียน',
            'register_subject' => 'เรื่อง',
            'practice' => 'การปฏิบัติ',
            'reference' => 'อ้างอิง',
            'nortify' => 'การแจ้งเตือน',
        ];
    }
    public function getGovernment()
    {
        return $this->hasOne(Government::className(),['government_id'=>'register_from']);
    }
}
