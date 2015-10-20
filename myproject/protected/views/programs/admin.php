<?php
/* @var $this ProgramsController */
/* @var $model Programs */

$this->breadcrumbs=array(
	'Programs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Programs', 'url'=>array('index')),
	array('label'=>'Create Programs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#programs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Programs</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'programs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'program_Id',
		'program_Code',
		'program_Name',
		'program_Duration',
		'Discription',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
