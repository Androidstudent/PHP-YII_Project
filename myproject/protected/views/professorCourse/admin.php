<?php
/* @var $this ProfessorCourseController */
/* @var $model ProfessorCourse */

$this->breadcrumbs=array(
	'Professor Courses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProfessorCourse', 'url'=>array('index')),
	array('label'=>'Create ProfessorCourse', 'url'=>array('create')),
);

// Yii::app()->clientScript->registerScript('search', "
// $('.search-button').click(function(){
// 	$('.search-form').toggle();
// 	return false;
// });
// $('.search-form form').submit(function(){
// 	$('#professor-course-grid').yiiGridView('update', {
// 		data: $(this).serialize()
// 	});
// 	return false;
// });
// ");
?>

<h1>Manage Professor Courses</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'professor-course-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'professor_Course_Id',
		'professor.first_Name',
		'course.course_Name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
