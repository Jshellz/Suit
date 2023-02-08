<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\Connection;

class Yii2Base extends ActiveRecord
{
    public static function getDb(): Connection
    {
        return \Yii::$app->db;
    }

}