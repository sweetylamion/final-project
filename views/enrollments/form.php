<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Students;
use app\models\Classes;

?>

<div class="enrollments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studentId')->dropDownList(ArrayHelper::map(
        Students::find()->asArray()->all(), 'id','lastname')) ?>

    <?= $form->field($model, 'classId')->dropDownList(ArrayHelper::map(
        Classes::find()->asArray()->all(), 'id','title')) ?>

    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
<div class="alert alert-warning">
    <?= $form->errorSummary($model);?>
    </div>
    <?php ActiveForm::end(); ?>

</div>