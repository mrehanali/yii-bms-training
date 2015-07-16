<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;

    if(count($books)){
        foreach($books as $book){
            echo '<div>Title : '.$book->title.'<div>
                <div>Author : '.$book->author.'<div>
                <div>ISBN : '.$book->isbn.'<div>
                <div>Type : '.$book->type.'<div>
            <br>';
        }
    }else{
        echo 'No Book found.';
    }
?>
