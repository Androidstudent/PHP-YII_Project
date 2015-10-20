<?php
/* @var $this SemestersController */
/* @var $model Semesters */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Semesters', 'url'=>array('index')),
	array('label'=>'Create Semesters', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#semesters-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Semesters</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'semesters-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'semester_Id',
		'semester_Number',
		'start_Date',
		'end_Date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
