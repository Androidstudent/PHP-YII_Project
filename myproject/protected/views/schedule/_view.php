<?php
/* @var $this ScheduleController */
/* @var $data Schedule */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('schedule_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->schedule_Id), array('view', 'id'=>$data->schedule_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_Id')); ?>:</b>
	<?php echo CHtml::encode($data->program->program_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('professor_Course_Id')); ?>:</b>
	Course:- <?php echo CHtml::encode($data->professorCourse->course->course_Name); ?>,&nbsp
	 Professor:- <?php echo CHtml::encode($data->professorCourse->professor->first_Name); ?>
	 <?php echo CHtml::encode($data->professorCourse->professor->last_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_Type_Id')); ?>:</b>
	<?php echo CHtml::encode($data->classType->room->room_Number); ?>,&nbsp
	<?php echo CHtml::encode($data->classType->day); ?>,&nbsp
	<?php echo CHtml::encode($data->classType->start_Time); ?>&nbspto
	<?php echo CHtml::encode($data->classType->end_Time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discription')); ?>:</b>
	<?php echo CHtml::encode($data->discription); ?>
	<br />


</div>