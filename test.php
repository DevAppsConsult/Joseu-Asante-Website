<?php
require("libs/fetch_data.php");

if(sizeof(getMyBooks()) >0)
{
    $books = getMyBooks();
    foreach($books as $book)
        echo "Book name = ".$book['name'].' -- Book id '.$book['id'].'<br/>';
}