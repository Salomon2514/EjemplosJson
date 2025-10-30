<?php

class Book {
    public $id;
    public $label;

}


$book = new Book();

$book->id = 101;

$book->label = "Lorem ipsum";


$jsonData = json_encode($book);

echo $jsonData."\n";

?>