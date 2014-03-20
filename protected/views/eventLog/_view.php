<?php
/* @var $this EventLogController */
/* @var $data EventLog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obj_type')); ?>:</b>
	<?php echo CHtml::encode($data->obj_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obj_id')); ?>:</b>
	<?php echo CHtml::encode($data->obj_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agent_id')); ?>:</b>
	<?php echo CHtml::encode($data->agent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event')); ?>:</b>
	<?php echo CHtml::encode($data->event); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('param1')); ?>:</b>
	<?php echo CHtml::encode($data->param1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('param2')); ?>:</b>
	<?php echo CHtml::encode($data->param2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('param3')); ?>:</b>
	<?php echo CHtml::encode($data->param3); ?>
	<br />

	*/ ?>

</div>