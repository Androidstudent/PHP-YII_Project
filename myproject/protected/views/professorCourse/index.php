<?php
/* @var $this ProfessorCourseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Professor Courses',
);

$this->menu=array(
	array('label'=>'Create ProfessorCourse', 'url'=>array('create')),
	array('label'=>'Manage ProfessorCourse', 'url'=>array('admin')),
);
?>

<h1>Professor Courses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
