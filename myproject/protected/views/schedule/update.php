<?php
/* @var $this ScheduleController */
/* @var $model Schedule */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	$model->schedule_Id=>array('view','id'=>$model->schedule_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Schedule', 'url'=>array('index')),
	array('label'=>'Create Schedule', 'url'=>array('create')),
	array('label'=>'View Schedule', 'url'=>array('view', 'id'=>$model->schedule_Id)),
	array('label'=>'Manage Schedule', 'url'=>array('admin')),
);
?>

<h1>Update Schedule <?php echo $model->schedule_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'model2'=>$model2)); ?>