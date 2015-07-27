<?php

use yii\db\Schema;
use yii\db\Migration;

class m150727_070840_update_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('users', 'password', 'varchar(45) AFTER email');
        $this->addColumn('users', 'auth_key', 'varchar(32) AFTER password');
        $this->addColumn('users', 'password_reset_token', 'varchar(255) AFTER auth_key');
    }

    public function down()
    {
        $this->dropColumn('users', 'password');
        $this->dropColumn('users', 'auth_key');
        $this->dropColumn('users', 'password_reset_token');
    }

}
