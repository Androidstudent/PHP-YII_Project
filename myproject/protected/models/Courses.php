<?php

/**
 * This is the model class for table "courses".
 *
 * The followings are the available columns in table 'courses':
 * @property string $course_Id
 * @property string $program_Id
 * @property string $course_Name
 * @property string $semester_Id
 * @property string $discription
 *
 * The followings are the available model relations:
 * @property Programs $program
 * @property Semesters $semester
 * @property ProfessorCourse[] $professorCourses
 */
class Courses extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'courses';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('program_Id, course_Name, semester_Id', 'required'),
			array('program_Id, semester_Id', 'length', 'max'=>20),
			array('course_Name', 'length', 'max'=>255),
			array('discription', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('course_Id, program_Id, course_Name, semester_Id, discription', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'program' => array(self::BELONGS_TO, 'Programs', 'program_Id'),
			'semester' => array(self::BELONGS_TO, 'Semesters', 'semester_Id'),
			'professorCourses' => array(self::HAS_MANY, 'ProfessorCourse', 'course_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'course_Id' => 'Course',
			'program_Id' => 'Program',
			'course_Name' => 'Course Name',
			'semester_Id' => 'Semester',
			'discription' => 'Discription',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		//$criteria->compare('course_Id',$this->course_Id,true);
		//$criteria->compare('program_Id',$this->program_Id,true);
		$criteria->compare('course_Name',$this->course_Name,true);
		//$criteria->compare('semester_Id',$this->semester_Id,true);
		$criteria->compare('discription',$this->discription,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Courses the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
