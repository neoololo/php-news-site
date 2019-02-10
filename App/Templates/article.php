<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../../Styles/main.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1><a href="index.php">Новости</a></h1>
    </header>
    <main class="article">
        <h2 class="article__title"><?php echo $this->data['article']->title; ?></h2>
        <div class="article__content"><?php echo $this->data['article']->content; ?></div>
    </main>
</body>
</html>