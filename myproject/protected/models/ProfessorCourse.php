<?php

/**
 * This is the model class for table "professor_course".
 *
 * The followings are the available columns in table 'professor_course':
 * @property string $professor_Course_Id
 * @property string $professor_Id
 * @property string $course_Id
 *
 * The followings are the available model relations:
 * @property Courses $course
 * @property Professors $professor
 * @property Schedule[] $schedules
 */
class ProfessorCourse extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'professor_course';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('professor_Id, course_Id', 'required'),
			array('professor_Id, course_Id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('professor_Course_Id, professor_Id, course_Id', 'safe', 'on'=>'search'),
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
			'course' => array(self::BELONGS_TO, 'Courses', 'course_Id'),
			'professor' => array(self::BELONGS_TO, 'Professors', 'professor_Id'),
			'schedules' => array(self::HAS_MANY, 'Schedule', 'professor_Course_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'professor_Course_Id' => 'Professor Course',
			'professor_Id' => 'Professor',
			'course_Id' => 'Course',
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

// 		$criteria->compare('professor_Course_Id',$this->professor_Course_Id,true);
// 		$criteria->compare('professor_Id',$this->professor_Id,true);
// 		$criteria->compare('course_Id',$this->course_Id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
// public function getFull_Name(){
// 	//$data = ProfessorCourse::model()->with('professor')->findAll();
// 	return $this->professor.;
	
// }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProfessorCourse the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
