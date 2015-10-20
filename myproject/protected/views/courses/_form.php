<?php
/* @var $this CoursesController */
/* @var $model Courses */
/* @var $form CActiveForm */
 $dataProgram = Programs::model()->findAll();
 $optionArrayProgram = CHtml::listData($dataProgram, 'program_Id', 'program_Name');
 $dataSemester = Semesters::model()->findAll();
 $optionArraySemester = CHtml::listData($dataSemester, 'semester_Id', 'semesterInfo');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'courses-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'program_Id'); ?>
		<?php echo $form->dropDownList($model,'program_Id',$optionArrayProgram); ?>
		<?php echo $form->error($model,'program_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'course_Name'); ?>
		<?php echo $form->textField($model,'course_Name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'course_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semester_Id'); ?>
		<?php echo $form->dropDownList($model,'semester_Id',$optionArraySemester); ?>
		<?php echo $form->error($model,'semester_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discription'); ?>
		<?php echo $form->textArea($model,'discription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'discription'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->