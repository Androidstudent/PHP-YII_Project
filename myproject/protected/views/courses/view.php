<?php
/* @var $this CoursesController */
/* @var $model Courses */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->course_Id,
);

$this->menu=array(
	array('label'=>'List Courses', 'url'=>array('index')),
	array('label'=>'Create Courses', 'url'=>array('create')),
	array('label'=>'Update Courses', 'url'=>array('update', 'id'=>$model->course_Id)),
	array('label'=>'Delete Courses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->course_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Courses', 'url'=>array('admin')),
);
?>

<h1>View Courses #<?php echo $model->course_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'course_Id',
		//'program_Id',
		'program.program_Code',
		'course_Name',
			'semester.semester_Number',
		//'semester_Id',
		'discription',
	),
)); ?>
