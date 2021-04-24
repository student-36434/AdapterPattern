<?php

include_once __DIR__ . '/Classes/PaperBook.php';
include_once __DIR__ . '/Classes/EBook.php';
include_once __DIR__ . '/Classes/EBookAdapter.php';

use Classes\EBook;
use Classes\EBookAdapter;
use Classes\PaperBook;

$book = new PaperBook(100);

$book->open();
$book->turnPage();

echo $book->getPage() . '<br>';

$eBook = new EBook(100);
$book = new EBookAdapter($eBook);

$book->open();
$book->turnPage();

echo $book->getPage() . '<br>';