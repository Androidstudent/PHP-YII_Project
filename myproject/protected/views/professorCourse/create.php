<?php
/* @var $this ProfessorCourseController */
/* @var $model ProfessorCourse */

$this->breadcrumbs=array(
	'Professor Courses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfessorCourse', 'url'=>array('index')),
	array('label'=>'Manage ProfessorCourse', 'url'=>array('admin')),
);
?>

<h1>Create ProfessorCourse</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>