<?php
/* @var $this ProfessorCourseController */
/* @var $model ProfessorCourse */

$this->breadcrumbs=array(
	'Professor Courses'=>array('index'),
	$model->professor_Course_Id,
);

$this->menu=array(
	array('label'=>'List ProfessorCourse', 'url'=>array('index')),
	array('label'=>'Create ProfessorCourse', 'url'=>array('create')),
	array('label'=>'Update ProfessorCourse', 'url'=>array('update', 'id'=>$model->professor_Course_Id)),
	array('label'=>'Delete ProfessorCourse', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->professor_Course_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfessorCourse', 'url'=>array('admin')),
);
?>

<h1>View ProfessorCourse #<?php echo $model->professor_Course_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'professor_Course_Id',
		//'professor_Id',
		//'course_Id',
		'professor.first_Name',
		'course.course_Name'
	),
)); ?>
