<?php
/* @var $this EventLogController */
/* @var $model CActiveModel for filter */

$this->breadcrumbs=array(
	'Event Logs',
);

$this->menu=array(
	array('label'=>'Create EventLog', 'url'=>array('create')),
	array('label'=>'Manage EventLog', 'url'=>array('admin')),
);
?>

<h1>Event Logs</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ ?>

<?php
    $this->renderPartial('_date', array('model'=>$model));
?>

<?php

$dateFilter = '';

$dateFilter.=$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'EventLog[date_start]',
    'value'=>$model->date_start,
    // additional javascript options for the date picker plugin
    'options'=>array(
        /*'showAnim'=>'fold',*/
        'dateFormat'=>'yy-mm-dd',
        //'defaultDate'=>$model->date_start,
    ),
),true);

$dateFilter.=$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'EventLog[date_end]',
    'value'=>$model->date_end,
    // additional javascript options for the date picker plugin
    'options'=>array(
        /*'showAnim'=>'fold',*/
        'dateFormat'=>'yy-mm-dd',
        //'defaultDate'=>$model->date_end,
    ),
),true);

$dataProvider = $model->search();
$dataProvider2 = clone $dataProvider;
$dataProvider3 = clone $dataProvider;

$this->widget('zii.widgets.grid.CGridView', array(
    //'dataProvider'=>$dataProvider,
    'dataProvider'=>$dataProvider,
    'filter'=>$model,
    'afterAjaxUpdate'=>"function() {
        jQuery('#EventLog_date_start').datepicker(jQuery.extend({showMonthAfterYear:false},jQuery.datepicker.regional['id'], {'dateFormat':'yy-mm-dd'}));
        jQuery('#EventLog_date_end').datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['id'], {'dateFormat':'yy-mm-dd'}));
    }",
    'columns'=>array(
        'id',
        //'date',
        array(
            'name'=>'date',
            'filter'=>$dateFilter,
            'value'=>'date("Y-m-d H:i:s",$data->date)'
        ),
        'obj_type',
        'obj_id',
        'agent_id',
        'event',
        'param1',
        'param2',
        'param3',
    ),
));

$hour_column = function($name){
    //$value = $$name;
    //$value = 'round($data["'.$name.'"]/60/60,2)';
    $value = 'ceil($data["'.$name.'"]/60/60)';
    return array(
        //'name'=>$name,
        'header'=>$name." [часов]",
        'value'=>$value,
        'cssClassExpression'=>'"hour"'
    );
};

$sec_column = function($name){
    //$value = $$name;
    $value = '$data["'.$name.'"]';
    return array(
        //'name'=>$name,
        'header'=>$name." [секунд]",
        'value'=>$value,
        'cssClassExpression'=>'"sec"'
    );
};

//Agents::model()->findByAttributes(array("agent"=>$data->agent))->name;

$this->widget('zii.widgets.grid.CGridView', array(
    //'dataProvider'=>$dataProvider,
    //'htmlOptions' => array('class' => 'items work'),
    'dataProvider'=>$model->workTime($dataProvider2),
    //'filter'=>$model,
    'columns'=>array(
        'id',
        //'agent',
        array(
            'name'=>'agent',
            'value'=>'Agents::model()->findByAttributes(array("agent"=>$data["agent"]))->name."(".$data["agent"].")"',
        ),
        $hour_column('all'),
        $hour_column('day'),
        $hour_column('night'),
        $sec_column('all'),
        $sec_column('day'),
        $sec_column('night'),
        //'date',
        /*array(
            'name'=>'date',
            'filter'=>$dateFilter,
            'value'=>'date("Y-m-d H:i:s",$data->date)'
        ),*/
    ),
));

//таблица работы операторов
$start = strtotime($model->date_start);
//$end = $start + ((int) date("t",$start))*60*60*24;
$end = strtotime($model->date_end)+60*60*24;
$grid = new GridDate($start,$end,GridDate::STEP_DAY);

$workers = $model->workers($dataProvider3);
$workList = $model->workList($workers);
$workTable = $model->workTable($workList,GridDate::STEP_DAY);

$sum = array();
foreach($workTable as $agent=>$time)
    $sum[$agent] = array_sum($time);

$i=0;
$columns = array();
$workMonth = array();
$colHead = array();
foreach($workTable as $agent=>$time){
    $i++;
    $col1 = array('id'=>$i);
    //таблица месяца
    $key = array();
    $val = array();
    $j = 0;
    foreach($grid->getGrid() as $time=>$sec){
        $header = date('d',$time).'d';
        $colHead[$header] = $j++;
        $key[] = $header;
        //$val[] = 'myval';   //тут нужно будет заполнять нашими значениями для конкретного агента
        if(isset($workTable[$agent][$time])) $val[]=$workTable[$agent][$time];
        else $val[]=0;
    }
    //print_r($key);
    //print_r($val);
    $workMonth[$i-1] = array_combine($key,$val);
    $workMonth[$i-1]['id'] = $i;
    $workMonth[$i-1]['agent'] = $agent;
    $workMonth[$i-1]['sum'] = $sum[$agent];
}

//print_r($workMonth);

$dataProvider4 = new CArrayDataProvider($workMonth);

//print_r($dataProvider4);
$colHead = array_flip($colHead);
//print_r($colHead);

$columns = function($colHead){
    $cols = array(
        'id',
        'agent',
    );

    foreach($colHead as $header){
        $value = '$data["'.$header.'"] ? number_format(round($data["'.$header.'"]/60/60,0), 0,",","") : "&nbsp;"';
        $cols[] = array(
            'header' => $header,
            'type' => 'raw',
            'value' => $value,
        );
    }

    $cols[] = array(
        'header' => '&nbsp;',
        'type' => 'raw',
        'value' => '"&nbsp;"',
    );

    $cols[] = array(
        'header' => 'sum [часы]',
        'value' => 'ceil($data["sum"]/60/60)',
    );

    $cols[] = array(
        'header' => 'sum [секунды]',
        'value' => '$data["sum"]',
    );

    return $cols;
};

//$cols = $columns($colHead);

//print_r($cols);

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider4,
    'columns'=>$columns($colHead),
));



?>

