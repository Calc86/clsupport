<?php
/* @var $this RemontController */
/* @var $model Remont */

$this->breadcrumbs=array(
	'Remonts'=>array('index'),
	$model->num,
);

$this->menu=array(
	array('label'=>'List Remont', 'url'=>array('index')),
	array('label'=>'Create Remont', 'url'=>array('create')),
	array('label'=>'Update Remont', 'url'=>array('update', 'id'=>$model->num)),
	array('label'=>'Delete Remont', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->num),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Remont', 'url'=>array('admin')),
);
?>

<h1>View Remont #<?php echo $model->num; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'num',
		'date',
		'admin_id',
		'cdate',
		'cadmin_id',
		'point',
		'address',
		'problem',
		'p_when',
		'comment',
		'type',
		'priority',
	),
)); ?>
