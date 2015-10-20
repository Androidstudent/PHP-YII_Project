<?php
/* @var $this ProfessorsController */
/* @var $model Professors */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	$model->professor_Id,
);

$this->menu=array(
	array('label'=>'List Professors', 'url'=>array('index')),
	array('label'=>'Create Professors', 'url'=>array('create')),
	array('label'=>'Update Professors', 'url'=>array('update', 'id'=>$model->professor_Id)),
	array('label'=>'Delete Professors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->professor_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Professors', 'url'=>array('admin')),
);
?>

<h1>View Professors #<?php echo $model->professor_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'professor_Id',
		'first_Name',
		'last_Name',
		'email',
		'about',
	),
)); ?>
