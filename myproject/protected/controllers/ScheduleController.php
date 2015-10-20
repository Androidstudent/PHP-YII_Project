<?php

class ScheduleController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
// 			array('allow',  // allow all users to perform 'index' and 'view' actions
// 				'actions'=>array(),
// 				'users'=>array('*'),
// 			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','GetProfessorCource','index','view','GetClassType','create2'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate2()
	{
		$model=new Schedule;
		$model2 = new ProfessorCourse();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Schedule']))
		{

			$model->attributes=$_POST['Schedule'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->schedule_Id));
		}

		$this->render('create',array(
			'model'=>$model,'model2'=>$model2
		));
	}
	
	public function actionCreate()
	{
		$model=new Schedule;
		$model2 = new ProfessorCourse();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	
		
		
		
		if(isset($_POST['Schedule']))
		{
		
			$sql = '
			
       select sem.end_Date from professor_course pc join courses co on pc.course_Id = co.course_Id
	   join semesters sem on sem.semester_Id = co.semester_Id where professor_Course_Id = "'.$_POST['Schedule']['professor_Course_Id'].'" ;
			
        ';
			
			$row1Class = Yii::app()->db->createCommand($sql)->queryRow();
			$sql2 = '
       select day from class_type where class_Type_Id =  "'.$_POST['Schedule']['class_Type_Id'].'" ;
        ';
				
			$row2Class = Yii::app()->db->createCommand($sql2)->queryRow();
			$endDate = $row1Class['end_Date'];
			$dayNameEndDate =$row2Class['day'];
			$date = date('Y-m-d');
			while($date != $endDate)
			{
				$dayName = date('l', strtotime($date) );
			
				if($dayName  == $dayNameEndDate)
				{
			
					$model = new Schedule();
					$model->date = $date ;
					$model->attributes = $_POST['Schedule'];
			
					// other fileds if they are not getting assigned
			
					if(!$model->save())
					{
			
						echo '<pre>';
						print_r($model->getErrors());
						echo '</pre>';
						exit;
			
					}
			
				}
			
				$date = strtotime("+1 day", strtotime($date));
				$date  = date("Y-m-d", $date);
				 
			}
			$this->redirect(array('index'));
		}
	
		$this->render('_Form2',array(
				'model'=>$model,'model2'=>$model2
		));
	}
	
	public function actionGetProfessorCource($id)
	{
		
		$data = ProfessorCourse::model()->with('course')->findAll(array('condition'=>'professor_Id =:professor_Id','params'=>array(':professor_Id'=>$id)));
		$returnData = CHtml::listData($data, 'professor_Course_Id', 'course.course_Name');
	
			
		$html = "";
	
	
		foreach($returnData as $k=>$val)
		{
			$html  .= "<option value='".$k."'>".$val."</option>";
		}
	
		echo $html ;
	
	}
	
public function actionGetClassType($id){
	$day = date('l', strtotime($id));
	$raj = ClassType::model()->with('room')->findAllByAttributes(array('day'=>$day));
	$returnData = CHtml::listData($raj, 'class_Type_Id', 'concatened');
	
	
	$html = "";
	
	
	foreach($returnData as $k=>$val)
	{
		$html  .= "<option value='".$k."'>".$val."</option>";
	}
	
	echo $html ;
	exit();
	
}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		
		$id2= $model->professor_Course_Id;
		$model2 =  new ProfessorCourse($id2);//ProfessorCourse::model()->findAllByPk($id2);
// 		print_r($model2);
// 		exit();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		

		if(isset($_POST['Schedule']))
		{
			
			$sql = '
		
       select sem.end_Date from professor_course pc join courses co on pc.course_Id = co.course_Id
	   join semesters sem on sem.semester_Id = co.semester_Id where professor_Course_Id = "'.$_POST['Schedule']['professor_Course_Id'].'" ;
		
        ';
				
			$row1Class = Yii::app()->db->createCommand($sql)->queryRow();
			$sql2 = '
       select day from class_type where class_Type_Id =  "'.$_POST['Schedule']['class_Type_Id'].'" ;
        ';
			
			$row2Class = Yii::app()->db->createCommand($sql2)->queryRow();
			$endDate = $row1Class['end_Date'];
			$dayNameEndDate =$row2Class['day'];
			$date = date('Y-m-d');
			while($date != $endDate)
			{
				$dayName = date('l', strtotime($date) );
					
				if($dayName  == $dayNameEndDate)
				{
						
					//$model = new Schedule();
					$model->date = $date ;
					$model->attributes = $_POST['Schedule'];
						
					// other fileds if they are not getting assigned
						
					if(!$model->save())
					{
							
						echo '<pre>';
						print_r($model->getErrors());
						echo '</pre>';
						exit;
							
					}
						
				}
					
				$date = strtotime("+1 day", strtotime($date));
				$date  = date("Y-m-d", $date);
					
			}
			$this->redirect(array('index'));
			
			
// 			$model->attributes=$_POST['Schedule'];
// 			if($model->save())
// 				$this->redirect(array('view','id'=>$model->schedule_Id));
		}
		$this->render('_Form2',array(
			'model'=>$model,'model2'=>$model2,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Schedule');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Schedule('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Schedule']))
			$model->attributes=$_GET['Schedule'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Schedule the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Schedule::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Schedule $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='schedule-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
