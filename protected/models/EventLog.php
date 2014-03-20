<?php

/**
 * This is the model class for table "event_log".
 *
 * The followings are the available columns in table 'event_log':
 * @property integer $id
 * @property integer $date
 * @property string $obj_type
 * @property integer $obj_id
 * @property integer $agent_id
 * @property string $event
 * @property integer $param1
 * @property integer $param2
 * @property integer $param3
 */
class EventLog extends CActiveRecord
{
    public $date_start;
    public $date_end;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event_log';
	}


    public function init(){
        $this->date_start = date("Y-m-1");
        $this->date_end = date("Y-m-t");
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, obj_id, agent_id, param1, param2, param3', 'numerical', 'integerOnly'=>true),
			array('obj_type', 'length', 'max'=>9),
			array('event', 'length', 'max'=>11),
            array('date_start, date_end','safe'),
            // The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, obj_type, obj_id, agent_id, event, param1, param2, param3', 'safe', 'on'=>'search'),
            array('start_date, end_date','safe','on'=>'search')
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
			'date' => 'Date',
			'obj_type' => 'Obj Type',
			'obj_id' => 'Obj',
			'agent_id' => 'Agent',
			'event' => 'Event',
			'param1' => 'Param1',
			'param2' => 'Param2',
			'param3' => 'Param3',
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
		//$criteria->compare('date',$this->date);
		//$criteria->compare('obj_type',$this->obj_type,true);
        $criteria->compare('obj_type','agent');
		$criteria->compare('obj_id',$this->obj_id);
        $criteria->compare('agent_id',$this->agent_id);
        $criteria->compare('event',$this->event,true);
        $criteria->compare('param1',$this->param1);
        $criteria->compare('param2',$this->param2);
        $criteria->compare('param3',$this->param3);

        $criteria->addBetweenCondition('date',strtotime("$this->date_start 00:00:00"),strtotime("$this->date_end 23:59:59"));
        /*return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
        ));*/

        $dataProvider = new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));

        //$dataProvider->pagination = false;

		return $dataProvider;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EventLog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    //на вход нужны таблица array[agent][i] = array(event,date)
    //получить на выходе таблицы array[agent][i]=array(login,logoff)
    public function workList(array $workers){
        $workList = array();
        $zero  = array(strtotime($this->date_start." 00:00:00"),strtotime($this->date_end." 23:59:59")+1);
        foreach($workers as $agent=>$data){
            $line = $zero;
            $step = 0;
            foreach($data as $val){
                list($event,$date) = $val;

                if($event=='login'){
                    $step=0;
                    $line[$step]=$date;
                }
                if($event=='logoff'){
                    $step=1;
                    $line[$step]=$date;
                    $workList[$agent][]=$line;    //logoff завершает линию, логин по умочанию - первая дата
                    $line = $zero;
                }
            }
            if($step==0){
                //логин не нашел свой логофф
                $workList[$agent][]=$line;    //логин завершается с логофом по умолчанию
            }
        }
        return $workList;
    }

    //получить выход от функции workList и превратить это в таблицу с часами
    public function workTable(array $workList,$step=GridDate::STEP_HOUR){
        $workTable = array();

        //foreach($workList as $agent=>$data){
        foreach($workList as $agent=>$data){
            foreach($data as $val){
                list($start,$end) = $val;

                $grid = new GridDate($start,$end,$step);  //создать рабочую сетку "по часам"
                //print_r($grid);
                foreach($grid->getGrid() as $hour=>$sec){

                    if(isset($workTable[$agent][$hour])) $workTable[$agent][$hour]+=$sec;
                    else $workTable[$agent][$hour] = $sec;
                }
            }
        }

        return $workTable;
    }

    public function workers($dataProvider){
        $dataProvider->pagination = false;

        $workers = array();
        foreach($dataProvider->getData() as $event){
            $workers[$event->param2][] = array($event->event, $event->date);
        }
        return $workers;
    }

    //magic function :)
    //возвращает CArrayDataProvider
    public function workTime($dataProvider){
        //бьем инфу по агентам
        $workers = $this->workers($dataProvider);

        $filter = function($val,$min=9,$max=24){
            if($val>=$min && $val<$max) return true;
            return false;
        };

        $workTableDay = array();
        $workTableNight = array();
        //foreach($workTable as $agent=>$table){
        $workTable = $this->workTable($this->workList($workers));
        foreach($workTable as $agent=>$table){
            foreach($table as $hour=>$sec){
                $h = (int) date("H",$hour);
                if($filter($h)) $workTableDay[$agent][$hour] = $sec;
                else    $workTableNight[$agent][$hour] = $sec;
            }
        }

        $sum = array();

        $array_sum = function(&$array,$key){
            if(isset($array[$key])) return array_sum($array[$key]);
        };

        foreach($workTable as $agent=>$table){
            $sum['all'][$agent] = $array_sum($workTable,$agent);
            $sum['day'][$agent] = $array_sum($workTableDay,$agent);
            $sum['night'][$agent] = $array_sum($workTableNight,$agent);
        }

        $array_get = function(&$array,$key,$default=0){
            if(isset($array[$key])) return $array[$key];
            else return $default;
        };

        $wTable = array();
        $i = 0;
        foreach($workTable as $agent=>$table){
            $row = array(
                'id'=>++$i,
                'agent'=>$agent,
                'night'=>$array_get($sum['night'],$agent),
                'day'=>$array_get($sum['day'],$agent),
                'all'=>$array_get($sum['all'],$agent)
            );
            $wTable[] = $row;
        }

        $dataProviderReturn = new CArrayDataProvider($wTable, array(
            'id'=>'agent',
            /*'sort'=>array(
                'attributes'=>array(
                    'agent'
                ),
            ),*/
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));

        //echo '<pre>';
        //print_r($dataProviderReturn);
        return $dataProviderReturn;

    }
}
