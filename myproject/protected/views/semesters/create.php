<?php
/* @var $this SemestersController */
/* @var $model Semesters */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Semesters', 'url'=>array('index')),
	array('label'=>'Manage Semesters', 'url'=>array('admin')),
);
?>

<h1>Create Semesters</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>