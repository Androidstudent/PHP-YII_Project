<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_Id), array('view', 'id'=>$data->user_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_Name')); ?>:</b>
	<?php echo CHtml::encode($data->first_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_Name')); ?>:</b>
	<?php echo CHtml::encode($data->last_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />


</div>