<?php 

use yii\helpers\Html;


$this->title = "Enrollments";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create enrollment.</span>
<?php else: ?>
        <?= Html::a('Create Enrollments', ['create'], ['class' => 'btn btn-success']) ?>
<?php endif; ?> 
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>StudentId</th>
        <th>ClassId</th>
    </tr>
    <?php foreach($pro as $models) : ?>
    <tr>
    
    <td>
            <?= Html::a($models->id, ['/enrollments/view', 'id'=>$models->id]); ?>
            <td><?= $models->studentId ?></td>
            <td><?= $models->classId ?></td>       
        </td> 
    </tr>
    <?php endforeach; ?>
</table>