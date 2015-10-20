<?php
/* @var $this ProgramsController */
/* @var $model Programs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'program_Id'); ?>
		<?php echo $form->textField($model,'program_Id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_Code'); ?>
		<?php echo $form->textField($model,'program_Code',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_Name'); ?>
		<?php echo $form->textField($model,'program_Name',array('size'=>60,'maxlength'=>320)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_Duration'); ?>
		<?php echo $form->textField($model,'program_Duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Discription'); ?>
		<?php echo $form->textArea($model,'Discription',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->