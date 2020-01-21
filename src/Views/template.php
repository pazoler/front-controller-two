<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><? echo $page_title; ?></title>
</head>
<body>
    <nav>
        <a href="/">Главная</a>
        <a href="/books">Книги</a>
        <a href="/info">Информация</a>
        <a href="/shop">Магазин</a>
    </nav>

    <div>
        <? include_once $content; ?>
    </div>


</body>
</html>