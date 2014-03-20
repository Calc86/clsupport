<?php
/* @var $this AgentsController */
/* @var $model Agents */

$this->breadcrumbs=array(
	'Agents'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Agents', 'url'=>array('index')),
	array('label'=>'Create Agents', 'url'=>array('create')),
	array('label'=>'Update Agents', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Agents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Agents', 'url'=>array('admin')),
);
?>

<h1>View Agents #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'agent',
		'depart_id',
		'pin',
		'name',
		'last_login_unix',
		'last_logoff_unix',
		'last_login_at',
		'login_status',
		'last_comcenter_view',
		'last_comcenter_login',
		'panel_group',
		'number_id',
		'pre_iftime',
		'pre_redirect',
		'post_busy',
		'post_noanswer',
		'post_noanswer_sec',
		'type',
		'departs_id',
		'com_new_as',
		'time_from',
		'time_to',
		'is_const',
		'workday_id',
		'voicemail',
		'cos_id',
	),
)); ?>
