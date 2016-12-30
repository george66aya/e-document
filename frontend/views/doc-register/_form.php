<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

use yii\helpers\Url;
use yii\helpers\ArrayHelper;

use kartik\widgets\DepDrop;
use backend\models\Government;
/* @var $this yii\web\View */
/* @var $model frontend\models\DocRegister */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-register-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'register_number')->textInput(['maxlength' => true]) ?>

    <?php /* <?= $form->field($model, 'register_date')->textInput() ?> */ ?>
    <?=$form->field($model, 'register_date')->widget(DatePicker::classname(), [
        'name' => 'register_date',
        'value' => date('yyyy-mm-dd', strtotime('+2 days')),
        'options' => ['placeholder' => 'กรุณาเลือกวันที่รับหนังสือ ...',],
        'language'=>'TH-th',
        
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true,
            
        ]
    ])
    ?>

    <?= $form->field($model, 'register_from')->dropdownList(
            ArrayHelper::map(Government::find()->all(),
            'government_id',
            'government_name'),
            [
                'id'=>'ddl-government',
                'prompt'=>'เลือกหน่วยงานที่ส่งหนังสือมา'
]); ?>

    <?= $form->field($model, 'register_to')->dropDownList([
        'ผู้อำนวยการโรงพยาบาลบางไทร'=>'ผู้อำนวยการโรงพยาบาลบางไทร'
    ]) ?>

    <?= $form->field($model, 'register_subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'practice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nortify')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
