<?php

/**
 * This is the model class for table "programs".
 *
 * The followings are the available columns in table 'programs':
 * @property string $program_Id
 * @property string $program_Code
 * @property string $program_Name
 * @property integer $program_Duration
 * @property string $Discription
 *
 * The followings are the available model relations:
 * @property Courses[] $courses
 * @property Schedule[] $schedules
 */
class Programs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'programs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('program_Code, program_Name, program_Duration', 'required'),
			array('program_Duration', 'numerical', 'integerOnly'=>true),
			array('program_Code', 'length', 'max'=>25),
			array('program_Name', 'length', 'max'=>320),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('program_Id, program_Code, program_Name, program_Duration, Discription', 'safe', 'on'=>'search'),
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
			'courses' => array(self::HAS_MANY, 'Courses', 'program_Id'),
			'schedules' => array(self::HAS_MANY, 'Schedule', 'program_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'program_Id' => 'Program',
			'program_Code' => 'Program Code',
			'program_Name' => 'Program Name',
			'program_Duration' => 'Program Duration',
			'Discription' => 'Discription',
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

		$criteria->compare('program_Id',$this->program_Id,true);
		$criteria->compare('program_Code',$this->program_Code,true);
		$criteria->compare('program_Name',$this->program_Name,true);
		$criteria->compare('program_Duration',$this->program_Duration);
		$criteria->compare('Discription',$this->Discription,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Programs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
