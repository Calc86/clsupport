<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 21.03.14
 * Time: 15:28
 */

/* @var $status array */

/**
 * status line
 * @param $cur
 * @param $max
 * @return string
 */

?>

<table>
    <tr>
        <td><?=date("d.m.y")?></td>
        <td><?=date("1-t.m.Y")?></td>
    </tr>
    <tr>
        <td><?=Yii::app()->user->name?></td>
        <td><?=Remont::CALL_COST?>руб/зв => <?=$status['month']?>зв/<?=($status['month']*Remont::CALL_COST)?>руб</td>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <td>План</td>
                    <td><?=$status['day']?>/<?=Remont::CALL_PLAN?> <?=(Remont::statusLine($status['day'],Remont::CALL_PLAN))?> <?=($status['day']*Remont::CALL_COST)?>/<?=(Remont::CALL_PLAN*Remont::CALL_COST)?> руб.</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
