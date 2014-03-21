<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $passwd
 * @property string $salt
 * @property string $openid
 * @property integer $agent
 * @property integer $denezhka_id
 * @property integer $state
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, passwd, agent, denezhka_id', 'required'),
            array('email, salt, openid', 'safe'),
			array('agent, denezhka_id, state', 'numerical', 'integerOnly'=>true),
			array('username, email, passwd, salt, openid', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, email, passwd, salt, openid, agent, denezhka_id, state', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'email' => 'Email',
			'passwd' => 'Passwd',
			'salt' => 'Salt',
			'openid' => 'Openid',
			'agent' => 'Agent',
			'denezhka_id' => 'Denezhka',
			'state' => 'State',
		);
	}

    public function callStatus($m){
        $remont = new Remont();

        $criteria = $remont->getDefaultCriteria();
        $criteria->compare('cadmin_id',$this->denezhka_id);

        $criteria1 = clone $criteria;
        $criteria2 = clone $criteria;
        $start = mktime(0,0,0,$m,1,date('Y'));
        $end = mktime(0,0,0,$m+1,1,date('Y'));
        $criteria1->addBetweenCondition('cdate',
            $start,
            $end
        );

        $start = mktime(0,0,0,date('m'),date('d'),date('Y'));
        $end = mktime(0,0,0,date('m'),date('d')+1,date('Y'));
        $criteria2->addBetweenCondition('cdate',
            $start,
            $end
        );

        $data1 = new CActiveDataProvider('Remont',array(
            'criteria' => $criteria1,
            'pagination' => false,
        ));

        $data2 = new CActiveDataProvider('Remont',array(
            'criteria' => $criteria2,
            'pagination' => false,
        ));

        /*echo '<pre>';
        print_r($data1->getData());
        print_r($data2->getData());*/


        return array(
            'month' => $data1->itemCount,
            'day' => $data2->itemCount
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('passwd',$this->passwd,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('openid',$this->openid,true);
		$criteria->compare('agent',$this->agent);
		$criteria->compare('denezhka_id',$this->denezhka_id);
		$criteria->compare('state',$this->state);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->db3;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
