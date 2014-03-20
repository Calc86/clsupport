<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 13.03.14
 * Time: 18:20
 */

class Db2ActiveRecord extends CActiveRecord {
    private static $db2 = null;

    protected static function getDb2Connection()
    {
        if (self::$db2 !== null)
            return self::$db2;
        else
        {
            self::$db2 = Yii::app()->db2;
            if (self::$db2 instanceof CDbConnection)
            {
                self::$db2->setActive(true);
                return self::$db2;
            }
            else
                throw new CDbException(Yii::t('yii','Active Record requires a "db2" CDbConnection application component.'));
        }
    }

    public function getDbConnection()
    {
        return self::getDb2Connection();
    }
}
