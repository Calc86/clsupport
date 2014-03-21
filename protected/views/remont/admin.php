<?php
/* @var $this RemontController */
/* @var $model Remont */

$this->breadcrumbs=array(
	'Remonts'=>array('index'),
	'Manage',
);

$this->menu=array(
    array('label'=>'All status', 'url'=>array('all')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#remont-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Remonts</h1>

<?php
/* @var $user User */
$user = Yii::app()->user->getModel();

$m = date('m');
$status = $user->callStatus($m);

$this->renderPartial('_stat',array('status'=>$status,'m'=>$m));

?>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'remont-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'num',
		'date',
		//'admin_id',
		//'cdate',
		//'cadmin_id',
		'point',

		//'address',
		'problem',
		'p_when',
		'comment',
		'type',
		//'priority',

		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
