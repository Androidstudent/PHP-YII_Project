<?php

/**
 * This is the model class for table "semesters".
 *
 * The followings are the available columns in table 'semesters':
 * @property string $semester_Id
 * @property string $semester_Number
 * @property string $start_Date
 * @property string $end_Date
 *
 * The followings are the available model relations:
 * @property Courses[] $courses
 */
class Semesters extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'semesters';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('semester_Number, start_Date, end_Date', 'required'),
			array('semester_Number', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('semester_Id, semester_Number, start_Date, end_Date', 'safe', 'on'=>'search'),
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
			'courses' => array(self::HAS_MANY, 'Courses', 'semester_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'semester_Id' => 'Semester',
			'semester_Number' => 'Semester Number',
			'start_Date' => 'Start Date',
			'end_Date' => 'End Date',
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

		$criteria->compare('semester_Id',$this->semester_Id,true);
		$criteria->compare('semester_Number',$this->semester_Number,true);
		$criteria->compare('start_Date',$this->start_Date,true);
		$criteria->compare('end_Date',$this->end_Date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getSemesterInfo(){
		return "Semester: ".$this->semester_Number .", Duration: ".$this->start_Date." to ". $this->end_Date;
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Semesters the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
