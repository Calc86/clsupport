<?php
/* @var $this RemontController */
/* @var $model Remont */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'remont-form',
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
		<?php echo $form->textField($model,'date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_id'); ?>
		<?php echo $form->textField($model,'admin_id'); ?>
		<?php echo $form->error($model,'admin_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cdate'); ?>
		<?php echo $form->textField($model,'cdate',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cadmin_id'); ?>
		<?php echo $form->textField($model,'cadmin_id'); ?>
		<?php echo $form->error($model,'cadmin_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'point'); ?>
		<?php echo $form->textField($model,'point',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'problem'); ?>
		<?php echo $form->textArea($model,'problem',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'problem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_when'); ?>
		<?php echo $form->textField($model,'p_when',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'p_when'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->