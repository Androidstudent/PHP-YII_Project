<?php

/**
 * This is the model class for table "class_type".
 *
 * The followings are the available columns in table 'class_type':
 * @property string $class_Type_Id
 * @property string $day
 * @property string $start_Time
 * @property string $end_Time
 * @property integer $class_duration
 * @property string $room_Id
 *
 * The followings are the available model relations:
 * @property Rooms $room
 * @property Schedule[] $schedules
 */
class ClassType extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'class_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('day, start_Time, end_Time, class_duration, room_Id', 'required'),
			//array('class_duration', 'numerical', 'integerOnly'=>true),
			array('day', 'length', 'max'=>20),
			array('room_Id', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('class_Type_Id, day, start_Time, end_Time, class_duration, room_Id', 'safe', 'on'=>'search'),
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
			'room' => array(self::BELONGS_TO, 'Rooms', 'room_Id'),
			'schedules' => array(self::HAS_MANY, 'Schedule', 'class_Type_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'class_Type_Id' => 'Class Type',
			'day' => 'Day',
			'start_Time' => 'Start Time',
			'end_Time' => 'End Time',
			'class_duration' => 'Class Duration',
			'room_Id' => 'Room',
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

		$criteria->compare('class_Type_Id',$this->class_Type_Id,true);
		$criteria->compare('day',$this->day,true);
		$criteria->compare('start_Time',$this->start_Time,true);
		$criteria->compare('end_Time',$this->end_Time,true);
		$criteria->compare('class_duration',$this->class_duration);
		$criteria->compare('room_Id',$this->room_Id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClassType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	
	}
	
	
	 public function getConcatened()
        {
                return ' Room: '.$this->room->room_Number.', '.$this->day.', Time: '.$this->start_Time.' to '.$this->end_Time;
        }
	
	
}
