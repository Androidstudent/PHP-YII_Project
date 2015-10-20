<?php

/**
 * This is the model class for table "professors".
 *
 * The followings are the available columns in table 'professors':
 * @property string $professor_Id
 * @property string $first_Name
 * @property string $last_Name
 * @property string $email
 * @property string $about
 *
 * The followings are the available model relations:
 * @property ProfessorCourse[] $professorCourses
 */
class Professors extends CActiveRecord
{
	
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'professors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_Name, last_Name, email', 'required'),
			array('first_Name, last_Name', 'length', 'max'=>25),
			array('email', 'length', 'max'=>320),
				array('email', 'email'),
			array('about', 'safe'),
				
				array('first_Name, last_Name, email', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('professor_Id, first_Name, last_Name, email, about', 'safe', 'on'=>'search'),
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
			'professorCourses' => array(self::HAS_MANY, 'ProfessorCourse', 'professor_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'professor_Id' => 'Professor',
			'first_Name' => 'First Name',
			'last_Name' => 'Last Name',
			'email' => 'Email',
			'about' => 'About',
		);
	}
	public function getFullName()
	{
		return $this->first_Name.' '.$this->last_Name;
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

		$criteria->compare('professor_Id',$this->professor_Id,true);
		$criteria->compare('first_Name',$this->first_Name,true);
		$criteria->compare('last_Name',$this->last_Name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('about',$this->about,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Professors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
