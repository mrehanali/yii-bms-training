<?php

use yii\db\Schema;
use yii\db\Migration;

class m150727_101056_create_users_table extends Migration
{
    public function up()
    {
        $this->createTable('users', array(
            'id' => 'pk',
            'username' => 'VARCHAR (100) NOT NULL',
            'email' => 'VARCHAR (100) NOT NULL',
            'password' => 'VARCHAR (100) NOT NULL',
            'auth_key' => 'VARCHAR (128) NULL',
            'password_reset_token' => 'VARCHAR (255) NULL'
        ));
    }

    public function down()
    {
        $this->dropTable('users');
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
