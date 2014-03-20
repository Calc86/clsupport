<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 28.10.13
 * Time: 6:41
 */

class GridDate/* extends CComponent*/{
    protected $start;
    protected $end;
    protected $grid = array();
    private $length;
    private $steps;
    private $sum=0;

    private $head=0;
    private $tail=0;
    private $notTail=0;
    private $walkTime=0;

    const STEP_HOUR = 3600;
    const STEP_DAY = 86400;

    public function __construct($start,$end,$step=GridDate::STEP_HOUR){
        $this->start = $start;
        $this->end = $end;
        $this->length['sec'] = $this->end - $this->start;

        $dateFilter = $step==GridDate::STEP_HOUR ? "Y-m-d H:00:00" : "Y-m-d 00:00:00";

        $hourStart = strtotime(date($dateFilter,$this->start));
        $hourEnd = strtotime(date($dateFilter,$this->end));
        $this->walkTime = $hourEnd-$hourStart;

        //$step = 60*60;  //hour
        $this->steps = floor($this->walkTime / $step);
        $this->length['hour'] = round(($this->end - $this->start)/$step,2);

        $this->head = $step-($start-$hourStart);  //если равны, то кормим час
        $this->grid[$hourStart] = $this->head;
        $this->sum+=$this->head;
        // 1 - исключаем первый элемент, <-исключаем последний элемент
        for($i=1;$i<$this->steps;$i++){
            $hour = $hourStart + $i*$step;
            $this->grid[$hour] = $step;
            $this->sum+=$this->head;
        }
        $this->tail = ($end-$hourEnd);
        if(isset($this->grid[$hourEnd])){
            //echo ">>>";
            //по каким то причинам мы заполнили данную ячейку
            //нам нужно пересечение времени
            $this->notTail = $step-$this->tail; //обратная величина от хвоста
            $this->grid[$hourEnd] -= $this->notTail;   //вычитаем из имеющегося значения
            $this->sum-=$this->notTail;
        }
        else{
            if($this->tail) $this->grid[$hourEnd] = $this->tail;    //если есть хвост
        }
        //$this->sum+=$this->head;
    }

    public function getGrid(){
        return $this->grid;
    }
} 