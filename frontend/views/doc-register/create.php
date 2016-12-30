<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DocRegister */

$this->title = 'Create Doc Register';
$this->params['breadcrumbs'][] = ['label' => 'Doc Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-register-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
