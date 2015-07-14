<?php

use yii\db\Schema;
use yii\db\Migration;

class m150714_091447_create_users_table extends Migration
{
    public function up()
    {
        $this->createTable('users', array(
            'id' => 'pk',
            'name' => 'CHAR(52) NOT NULL',
            'email' => 'VARCHAR (128) NOT NULL'
        ));
    }

    public function down()
    {
        echo "m150714_091447_create_users_table cannot be reverted.\n";
        $this->dropTable('users');
        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
