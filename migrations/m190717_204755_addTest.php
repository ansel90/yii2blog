<?php

use yii\db\Migration;

/**
 * Class m190717_204755_addUsersFix
 */
class m190717_204755_addTest extends Migration
{
    public function up()
    {
        $this->createTable('test', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'is_admin' => $this->integer()->defaultValue(0),
            'photo' => $this->string()->defaultValue(null),
        ]);
    }

    public function down()
    {
        $this->dropTable('test');
    }
}