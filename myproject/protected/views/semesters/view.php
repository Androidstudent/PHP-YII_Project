<?php
/* @var $this SemestersController */
/* @var $model Semesters */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	$model->semester_Id,
);

$this->menu=array(
	array('label'=>'List Semesters', 'url'=>array('index')),
	array('label'=>'Create Semesters', 'url'=>array('create')),
	array('label'=>'Update Semesters', 'url'=>array('update', 'id'=>$model->semester_Id)),
	array('label'=>'Delete Semesters', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->semester_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Semesters', 'url'=>array('admin')),
);
?>

<h1>View Semesters #<?php echo $model->semester_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'semester_Id',
		'semester_Number',
		'start_Date',
		'end_Date',
	),
)); ?>
