<?php
/* @var $this SemestersController */
/* @var $model Semesters */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'semesters-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'semester_Number'); ?>
		<?php echo $form->dropDownList($model,'semester_Number',array('1'=>1,2,3,4,5,6)); ?>
		<?php echo $form->error($model,'semester_Number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_Date'); ?>
		<?php echo $form->dateField($model,'start_Date'); ?>
		<?php echo $form->error($model,'start_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_Date'); ?>
		<?php echo $form->dateField($model,'end_Date'); ?>
		<?php echo $form->error($model,'end_Date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->