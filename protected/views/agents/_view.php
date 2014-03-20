<?php
/* @var $this AgentsController */
/* @var $data Agents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agent')); ?>:</b>
	<?php echo CHtml::encode($data->agent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depart_id')); ?>:</b>
	<?php echo CHtml::encode($data->depart_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pin')); ?>:</b>
	<?php echo CHtml::encode($data->pin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login_unix')); ?>:</b>
	<?php echo CHtml::encode($data->last_login_unix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_logoff_unix')); ?>:</b>
	<?php echo CHtml::encode($data->last_logoff_unix); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login_at')); ?>:</b>
	<?php echo CHtml::encode($data->last_login_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_status')); ?>:</b>
	<?php echo CHtml::encode($data->login_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_comcenter_view')); ?>:</b>
	<?php echo CHtml::encode($data->last_comcenter_view); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_comcenter_login')); ?>:</b>
	<?php echo CHtml::encode($data->last_comcenter_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('panel_group')); ?>:</b>
	<?php echo CHtml::encode($data->panel_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_id')); ?>:</b>
	<?php echo CHtml::encode($data->number_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pre_iftime')); ?>:</b>
	<?php echo CHtml::encode($data->pre_iftime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pre_redirect')); ?>:</b>
	<?php echo CHtml::encode($data->pre_redirect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_busy')); ?>:</b>
	<?php echo CHtml::encode($data->post_busy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_noanswer')); ?>:</b>
	<?php echo CHtml::encode($data->post_noanswer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_noanswer_sec')); ?>:</b>
	<?php echo CHtml::encode($data->post_noanswer_sec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departs_id')); ?>:</b>
	<?php echo CHtml::encode($data->departs_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_new_as')); ?>:</b>
	<?php echo CHtml::encode($data->com_new_as); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_from')); ?>:</b>
	<?php echo CHtml::encode($data->time_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_to')); ?>:</b>
	<?php echo CHtml::encode($data->time_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_const')); ?>:</b>
	<?php echo CHtml::encode($data->is_const); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workday_id')); ?>:</b>
	<?php echo CHtml::encode($data->workday_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voicemail')); ?>:</b>
	<?php echo CHtml::encode($data->voicemail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cos_id')); ?>:</b>
	<?php echo CHtml::encode($data->cos_id); ?>
	<br />

	*/ ?>

</div>