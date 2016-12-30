<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'E-Document System :: ระบบจัดการเอกสาร';
yii::$app->pgsql->open();
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>E-Document System</h1><br>
        <h2>ระบบจัดการเอกสาร</h2>
        <p class="lead">You have successfully created your Yii-powered application.</p>
        <h1>
            <?php
            echo Html::a('ลงทะเบียนรับหนังสือ', ['/doc-register']);
            ?>
        </h1>
    </div>


</div>
