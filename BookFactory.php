<?php

class BookFactory
{
    public static function create(string $name, string $author) {
        return new Book($name, $author);
    }
}
