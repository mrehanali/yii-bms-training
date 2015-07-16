<?php

use yii\db\Schema;
use yii\db\Migration;

class m150716_055402_seed_books_table extends Migration
{
    public function safeUp()
    {
        $this->insert('books', array(
            'title' => 'book1', 'author' => 'author1', 'isbn' => '123', 'category' => 'fiction'));
        $this->insert('books', array(
            'title' => 'book2', 'author' => 'author2', 'isbn' => '124', 'category' => 'fiction'));
        $this->insert('books', array(
            'title' => 'book3', 'author' => 'author3', 'isbn' => '125', 'category' => 'fiction'));
        $this->insert('books', array(
            'title' => 'book4', 'author' => 'author4', 'isbn' => '126', 'category' => 'fiction'));

    }

    public function safeDown()
    {
        $this->delete('books');
    }
}
