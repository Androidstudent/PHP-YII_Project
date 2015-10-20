<?php
/* @var $this RoomsController */
/* @var $model Rooms */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Rooms', 'url'=>array('index')),
	array('label'=>'Create Rooms', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rooms-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rooms</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rooms-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'room_Id',
		'room_Number',
		'room_Type',
		'discription',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
