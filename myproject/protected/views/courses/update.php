<?php
/* @var $this CoursesController */
/* @var $model Courses */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->course_Id=>array('view','id'=>$model->course_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Courses', 'url'=>array('index')),
	array('label'=>'Create Courses', 'url'=>array('create')),
	array('label'=>'View Courses', 'url'=>array('view', 'id'=>$model->course_Id)),
	array('label'=>'Manage Courses', 'url'=>array('admin')),
);
?>

<h1>Update Courses <?php echo $model->course_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>