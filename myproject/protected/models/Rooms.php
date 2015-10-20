<?php

/**
 * This is the model class for table "rooms".
 *
 * The followings are the available columns in table 'rooms':
 * @property string $room_Id
 * @property string $room_Number
 * @property string $room_Type
 * @property string $discription
 *
 * The followings are the available model relations:
 * @property Schedule[] $schedules
 */
class Rooms extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rooms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('room_Number, room_Type', 'required'),
			array('room_Number, room_Type', 'length', 'max'=>25),
			array('discription', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('room_Id, room_Number, room_Type, discription', 'safe', 'on'=>'search'),
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
			'schedules' => array(self::HAS_MANY, 'Schedule', 'room_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'room_Id' => 'Room',
			'room_Number' => 'Room Number',
			'room_Type' => 'Room Type',
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

		//$criteria->compare('room_Id',$this->room_Id,true);
		$criteria->compare('room_Number',$this->room_Number,true);
		$criteria->compare('room_Type',$this->room_Type,true);
		$criteria->compare('discription',$this->discription,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rooms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
