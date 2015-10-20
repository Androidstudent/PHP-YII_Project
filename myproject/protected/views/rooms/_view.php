<?php
/* @var $this RoomsController */
/* @var $data Rooms */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('room_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->room_Id), array('view', 'id'=>$data->room_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room_Number')); ?>:</b>
	<?php echo CHtml::encode($data->room_Number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room_Type')); ?>:</b>
	<?php echo CHtml::encode($data->room_Type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discription')); ?>:</b>
	<?php echo CHtml::encode($data->discription); ?>
	<br />


</div>