<?php
/* @var $this ScheduleController */
/* @var $model Schedule */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	$model->schedule_Id,
);

$this->menu=array(
	array('label'=>'List Schedule', 'url'=>array('index')),
	array('label'=>'Create Schedule', 'url'=>array('create')),
	array('label'=>'Update Schedule', 'url'=>array('update', 'id'=>$model->schedule_Id)),
	array('label'=>'Delete Schedule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->schedule_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schedule', 'url'=>array('admin')),
);
?>

<h1>View Schedule #<?php echo $model->schedule_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'schedule_Id',
		'program_Id',
		'professor_Course_Id',
		'class_Type_Id',
		'date',
		'discription',
	),
)); ?>
