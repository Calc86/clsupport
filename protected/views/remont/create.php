<?php
/* @var $this RemontController */
/* @var $model Remont */

$this->breadcrumbs=array(
	'Remonts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Remont', 'url'=>array('index')),
	array('label'=>'Manage Remont', 'url'=>array('admin')),
);
?>

<h1>Create Remont</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>