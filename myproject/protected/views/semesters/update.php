<?php
/* @var $this SemestersController */
/* @var $model Semesters */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	$model->semester_Id=>array('view','id'=>$model->semester_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Semesters', 'url'=>array('index')),
	array('label'=>'Create Semesters', 'url'=>array('create')),
	array('label'=>'View Semesters', 'url'=>array('view', 'id'=>$model->semester_Id)),
	array('label'=>'Manage Semesters', 'url'=>array('admin')),
);
?>

<h1>Update Semesters <?php echo $model->semester_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>