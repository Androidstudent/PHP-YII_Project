<?php
/* @var $this ClassTypeController */
/* @var $model ClassType */

$this->breadcrumbs=array(
	'Class Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ClassType', 'url'=>array('index')),
	array('label'=>'Create ClassType', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#class-type-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Class Types</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'class-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'class_Type_Id',
		'day',
		'start_Time',
		'end_Time',
		'class_duration',
		'room_Id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
