<?php
/* @var $this SemestersController */
/* @var $model Semesters */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'semester_Id'); ?>
		<?php echo $form->textField($model,'semester_Id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'semester_Number'); ?>
		<?php echo $form->textField($model,'semester_Number',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_Date'); ?>
		<?php echo $form->textField($model,'start_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_Date'); ?>
		<?php echo $form->textField($model,'end_Date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->