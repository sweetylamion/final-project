<?php 

use yii\helpers\Html;


$this->title = "Classes";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Classes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
    	<th>Id</th>
        <th>Title</th>
        <th>Description</th>  
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/classes/view', 'id'=>$model->id]); ?>
        </td> 
        <td><?= $model->title ?></td>  
        <td><?= $model->description ?></td>  
    </tr>
    <?php endforeach; ?>
</table>