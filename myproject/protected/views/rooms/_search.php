<?php
/* @var $this RoomsController */
/* @var $model Rooms */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	
	<div class="row">
		<?php echo $form->label($model,'room_Number'); ?>
		<?php echo $form->textField($model,'room_Number',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'room_Type'); ?>
		<?php echo $form->textField($model,'room_Type',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discription'); ?>
		<?php echo $form->textArea($model,'discription',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->