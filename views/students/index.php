<?php 

use yii\helpers\Html;


$this->title = "Students";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Students', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>LastName</th>
        <th>FirstName</th>   
        <th>Address</th>
        </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/students/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->lastname ?></td>
        <td><?= $model->firstname ?></td>
        <td><?= $model->address ?></td>

    </tr>
    <?php endforeach; ?>
</table>