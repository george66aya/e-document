<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GovernmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Governments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="government-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มหน่วยงาน', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'government_id',
            'government_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
