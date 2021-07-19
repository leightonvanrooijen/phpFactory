<?php

class Book
{
    private string $name;
    private string $author;


    public function __construct(string $name, string $author) {
        $this->name = $name;
        $this->author = $author;
    }

    public function getNameandAuthor() {
        return $this->name . ' by ' . $this->author;
    }
}
