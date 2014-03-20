<?php
/* @var $this EventLogController */
/* @var $model EventLog */

$this->breadcrumbs=array(
	'Event Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EventLog', 'url'=>array('index')),
	array('label'=>'Create EventLog', 'url'=>array('create')),
	array('label'=>'Update EventLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EventLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventLog', 'url'=>array('admin')),
);
?>

<h1>View EventLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date',
		'obj_type',
		'obj_id',
		'agent_id',
		'event',
		'param1',
		'param2',
		'param3',
	),
)); ?>
