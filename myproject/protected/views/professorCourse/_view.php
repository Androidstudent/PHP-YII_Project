<?php
/* @var $this ProfessorCourseController */
/* @var $data ProfessorCourse */
//  echo "hi";
// $model = new Professors();
// $model()->findAllByPk($data->professor_Id);
//  $dataProfessor = Professors::model()->findAllByPk($data->professor_Id);
// print_r($dataProfessor);
//  $professorName = model()->first_Name;
//  echo $professorName;
//   exit();
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('professor_Course_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->professor_Course_Id), array('view', 'id'=>$data->professor_Course_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('professor_Id')); ?>:</b>
	<?php echo CHtml::encode($data->professor->first_Name); //?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_Id')); ?>:</b>
	<?php echo CHtml::encode($data->course->course_Name); ?>
	<br />


</div>