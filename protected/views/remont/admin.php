<?php
/* @var $this RemontController */
/* @var $model Remont */

$this->breadcrumbs=array(
	'Remonts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Remont', 'url'=>array('index')),
	array('label'=>'Create Remont', 'url'=>array('create')),
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

$status = $user->callStatus();

function statusLine($cur,$max){

    $line = '____________________';

    for($i=0;$i<min($cur,20);$i++){
        $line[$i] = '=';
    }

    return $line;
}

?>

<table>
    <tr>
        <td><?=date("d.m.y")?></td>
        <td><?=date("1-t.m.Y")?></td>
    </tr>
    <tr>
        <td><?=Yii::app()->user->name?></td>
        <td><?=Remont::CALL_COST?>руб/зв => <?=$status['month']?>зв/<?=($status['month']*Remont::CALL_COST)?>руб</td>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <td>План</td>
                    <td><?=$status['day']?>/<?=Remont::CALL_PLAN?> <?=(statusLine($status['day'],Remont::CALL_PLAN))?> <?=($status['day']*Remont::CALL_COST)?>/<?=(Remont::CALL_PLAN*Remont::CALL_COST)?> руб.</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

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
