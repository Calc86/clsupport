<?php
/* @var $this EventLogController */
/* @var $model EventLog */

$this->breadcrumbs=array(
	'Event Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventLog', 'url'=>array('index')),
	array('label'=>'Manage EventLog', 'url'=>array('admin')),
);
?>

<h1>Create EventLog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>