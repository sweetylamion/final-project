<?php

use yii\helpers\Html;


$this->title = 'Create Enrollments';
$this->params['breadcrumbs'][] = ['label' => 'enrollments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enrollments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>