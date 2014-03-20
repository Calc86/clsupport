<?php
/* @var $this AgentsController */
/* @var $model Agents */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agents-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'agent'); ?>
		<?php echo $form->textField($model,'agent',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'agent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'depart_id'); ?>
		<?php echo $form->textField($model,'depart_id'); ?>
		<?php echo $form->error($model,'depart_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pin'); ?>
		<?php echo $form->textField($model,'pin',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'pin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_login_unix'); ?>
		<?php echo $form->textField($model,'last_login_unix',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'last_login_unix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_logoff_unix'); ?>
		<?php echo $form->textField($model,'last_logoff_unix',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'last_logoff_unix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_login_at'); ?>
		<?php echo $form->textField($model,'last_login_at',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'last_login_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_status'); ?>
		<?php echo $form->textField($model,'login_status',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'login_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_comcenter_view'); ?>
		<?php echo $form->textField($model,'last_comcenter_view'); ?>
		<?php echo $form->error($model,'last_comcenter_view'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_comcenter_login'); ?>
		<?php echo $form->textField($model,'last_comcenter_login'); ?>
		<?php echo $form->error($model,'last_comcenter_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'panel_group'); ?>
		<?php echo $form->textField($model,'panel_group'); ?>
		<?php echo $form->error($model,'panel_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_id'); ?>
		<?php echo $form->textField($model,'number_id'); ?>
		<?php echo $form->error($model,'number_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre_iftime'); ?>
		<?php echo $form->textField($model,'pre_iftime'); ?>
		<?php echo $form->error($model,'pre_iftime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre_redirect'); ?>
		<?php echo $form->textField($model,'pre_redirect'); ?>
		<?php echo $form->error($model,'pre_redirect'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_busy'); ?>
		<?php echo $form->textField($model,'post_busy'); ?>
		<?php echo $form->error($model,'post_busy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_noanswer'); ?>
		<?php echo $form->textField($model,'post_noanswer'); ?>
		<?php echo $form->error($model,'post_noanswer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_noanswer_sec'); ?>
		<?php echo $form->textField($model,'post_noanswer_sec'); ?>
		<?php echo $form->error($model,'post_noanswer_sec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departs_id'); ?>
		<?php echo $form->textField($model,'departs_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'departs_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_new_as'); ?>
		<?php echo $form->textField($model,'com_new_as',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'com_new_as'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_from'); ?>
		<?php echo $form->textField($model,'time_from'); ?>
		<?php echo $form->error($model,'time_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_to'); ?>
		<?php echo $form->textField($model,'time_to'); ?>
		<?php echo $form->error($model,'time_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_const'); ?>
		<?php echo $form->textField($model,'is_const'); ?>
		<?php echo $form->error($model,'is_const'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workday_id'); ?>
		<?php echo $form->textField($model,'workday_id'); ?>
		<?php echo $form->error($model,'workday_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'voicemail'); ?>
		<?php echo $form->textField($model,'voicemail',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'voicemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cos_id'); ?>
		<?php echo $form->textField($model,'cos_id',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'cos_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->