<?php
/* @var $this AgentsController */
/* @var $model Agents */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agent'); ?>
		<?php echo $form->textField($model,'agent',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'depart_id'); ?>
		<?php echo $form->textField($model,'depart_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pin'); ?>
		<?php echo $form->textField($model,'pin',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_login_unix'); ?>
		<?php echo $form->textField($model,'last_login_unix',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_logoff_unix'); ?>
		<?php echo $form->textField($model,'last_logoff_unix',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_login_at'); ?>
		<?php echo $form->textField($model,'last_login_at',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_status'); ?>
		<?php echo $form->textField($model,'login_status',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_comcenter_view'); ?>
		<?php echo $form->textField($model,'last_comcenter_view'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_comcenter_login'); ?>
		<?php echo $form->textField($model,'last_comcenter_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'panel_group'); ?>
		<?php echo $form->textField($model,'panel_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number_id'); ?>
		<?php echo $form->textField($model,'number_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pre_iftime'); ?>
		<?php echo $form->textField($model,'pre_iftime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pre_redirect'); ?>
		<?php echo $form->textField($model,'pre_redirect'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_busy'); ?>
		<?php echo $form->textField($model,'post_busy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_noanswer'); ?>
		<?php echo $form->textField($model,'post_noanswer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_noanswer_sec'); ?>
		<?php echo $form->textField($model,'post_noanswer_sec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departs_id'); ?>
		<?php echo $form->textField($model,'departs_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_new_as'); ?>
		<?php echo $form->textField($model,'com_new_as',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_from'); ?>
		<?php echo $form->textField($model,'time_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_to'); ?>
		<?php echo $form->textField($model,'time_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_const'); ?>
		<?php echo $form->textField($model,'is_const'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workday_id'); ?>
		<?php echo $form->textField($model,'workday_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'voicemail'); ?>
		<?php echo $form->textField($model,'voicemail',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cos_id'); ?>
		<?php echo $form->textField($model,'cos_id',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->