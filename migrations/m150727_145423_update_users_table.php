<?php

use yii\db\Schema;


class m150727_145423_update_users_table extends webtoucher\migrate\components\Migration
{
    public function safeUp()
    {
        $this->addColumn('users', 'password', 'varchar(45) AFTER email');
        $this->addColumn('users', 'auth_key', 'varchar(32) AFTER password');
        $this->addColumn('users', 'password_reset_token', 'varchar(255) AFTER auth_key');


    }

    public function safeDown()
    {
        $this->dropColumn('users', 'password');
        $this->dropColumn('users', 'auth_key');
        $this->dropColumn('users', 'password_reset_token');

        return false;
    }
}