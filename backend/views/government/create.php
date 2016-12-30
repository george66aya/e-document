<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Government */

$this->title = 'เพิ่มหน่วยงาน';
$this->params['breadcrumbs'][] = ['label' => 'Governments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="government-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
