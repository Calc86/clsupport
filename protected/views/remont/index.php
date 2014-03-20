<?php
/* @var $this RemontController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Remonts',
);

$this->menu=array(
	array('label'=>'Create Remont', 'url'=>array('create')),
	array('label'=>'Manage Remont', 'url'=>array('admin')),
);

$salt = substr(md5('salt'.rand()),0,10);
//echo $salt;
//echo '<br>';
//echo crypt('admin',$salt);
?>

<h1>Remonts</h1>

<table>
    <tr>
        <td>22.02.14</td>
        <td>1-28.02.2014</td>
    </tr>
    <tr>
        <td>Илья</td>
        <td>20руб/зв - 354зв/7080руб</td>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <td>План</td>
                    <td>0/20 ==========---------- 0/400 руб.</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
