<?php
/* @var $this ProgramsController */
/* @var $model Programs */

$this->breadcrumbs=array(
	'Programs'=>array('index'),
	$model->program_Id=>array('view','id'=>$model->program_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Programs', 'url'=>array('index')),
	array('label'=>'Create Programs', 'url'=>array('create')),
	array('label'=>'View Programs', 'url'=>array('view', 'id'=>$model->program_Id)),
	array('label'=>'Manage Programs', 'url'=>array('admin')),
);
?>

<h1>Update Programs <?php echo $model->program_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>