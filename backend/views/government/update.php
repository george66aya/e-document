<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Government */

$this->title = 'Update Government: ' . $model->government_id;
$this->params['breadcrumbs'][] = ['label' => 'Governments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->government_id, 'url' => ['view', 'id' => $model->government_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="government-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
