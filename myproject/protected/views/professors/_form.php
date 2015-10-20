<?php
/* @var $this ProfessorsController */
/* @var $model Professors */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'professors-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
		'enableClientValidation'=>true,
		'clientOptions'=>array(
				'validateOnSubmit'=>true
)
    		
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_Name'); ?>
		<?php echo $form->textField($model,'first_Name',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'first_Name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'last_Name'); ?>
		<?php echo $form->textField($model,'last_Name',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'last_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>320)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about'); ?>
		<?php echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->