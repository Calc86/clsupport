<?php
/* @var $this AgentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agents',
);

$this->menu=array(
	array('label'=>'Create Agents', 'url'=>array('create')),
	array('label'=>'Manage Agents', 'url'=>array('admin')),
);
?>

<h1>Agents</h1>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    //'dataProvider'=>$dataProvider,
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id',
        'agent',
        'name'
    ),
    /*'columns'=>array(
        'id',
        //'date',
        array(
            'name'=>'date',
            'filter'=>'',
            'value'=>'$data->date'
        ),
        'obj_type',
        'obj_id',
        'agent_id',
        'event',
        'param1',
        'param2',
        'param3',
    ),*/
    /*'columns'=>array(
        array(  //ID
            'name'=>'id',
            'type'=>'raw',
            'value'=>'CHtml::link($data->id,Yii::app()->createUrl("org/view",array("id"=>$data->primaryKey)))',
            'filter'=>"&nbsp",
        ),
        //'name',
        array(
            'name'=>'name',
            'type'=>'raw',
            'value'=>'CHtml::link($data->name,Yii::app()->createUrl("users/index",array("id"=>$data->primaryKey)))',
        ),
        'login',
        //'money',
        'fullname'
    ),*/
)); ?>
