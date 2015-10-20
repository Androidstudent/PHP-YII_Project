<?php
/* @var $this ProfessorsController */
/* @var $model Professors */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Professors', 'url'=>array('index')),
	array('label'=>'Manage Professors', 'url'=>array('admin')),
);
?>

<h1>Create Professors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>