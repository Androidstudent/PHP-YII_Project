<?php
/* @var $this ProfessorCourseController */
/* @var $model ProfessorCourse */

$this->breadcrumbs=array(
	'Professor Courses'=>array('index'),
	$model->professor_Course_Id=>array('view','id'=>$model->professor_Course_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfessorCourse', 'url'=>array('index')),
	array('label'=>'Create ProfessorCourse', 'url'=>array('create')),
	array('label'=>'View ProfessorCourse', 'url'=>array('view', 'id'=>$model->professor_Course_Id)),
	array('label'=>'Manage ProfessorCourse', 'url'=>array('admin')),
);
?>

<h1>Update ProfessorCourse <?php echo $model->professor_Course_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>