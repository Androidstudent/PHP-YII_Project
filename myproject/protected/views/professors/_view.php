<?php
/* @var $this ProfessorsController */
/* @var $data Professors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('professor_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->professor_Id), array('view', 'id'=>$data->professor_Id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('about')); ?>:</b>
	<?php echo CHtml::encode($data->about); ?>
	<br />


</div>