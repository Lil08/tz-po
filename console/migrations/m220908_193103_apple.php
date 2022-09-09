<?php

use yii\db\Migration;

/**
 * Class m220908_193103_apple
 */
class m220908_193103_apple extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('apples', [
            'id' => $this->primaryKey(),
            'color' => $this->string(),
            'created_at' => $this->timestamp(),
            'fall_at' => $this->timestamp(),
            'status' => $this->integer(),
            'percent_eat' => $this->integer(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('apples');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220908_193103_apple cannot be reverted.\n";

        return false;
    }
    */
}
