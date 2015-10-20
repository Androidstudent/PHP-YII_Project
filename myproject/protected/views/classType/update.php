<?php
/* @var $this ClassTypeController */
/* @var $model ClassType */

$this->breadcrumbs=array(
	'Class Types'=>array('index'),
	$model->class_Type_Id=>array('view','id'=>$model->class_Type_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClassType', 'url'=>array('index')),
	array('label'=>'Create ClassType', 'url'=>array('create')),
	array('label'=>'View ClassType', 'url'=>array('view', 'id'=>$model->class_Type_Id)),
	array('label'=>'Manage ClassType', 'url'=>array('admin')),
);
?>

<h1>Update ClassType <?php echo $model->class_Type_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>