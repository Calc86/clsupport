<?php
/* @var $this RemontController */
/* @var $model Remont */

$this->breadcrumbs=array(
	'Remonts'=>array('index'),
	$model->num=>array('view','id'=>$model->num),
	'Update',
);

$this->menu=array(
	array('label'=>'List Remont', 'url'=>array('index')),
	array('label'=>'Create Remont', 'url'=>array('create')),
	array('label'=>'View Remont', 'url'=>array('view', 'id'=>$model->num)),
	array('label'=>'Manage Remont', 'url'=>array('admin')),
);
?>

<h1>Update Remont <?php echo $model->num; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>