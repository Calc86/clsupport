<?php
/* @var $this EventLogController */
/* @var $model EventLog */

$this->breadcrumbs=array(
	'Event Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventLog', 'url'=>array('index')),
	array('label'=>'Create EventLog', 'url'=>array('create')),
	array('label'=>'View EventLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventLog', 'url'=>array('admin')),
);
?>

<h1>Update EventLog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>