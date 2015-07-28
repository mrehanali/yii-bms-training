<?php

use yii\db\Schema;
use yii\db\Migration;

class m150728_052218_create_users_table extends Migration
{
    public function up()
    {
        $this->createTable('users', [
            'id' => Schema::TYPE_PK,
            'first_name' => Schema::TYPE_STRING . '(100) NOT NULL',
            'last_name' => Schema::TYPE_STRING . '(100) NOT NULL',
            'username' => Schema::TYPE_STRING . '(20) NOT NULL',
            'password' => Schema::TYPE_STRING. '(64) NOT NULL',
            'email' => Schema::TYPE_STRING . '(100) NOT NULL',
            'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL',
            'password_reset_token' => Schema::TYPE_STRING . '(255) NOT NULL',
            'created_at'=> Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at'=> Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT "0000-00-00 00:00:00"',
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
