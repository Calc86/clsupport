<?php
/* @var $this AgentsController */
/* @var $model Agents */

$this->breadcrumbs=array(
	'Agents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Agents', 'url'=>array('index')),
	array('label'=>'Create Agents', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#agents-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Agents</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'agents-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'agent',
		'depart_id',
		'pin',
		'name',
		'last_login_unix',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
