<?php
/* @var $this RemontController */
/* @var $model Remont */

$this->breadcrumbs=array(
	'Remonts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Remont', 'url'=>array('index')),
);

?>

<h1>Remonts</h1>

<?php
/* @var $user User */

$criteria = new CDbCriteria();
$criteria->addCondition('denezhka_id!=0');

$users = new CActiveDataProvider('User',array('criteria'=>$criteria));

foreach($users->getData() as $user){
    $status = $user->callStatus($m);

    $this->renderPartial('_stat',array('status'=>$status,'m'=>$m));
}


?>
