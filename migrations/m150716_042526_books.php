<?php

use yii\db\Schema;
use yii\db\Migration;

class m150716_042526_books extends Migration
{
    public function up()
    {
        $this->createTable('books', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING,
            'author' => Schema::TYPE_STRING,
            'isbn' => Schema::TYPE_INTEGER,
            'type' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_DATETIME,
            'updated_at' => Schema::TYPE_DATETIME,
          ]);
    }

    public function down()
    {
        $this->dropTable('books');
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
