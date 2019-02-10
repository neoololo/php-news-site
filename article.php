<?php

require __DIR__ . '/autoload.php';

 if (isset($_GET['id'])) {
    $article = \App\Models\Article::findById($_GET['id']);
 }

 $view = new \App\View\View();

 $view->assign('article', $article[0]);
 $view->display('article.php');


