<?php
/* @var $this ProfessorCourseController */
/* @var $model ProfessorCourse */
/* @var $form CActiveForm */


//$modelname = new Professors();
$dataProfessor = Professors::model()->findAll() ;
$optionsArrayProfessor = CHtml::listData($dataProfessor, 'professor_Id', 'first_Name');
$dataCourse = Courses::model()->findAll();
$optionArrayCourse = CHtml::listData($dataCourse, 'course_Id', 'course_Name');


//print_r($data);
//exit;

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'professor-course-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
		'enableClientValidation'=>true,
		'clientOptions'=>array('validateOnSubmit'=>true)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'professor_Id'); ?>
		<?php echo $form->dropDownList($model,'professor_Id', $optionsArrayProfessor  ); ?>
		<?php echo $form->error($model,'professor_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'course_Id'); ?>
		<?php echo $form->dropDownList($model,'course_Id',$optionArrayCourse); ?>
		<?php echo $form->error($model,'course_Id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->