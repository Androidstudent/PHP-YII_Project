<?php
/* @var $this RoomsController */
/* @var $model Rooms */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	$model->room_Id,
);

$this->menu=array(
	array('label'=>'List Rooms', 'url'=>array('index')),
	array('label'=>'Create Rooms', 'url'=>array('create')),
	array('label'=>'Update Rooms', 'url'=>array('update', 'id'=>$model->room_Id)),
	array('label'=>'Delete Rooms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->room_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rooms', 'url'=>array('admin')),
);
?>

<h1>View Rooms #<?php echo $model->room_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'room_Id',
		'room_Number',
		'room_Type',
		'discription',
	),
)); ?>
