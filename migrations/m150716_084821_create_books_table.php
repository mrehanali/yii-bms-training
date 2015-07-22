<?php

use yii\db\Schema;
use yii\db\Migration;

class m150716_084821_create_books_table extends Migration
{
    public function up()
    {
        $this->createTable('books', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(200) NOT NULL',
            'author' => Schema::TYPE_STRING. '(200) NOT NULL',
            'isbn' => Schema::TYPE_STRING . '(17) NOT NULL',
            'category_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at'=> Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at'=> Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT "0000-00-00 00:00:00"',
        ]);
    }

    public function down()
    {
        $this->dropTable('books');
    }
}
