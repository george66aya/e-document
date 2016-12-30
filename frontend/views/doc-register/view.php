<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\DocRegister */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'ลงทะเบียนรับหนังสือ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-register-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'คุณต้องการที่จะลบรายการที่เลือกไว้ใช่หรือไม่ ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'register_number',
            'register_date',
            'register_from',
            'register_to',
            'register_subject',
            'practice',
            'reference',
            'nortify',
        ],
    ]) ?>

</div>
