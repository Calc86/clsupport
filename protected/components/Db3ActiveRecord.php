<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 13.03.14
 * Time: 18:20
 */

class Db3ActiveRecord extends CActiveRecord {
    private static $db3 = null;

    protected static function getDb3Connection()
    {
        if (self::$db3 !== null)
            return self::$db3;
        else
        {
            self::$db3 = Yii::app()->db3;
            if (self::$db3 instanceof CDbConnection)
            {
                self::$db3->setActive(true);
                return self::$db3;
            }
            else
                throw new CDbException(Yii::t('yii','Active Record requires a "db3" CDbConnection application component.'));
        }
    }

    public function getDbConnection()
    {
        return self::getDb3Connection();
    }
}
