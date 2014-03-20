<?php

/**
 * This is the model class for table "remont".
 *
 * The followings are the available columns in table 'remont':
 * @property integer $num
 * @property string $date
 * @property integer $admin_id
 * @property string $cdate
 * @property integer $cadmin_id
 * @property string $point
 * @property string $address
 * @property string $problem
 * @property string $p_when
 * @property string $comment
 * @property integer $type
 * @property integer $priority
 *
 * The followings are the available model relations:
 * @property Managers $admin
 * @property Managers $cadmin
 * @property Points $point0
 */
class Remont extends Db2ActiveRecord
{
    const CALL_PLAN = 20;
    const CALL_COST = 20;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'remont';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('admin_id, cadmin_id, type, priority', 'numerical', 'integerOnly'=>true),
			array('date, cdate', 'length', 'max'=>10),
			array('point', 'length', 'max'=>30),
			array('p_when', 'length', 'max'=>50),
			array('address, problem, comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('num, date, admin_id, cdate, cadmin_id, point, address, problem, p_when, comment, type, priority', 'safe', 'on'=>'search'),
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
			'admin' => array(self::BELONGS_TO, 'Managers', 'admin_id'),
			'cadmin' => array(self::BELONGS_TO, 'Managers', 'cadmin_id'),
			'point0' => array(self::BELONGS_TO, 'Points', 'point'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'num' => 'Num',
			'date' => 'Date',
			'admin_id' => 'Admin',
			'cdate' => 'Cdate',
			'cadmin_id' => 'Cadmin',
			'point' => 'Point',
			'address' => 'Address',
			'problem' => 'Problem',
			'p_when' => 'P When',
			'comment' => 'Comment',
			'type' => 'Type',
			'priority' => 'Priority',
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
        // type = 15 - Обзвон 1
        // type = 16 - Обзвон 2

		//$criteria=new CDbCriteria;
        $criteria = $this->getDefaultCriteria();


		$criteria->compare('num',$this->num);
		$criteria->compare('date',$this->date,true);
		//$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('cdate',$this->cdate,true);
		//$criteria->compare('cadmin_id','');
        $criteria->addCondition('cadmin_id is NULL');
		$criteria->compare('point',$this->point,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('problem',$this->problem,true);
		$criteria->compare('p_when',$this->p_when,true);
		$criteria->compare('comment',$this->comment,true);
		//$criteria->compare('type',$this->type);

        // ищем только 15 и 16


		$criteria->compare('priority',$this->priority);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function getDefaultCriteria(){
        $criteria=new CDbCriteria;

        $criteria->addCondition('type=15 or type=16');

        return $criteria;
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Remont the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
