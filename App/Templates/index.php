<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Новости</h1>
    </header>
    <main>
        <?php foreach($this->data['news'] as $article) { ?>
            <div class="article">
                <h2 class="article__title">
                    <?php echo $article->title; ?>
                </h2>
                <div class="article__content">
                    <?php echo $article->content; ?>
                </div>
            </div>
        <?php } ?>
    </main>
</body>
</html>