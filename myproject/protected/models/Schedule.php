<?php

/**
 * This is the model class for table "schedule".
 *
 * The followings are the available columns in table 'schedule':
 * @property string $schedule_Id
 * @property string $program_Id
 * @property string $professor_Course_Id
 * @property string $class_Type_Id
 * @property string $date
 * @property string $discription
 *
 * The followings are the available model relations:
 * @property ClassType $classType
 * @property ProfessorCourse $professorCourse
 * @property Programs $program
 */
class Schedule extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'schedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('program_Id, professor_Course_Id, class_Type_Id, date', 'required'),
			array('program_Id, professor_Course_Id, class_Type_Id', 'length', 'max'=>20),
			array('discription', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('schedule_Id, program_Id, professor_Course_Id, class_Type_Id, date, discription', 'safe', 'on'=>'search'),
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
			'classType' => array(self::BELONGS_TO, 'ClassType', 'class_Type_Id'),
			'professorCourse' => array(self::BELONGS_TO, 'ProfessorCourse', 'professor_Course_Id'),
			'program' => array(self::BELONGS_TO, 'Programs', 'program_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'schedule_Id' => 'Schedule',
			'program_Id' => 'Program',
			'professor_Course_Id' => 'Professor Course',
			'class_Type_Id' => 'Class Type',
			'date' => 'Date',
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

		$criteria->compare('schedule_Id',$this->schedule_Id,true);
		$criteria->compare('program_Id',$this->program_Id,true);
		$criteria->compare('professor_Course_Id',$this->professor_Course_Id,true);
		$criteria->compare('class_Type_Id',$this->class_Type_Id,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('discription',$this->discription,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Schedule the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
