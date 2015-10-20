<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
//
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<div id="slideShowImages">
    <img height="500" width="900" src="<?php echo Yii::app()->request->baseUrl.'/assets/images/9.jpg'?>" alt="Slide 1" /> 
     <img height="500" width="900" src="<?php echo Yii::app()->request->baseUrl.'/assets/images/10.jpg'?>" alt="Slide 2" />
     <img height="500" width="900" src="<?php echo Yii::app()->request->baseUrl.'/assets/images/7.jpg'?>" alt="Slide 3" />
     <img height="500" width="900" src="<?php echo Yii::app()->request->baseUrl.'/assets/images/11.jpg'?>" alt="Slide 4" />
  </div>  
  <script src="<?php echo Yii::app()->request->baseUrl.'/assets/slider.js'?>"></script>

