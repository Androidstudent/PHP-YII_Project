<?php
/* @var $this ProgramsController */
/* @var $data Programs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->program_Id), array('view', 'id'=>$data->program_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_Code')); ?>:</b>
	<?php echo CHtml::encode($data->program_Code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_Name')); ?>:</b>
	<?php echo CHtml::encode($data->program_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_Duration')); ?>:</b>
	<?php echo CHtml::encode($data->program_Duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Discription')); ?>:</b>
	<?php echo CHtml::encode($data->Discription); ?>
	<br />


</div>