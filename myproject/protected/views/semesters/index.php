<?php
/* @var $this SemestersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Semesters',
);

$this->menu=array(
	array('label'=>'Create Semesters', 'url'=>array('create')),
	array('label'=>'Manage Semesters', 'url'=>array('admin')),
);
?>

<h1>Semesters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
