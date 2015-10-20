<?php
/* @var $this CoursesController */
/* @var $data Courses */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->course_Id), array('view', 'id'=>$data->course_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_Id')); ?>:</b>
	<?php echo CHtml::encode($data->program->program_Code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_Name')); ?>:</b>
	<?php echo CHtml::encode($data->course_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semester_Id')); ?>:</b>
	<?php echo CHtml::encode($data->semester->semesterInfo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discription')); ?>:</b>
	<?php echo CHtml::encode($data->discription); ?>
	<br />


</div>