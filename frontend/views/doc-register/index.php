<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use \backend\models\Government;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DocRegisterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ลงทะเบียนรับหนังสือ';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php yii\widgets\Pjax::begin(['id' => 'grid-user-pjax', 'timeout' => 5000]) ?>


<h1><?= Html::encode($this->title) ?></h1>
<?php echo $this->render('_search', ['model' => $searchModel]); ?>

<p>

</p>
<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'tableOptions' => [
        'class' => 'table table-bordered  table-striped table-hover',
    ],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'register_number',
        'register_date',
        //'register_from',
        ['attribute'=>'register_from',
            'filter'=> ArrayHelper::map(Government::find()->all(),'government_id','government_name'),
            'value'=>function($model){return $model->government->government_name; }],
        
        'register_to',
        'register_subject',
        // 'practice',
        // 'reference',
        // 'nortify',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);
?>
<?php yii\widgets\Pjax::end() ?>
</div>
