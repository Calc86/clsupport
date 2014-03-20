<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwd'); ?>
		<?php echo $form->passwordField($model,'passwd',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'passwd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salt'); ?>
		<?php echo $form->textField($model,'salt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'salt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'openid'); ?>
		<?php echo $form->textField($model,'openid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'openid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agent'); ?>
		<?php echo $form->textField($model,'agent'); ?>
		<?php echo $form->error($model,'agent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'denezhka_id'); ?>
		<?php echo $form->textField($model,'denezhka_id'); ?>
		<?php echo $form->error($model,'denezhka_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->