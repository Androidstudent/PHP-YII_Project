<?php
/* @var $this ClassTypeController */
/* @var $data ClassType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_Type_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->class_Type_Id), array('view', 'id'=>$data->class_Type_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('day')); ?>:</b>
	<?php echo CHtml::encode($data->day); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_Time')); ?>:</b>
	<?php echo CHtml::encode($data->start_Time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_Time')); ?>:</b>
	<?php echo CHtml::encode($data->end_Time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_duration')); ?>:</b>
	<?php echo CHtml::encode($data->class_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room_Id')); ?>:</b>
	<?php echo CHtml::encode($data->room_Id); ?>
	<br />


</div>