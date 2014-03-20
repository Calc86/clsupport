<?php
/* @var $this AgentsController */
/* @var $model Agents */

$this->breadcrumbs=array(
	'Agents'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Agents', 'url'=>array('index')),
	array('label'=>'Create Agents', 'url'=>array('create')),
	array('label'=>'View Agents', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Agents', 'url'=>array('admin')),
);
?>

<h1>Update Agents <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>