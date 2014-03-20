<?php
/* @var $this EventLogController */
/* @var $model EventLog */

$this->breadcrumbs=array(
	'Event Logs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EventLog', 'url'=>array('index')),
	array('label'=>'Create EventLog', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#event-log-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Event Logs</h1>

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
	'id'=>'event-log-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date',
		'obj_type',
		'obj_id',
		'agent_id',
		'event',
		/*
		'param1',
		'param2',
		'param3',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
