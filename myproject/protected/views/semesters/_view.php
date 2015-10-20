<?php
/* @var $this SemestersController */
/* @var $data Semesters */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('semester_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->semester_Id), array('view', 'id'=>$data->semester_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semester_Number')); ?>:</b>
	<?php echo CHtml::encode($data->semester_Number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_Date')); ?>:</b>
	<?php echo CHtml::encode($data->start_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_Date')); ?>:</b>
	<?php echo CHtml::encode($data->end_Date); ?>
	<br />


</div>