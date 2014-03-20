<?php
/* @var $this EventLogController */
/* @var $model EventLog */
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
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obj_type'); ?>
		<?php echo $form->textField($model,'obj_type',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obj_id'); ?>
		<?php echo $form->textField($model,'obj_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agent_id'); ?>
		<?php echo $form->textField($model,'agent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'event'); ?>
		<?php echo $form->textField($model,'event',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'param1'); ?>
		<?php echo $form->textField($model,'param1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'param2'); ?>
		<?php echo $form->textField($model,'param2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'param3'); ?>
		<?php echo $form->textField($model,'param3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->