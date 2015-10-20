<?php
/* @var $this ClassTypeController */
/* @var $model ClassType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'class_Type_Id'); ?>
		<?php echo $form->textField($model,'class_Type_Id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'day'); ?>
		<?php echo $form->textField($model,'day',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_Time'); ?>
		<?php echo $form->textField($model,'start_Time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_Time'); ?>
		<?php echo $form->textField($model,'end_Time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'class_duration'); ?>
		<?php echo $form->textField($model,'class_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'room_Id'); ?>
		<?php echo $form->textField($model,'room_Id',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->