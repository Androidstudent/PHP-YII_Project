<?php
/* @var $this ProgramsController */
/* @var $model Programs */

$this->breadcrumbs=array(
	'Programs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Programs', 'url'=>array('index')),
	array('label'=>'Manage Programs', 'url'=>array('admin')),
);
?>

<h1>Create Programs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>