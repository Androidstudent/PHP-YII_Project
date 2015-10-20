<?php
/* @var $this ClassTypeController */
/* @var $model ClassType */

$this->breadcrumbs=array(
	'Class Types'=>array('index'),
	$model->class_Type_Id,
);

$this->menu=array(
	array('label'=>'List ClassType', 'url'=>array('index')),
	array('label'=>'Create ClassType', 'url'=>array('create')),
	array('label'=>'Update ClassType', 'url'=>array('update', 'id'=>$model->class_Type_Id)),
	array('label'=>'Delete ClassType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->class_Type_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClassType', 'url'=>array('admin')),
);
?>

<h1>View ClassType #<?php echo $model->class_Type_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'class_Type_Id',
		'day',
		'start_Time',
		'end_Time',
		'class_duration',
		'room_Id',
	),
)); ?>
