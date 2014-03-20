<?php

/**
 * This is the model class for table "agents".
 *
 * The followings are the available columns in table 'agents':
 * @property integer $id
 * @property string $agent
 * @property integer $depart_id
 * @property string $pin
 * @property string $name
 * @property string $last_login_unix
 * @property string $last_logoff_unix
 * @property string $last_login_at
 * @property string $login_status
 * @property integer $last_comcenter_view
 * @property integer $last_comcenter_login
 * @property integer $panel_group
 * @property integer $number_id
 * @property integer $pre_iftime
 * @property integer $pre_redirect
 * @property integer $post_busy
 * @property integer $post_noanswer
 * @property integer $post_noanswer_sec
 * @property string $type
 * @property string $departs_id
 * @property string $com_new_as
 * @property integer $time_from
 * @property integer $time_to
 * @property integer $is_const
 * @property integer $workday_id
 * @property string $voicemail
 * @property string $cos_id
 */
class Agents extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('depart_id, last_comcenter_view, last_comcenter_login, panel_group, number_id, pre_iftime, pre_redirect, post_busy, post_noanswer, post_noanswer_sec, time_from, time_to, is_const, workday_id', 'numerical', 'integerOnly'=>true),
			array('agent, pin, cos_id', 'length', 'max'=>4),
			array('name', 'length', 'max'=>100),
			array('last_login_unix, last_logoff_unix', 'length', 'max'=>10),
			array('last_login_at', 'length', 'max'=>64),
			array('login_status', 'length', 'max'=>6),
			array('type, departs_id', 'length', 'max'=>255),
			array('com_new_as', 'length', 'max'=>9),
			array('voicemail', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, agent, depart_id, pin, name, last_login_unix, last_logoff_unix, last_login_at, login_status, last_comcenter_view, last_comcenter_login, panel_group, number_id, pre_iftime, pre_redirect, post_busy, post_noanswer, post_noanswer_sec, type, departs_id, com_new_as, time_from, time_to, is_const, workday_id, voicemail, cos_id', 'safe', 'on'=>'search'),
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
			'agent' => 'Agent',
			'depart_id' => 'Depart',
			'pin' => 'Pin',
			'name' => 'Name',
			'last_login_unix' => 'Last Login Unix',
			'last_logoff_unix' => 'Last Logoff Unix',
			'last_login_at' => 'Last Login At',
			'login_status' => 'Login Status',
			'last_comcenter_view' => 'Last Comcenter View',
			'last_comcenter_login' => 'Last Comcenter Login',
			'panel_group' => 'Panel Group',
			'number_id' => 'Number',
			'pre_iftime' => 'Pre Iftime',
			'pre_redirect' => 'Pre Redirect',
			'post_busy' => 'Post Busy',
			'post_noanswer' => 'Post Noanswer',
			'post_noanswer_sec' => 'Post Noanswer Sec',
			'type' => 'Type',
			'departs_id' => 'Departs',
			'com_new_as' => 'Com New As',
			'time_from' => 'Time From',
			'time_to' => 'Time To',
			'is_const' => 'Is Const',
			'workday_id' => 'Workday',
			'voicemail' => 'Voicemail',
			'cos_id' => 'Cos',
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
		$criteria->compare('agent',$this->agent,true);
		$criteria->compare('depart_id',$this->depart_id);
		$criteria->compare('pin',$this->pin,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('last_login_unix',$this->last_login_unix,true);
		$criteria->compare('last_logoff_unix',$this->last_logoff_unix,true);
		$criteria->compare('last_login_at',$this->last_login_at,true);
		$criteria->compare('login_status',$this->login_status,true);
		$criteria->compare('last_comcenter_view',$this->last_comcenter_view);
		$criteria->compare('last_comcenter_login',$this->last_comcenter_login);
		$criteria->compare('panel_group',$this->panel_group);
		$criteria->compare('number_id',$this->number_id);
		$criteria->compare('pre_iftime',$this->pre_iftime);
		$criteria->compare('pre_redirect',$this->pre_redirect);
		$criteria->compare('post_busy',$this->post_busy);
		$criteria->compare('post_noanswer',$this->post_noanswer);
		$criteria->compare('post_noanswer_sec',$this->post_noanswer_sec);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('departs_id',$this->departs_id,true);
		$criteria->compare('com_new_as',$this->com_new_as,true);
		$criteria->compare('time_from',$this->time_from);
		$criteria->compare('time_to',$this->time_to);
		$criteria->compare('is_const',$this->is_const);
		$criteria->compare('workday_id',$this->workday_id);
		$criteria->compare('voicemail',$this->voicemail,true);
		$criteria->compare('cos_id',$this->cos_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Agents the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
