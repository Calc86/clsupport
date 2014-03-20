<?php
/* @var $this StatController */
/* @var $model EventLog */
?>

<div class="form search">

    <?php
    echo CHtml::beginForm();

    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
        'name'=>'date[start]',
        'value'=>$model->date_start,
        // additional javascript options for the date picker plugin
        'options'=>array(
            /*'showAnim'=>'fold',*/
            'dateFormat'=>'yy-mm-dd',
            'defaultDate'=>$model->date_start,
        ),
    ));

    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
        'name'=>'date[end]',
        'value'=>$model->date_end,
        // additional javascript options for the date picker plugin
        'options'=>array(
            /*'showAnim'=>'fold',*/
            'dateFormat'=>'yy-mm-dd',
            'defaultDate'=>$model->date_end,
        ),
    ));
    ?>

    <?php
    echo CHtml::submitButton('Search');

    echo CHtml::endForm();

    ?>

</div><!-- form -->


<?php
// this is the date picker
/*$dateisOn = $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        // 'model'=>$model,
        'name' => 'Event[date_first]',
        'language' => 'id',
        'value' => $model->date_first,
        // additional javascript options for the date picker plugin
        'options' => array(
            'showAnim' => 'fold',
            'dateFormat' => 'yy-mm-dd',
            'changeMonth' => 'true',
            'changeYear' => 'true',
            'constrainInput' => 'false',
        ),
        'htmlOptions' => array(
            'style' => 'height:20px;width:70px;',
        ),
// DONT FORGET TO ADD TRUE this will create the datepicker return as string
    ), true) . '<br> To <br> ' . $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        // 'model'=>$model,
        'name' => 'Event[date_last]',
        'language' => 'id',
        'value' => $model->date_last,
        // additional javascript options for the date picker plugin
        'options' => array(
            'showAnim' => 'fold',
            'dateFormat' => 'yy-mm-dd',
            'changeMonth' => 'true',
            'changeYear' => 'true',
            'constrainInput' => 'false',
        ),
        'htmlOptions' => array(
            'style' => 'height:20px;width:70px',
        ),
// DONT FORGET TO ADD TRUE this will create the datepicker return as string
    ), true);*/

?>