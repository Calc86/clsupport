<?php
/* @var $this AgentsController */
/* @var $model Agents */

$this->breadcrumbs=array(
	'Agents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Agents', 'url'=>array('index')),
	array('label'=>'Manage Agents', 'url'=>array('admin')),
);
?>

<h1>Create Agents</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>