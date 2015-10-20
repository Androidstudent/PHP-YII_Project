<?php
/* @var $this ClassTypeController */
/* @var $model ClassType */
/* @var $form CActiveForm */
$roomData = Rooms::model()->findAll();
$roomArray = CHtml::listData($roomData, 'room_Id', 'room_Number');

?>
<script type="text/javascript">
function myfunction(){
	var start = new Date();
	var end = new Date();
	start = document.getElementById("start_time").value;
	 end = document.getElementById("end_time").value;
	diff(start, end);
}
function diff(start, end) {
    start = start.split(":");
    end = end.split(":");
    var startDate = new Date(0, 0, 0, start[0], start[1], 0);
    var endDate = new Date(0, 0, 0, end[0], end[1], 0);
    var diff = endDate.getTime() - startDate.getTime();
    var hours = Math.floor(diff / 1000 / 60 / 60);
    diff -= hours * 1000 * 60 * 60;
    var minutes = Math.floor(diff / 1000 / 60);

    //alert(hours +"==="+minutes);
    
    var data= (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
    if(data != "NaN:NaN"){
    document.getElementById("total").value = data;
    }
}
<!--

//-->
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'class-type-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		'enableClientValidation'=>true,
		'clientOptions'=>array(
				'validateOnSubmit'=>true,
				'beforeValidate' => 'js:beforeValidate',
		)
));

$js = <<< EOF_JS
function beforeValidate(form) {
	var start = new Date();
	var end = new Date();
	start = document.getElementById("start_time").value;
	 end = document.getElementById("end_time").value;
    		
    		
   start = start.split(":");
    end = end.split(":");
    var startDate = new Date(0, 0, 0, start[0], start[1], 0);
    var endDate = new Date(0, 0, 0, end[0], end[1], 0);
    var diff = endDate.getTime() - startDate.getTime();
    var hours = Math.floor(diff / 1000 / 60 / 60);
    diff -= hours * 1000 * 60 * 60;
    var minutes = Math.floor(diff / 1000 / 60);
    
   // var data= (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
  
    		if(isNaN(hours)){
    		alert("Please enter time!!");
    		return false;
    		}
    if(hours=4 && minutes=0) {
    return true;
    		}
    else if(hourse<1 && minutes>=30){
    		retuen true;
    		}
    else if(hours<4 && hours>=1 && minutes >= 0){
    		return true;
    		}
    		else{
    		alert("Duration should not be more than 04:00 and NOt less then 00:30");
    		return false;
    		}
}
EOF_JS;
Yii::app()->clientScript->registerScript('contact-form-beforeValidate', $js);
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'day'); ?>
		<?php echo $form->dropDownList($model,'day',array("Monday"=>"Monday","Tuesday"=>"Tuesday","Wednesday"=>"Wednesday","Thursday"=>"Thursday","Friday"=>"Friday"));?>
		<?php echo $form->error($model,'day'); ?>
	</div>

	<div class="row" onChange="myfunction();">
		<?php echo $form->labelEx($model,'start_Time'); ?>
		<?php echo $form->timeField($model,'start_Time',array('id'=>'start_time')); ?>
		<?php echo $form->error($model,'start_Time'); ?>
	</div>

	<div class="row" onChange="myfunction();">
		<?php echo $form->labelEx($model,'end_Time'); ?>
		<?php echo $form->timeField($model,'end_Time',array('id'=>'end_time')); ?>
		<?php echo $form->error($model,'end_Time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'class_duration'); ?>
		<?php echo $form->telField($model,'class_duration',array('id'=>'total', 'readonly' => 'true')); ?>
		<?php echo $form->error($model,'class_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room_Id'); ?>
		<?php echo $form->dropDownList($model,'room_Id',$roomArray); ?>
		<?php echo $form->error($model,'room_Id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->