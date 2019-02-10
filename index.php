<?php

require __DIR__ . '/autoload.php';

$article = new \App\Models\Article();

$index = new \App\View\View();

$index->assign('news', $article::findAll());
$index->display('index.php');