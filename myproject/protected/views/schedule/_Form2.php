
<?php
/* @var $this ScheduleController */
/* @var $model Schedule */
/* @var $form CActiveForm */
$dataProgram = Programs::model()->findAll();
$optionArrayPrograms = CHtml::listData($dataProgram, 'program_Id', 'program_Name');
$dataProfessor = Professors::model()->findAll();
$professorData = CHtml::listData($dataProfessor, 'professor_Id', 'fullName');
$roomData= ClassType::model()->with('room')->findAll();
$roomArray = CHtml::listData($roomData, 'class_Type_Id', 'room.room_Number');
$classData = ClassType::model()->findAll();
$classTypeData = CHtml::listData($classData, 'class_Type_Id', 'concatened');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'schedule-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));
$ajax = array(

		'type'=>'GET',
		'url'=>$this->createUrl('schedule/getProfessorCource'),
		'data'=>array('id'=>'js:$(this).val()'),
		'update'=>'#Schedule_professor_Course_Id'
);


?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($model,$model2)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'program_Id'); ?>
		<?php echo $form->dropDownList($model,'program_Id',$optionArrayPrograms); ?>
		<?php echo $form->error($model,'program_Id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model2,'professor'); ?>
		<?php echo $form->dropDownList($model2,'professor',$professorData, array('empty'=>'Select professor', 'ajax'=>$ajax)); ?>
		<?php echo $form->error($model2,'professor'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'professor_Course_Id'); ?>
		<?php echo $form->dropDownList($model,'professor_Course_Id',array(), array('empty'=>'Select Cource')); ?>
		<?php echo $form->error($model,'professor_Course_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'class_Type_Id'); ?>
		<?php echo $form->dropDownList($model,'class_Type_Id',$classTypeData); ?>
		<?php echo $form->error($model,'class_Type_Id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'discription'); ?>
		<?php echo $form->textArea($model,'discription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'discription'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	<div>
	<label>Click on "New Entery" if you don't see required room and timing</label>
	<a href=<?php echo Yii::app()->createUrl("classType/create");?>>New Entery</a>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->