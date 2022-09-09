<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * Apple model
 *
 * @property integer $id
 * @property string $color
 * @property string $created_at
 * @property string $fall_at
 * @property integer $status
 * @property integer $percent_eat
 */
class Apple extends ActiveRecord
{
    const STATUS_ON_TREE = 0;
    const STATUS_FELL = 1;
    const STATUS_ROTTEN = 2;
}