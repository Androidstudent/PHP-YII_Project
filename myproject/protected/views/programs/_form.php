<?php
/* @var $this ProgramsController */
/* @var $model Programs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'programs-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'program_Code'); ?>
		<?php echo $form->textField($model,'program_Code',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'program_Code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'program_Name'); ?>
		<?php echo $form->textField($model,'program_Name',array('size'=>60,'maxlength'=>320)); ?>
		<?php echo $form->error($model,'program_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'program_Duration')."(Semesters)"; ?>
		<?php echo $form->dropDownList($model,'program_Duration',array('1'=>1,2,3,4,5,6)); ?>
		<?php echo $form->error($model,'program_Duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Discription'); ?>
		<?php echo $form->textArea($model,'Discription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Discription'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->