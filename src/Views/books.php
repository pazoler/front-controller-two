<h2>Страница с книгами</h2>
<?php foreach ($all_books as $book) :?>
    <div>
        <h1><? echo $book['title'];?></h1>
        <p><? echo $book['description']; ?></p>
        <p>Количество страниц:
            <? echo $book['page_count'];?>
        </p>
        <a href="/books/show/<? echo $book['id']; ?>">
            Подробная информация о книге
        </a>
    </div>
<?php endforeach; ?>