<?php
/* @var $this ProfessorsController */
/* @var $model Professors */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Professors', 'url'=>array('index')),
	array('label'=>'Create Professors', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#professors-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Professors</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'professors-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'professor_Id',
		'first_Name',
		'last_Name',
		'email',
		'about',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
