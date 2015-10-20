<?php
/* @var $this ClassTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Class Types',
);

$this->menu=array(
	array('label'=>'Create ClassType', 'url'=>array('create')),
	array('label'=>'Manage ClassType', 'url'=>array('admin')),
);
?>

<h1>Class Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
