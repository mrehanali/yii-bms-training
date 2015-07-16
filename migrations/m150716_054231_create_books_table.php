<?php

use yii\db\Schema;
use yii\db\Migration;

class m150716_054231_create_books_table extends Migration
{
    public function up()
    {
        $this->createTable('books', array(
            'id' => 'pk',
            'title' => 'CHAR(52) NOT NULL',
            'author' => 'VARCHAR (128) NOT NULL',
            'isbn' => 'VARCHAR (128) NOT NULL',
            'category' => 'VARCHAR (128) NOT NULL'
        ));
    }

    public function down()
    {
        echo "m150716_054231_create_books_table cannot be reverted.\n";
        $this->dropTable('books');
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
