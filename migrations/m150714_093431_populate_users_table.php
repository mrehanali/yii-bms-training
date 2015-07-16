<?php

use yii\db\Schema;
use yii\db\Migration;

class m150714_093431_populate_users_table extends Migration
{
    public function safeUp()
    {
        $this->insert('users', array(
            'name' => 'tayyab', 'email' => 'tayyab.hussain@coeus-solutions.de'));
        $this->insert('users', array(
            'name' => 'tayyab', 'email' => 'tayyab.hussain@coeus-solutions.de'));
        $this->insert('users', array(
            'name' => 'tayyab', 'email' => 'tayyab.hussain@coeus-solutions.de'));
        $this->insert('users', array(
            'name' => 'tayyab', 'email' => 'tayyab.hussain@coeus-solutions.de'));
        $this->insert('users', array(
            'name' => 'tayyab', 'email' => 'tayyab.hussain@coeus-solutions.de'));
        $this->insert('users', array(
            'name' => 'tayyab', 'email' => 'tayyab.hussain@coeus-solutions.de'));
    }

    public function safeDown()
    {
        $this->delete('users');
    }
}
