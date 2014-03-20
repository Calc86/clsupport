<?php
/* @var $this RemontController */
/* @var $data Remont */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('num')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->num), array('view', 'id'=>$data->num)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cdate')); ?>:</b>
	<?php echo CHtml::encode($data->cdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cadmin_id')); ?>:</b>
	<?php echo CHtml::encode($data->cadmin_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point')); ?>:</b>
	<?php echo CHtml::encode($data->point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('problem')); ?>:</b>
	<?php echo CHtml::encode($data->problem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_when')); ?>:</b>
	<?php echo CHtml::encode($data->p_when); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priority')); ?>:</b>
	<?php echo CHtml::encode($data->priority); ?>
	<br />

</div>