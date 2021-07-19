<?php

require_once 'Book.php';
require_once 'BookFactory.php';

$book = BookFactory::create('Lord of the Books', 'Matthew Offen');
echo $book->getNameandAuthor();
