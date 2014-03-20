<?php
/* @var $this EventLogController */
/* @var $model EventLog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-log-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obj_type'); ?>
		<?php echo $form->textField($model,'obj_type',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'obj_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obj_id'); ?>
		<?php echo $form->textField($model,'obj_id'); ?>
		<?php echo $form->error($model,'obj_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agent_id'); ?>
		<?php echo $form->textField($model,'agent_id'); ?>
		<?php echo $form->error($model,'agent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event'); ?>
		<?php echo $form->textField($model,'event',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'event'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'param1'); ?>
		<?php echo $form->textField($model,'param1'); ?>
		<?php echo $form->error($model,'param1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'param2'); ?>
		<?php echo $form->textField($model,'param2'); ?>
		<?php echo $form->error($model,'param2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'param3'); ?>
		<?php echo $form->textField($model,'param3'); ?>
		<?php echo $form->error($model,'param3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->