<?php

require __DIR__ . '/../autoload.php';

$db = new \App\Db();

var_dump($db->execute('INSERT INTO news (title, content) VALUES ("Новость", "Содержание новости")', []));