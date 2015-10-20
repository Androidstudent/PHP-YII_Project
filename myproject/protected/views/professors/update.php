<?php
/* @var $this ProfessorsController */
/* @var $model Professors */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	$model->professor_Id=>array('view','id'=>$model->professor_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Professors', 'url'=>array('index')),
	array('label'=>'Create Professors', 'url'=>array('create')),
	array('label'=>'View Professors', 'url'=>array('view', 'id'=>$model->professor_Id)),
	array('label'=>'Manage Professors', 'url'=>array('admin')),
);
?>

<h1>Update Professors <?php echo $model->professor_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>