<?php
/* @var $this ClassTypeController */
/* @var $model ClassType */

$this->breadcrumbs=array(
	'Class Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClassType', 'url'=>array('index')),
	array('label'=>'Manage ClassType', 'url'=>array('admin')),
);
?>

<h1>Create ClassType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>