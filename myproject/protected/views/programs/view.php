<?php
/* @var $this ProgramsController */
/* @var $model Programs */

$this->breadcrumbs=array(
	'Programs'=>array('index'),
	$model->program_Id,
);

$this->menu=array(
	array('label'=>'List Programs', 'url'=>array('index')),
	array('label'=>'Create Programs', 'url'=>array('create')),
	array('label'=>'Update Programs', 'url'=>array('update', 'id'=>$model->program_Id)),
	array('label'=>'Delete Programs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->program_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Programs', 'url'=>array('admin')),
);
?>

<h1>View Programs #<?php echo $model->program_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'program_Id',
		'program_Code',
		'program_Name',
		'program_Duration',
		'Discription',
	),
)); ?>
