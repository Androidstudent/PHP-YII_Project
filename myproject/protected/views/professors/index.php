<?php
/* @var $this ProfessorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Professors',
);

$this->menu=array(
	array('label'=>'Create Professors', 'url'=>array('create')),
	array('label'=>'Manage Professors', 'url'=>array('admin')),
);
?>

<h1>Professors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
