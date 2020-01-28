<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><? echo $page_title; ?></title>
    <link rel="stylesheet" href="/static/css/bootstrap.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="/static/js/bootstrap.bundle.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Блог</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles">Статьи</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nominations">Номинации</a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item mr-auto">
                    <a class="btn btn-warning" data-toggle="modal" data-target="#modal">Личный кабинет</a>
                </li>
            </ul>

        </div>
    </nav>
</header>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Авторизация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p id="error"></p>
                <form name="authorisation">
                    <div class="form-group">
                        <label for="login">Ваш логин</label>
                        <input name="login" type="text" class="form-control" id="login"  placeholder="логин">
                    </div>
                    <div class="form-group">
                        <label for="password">Ваш пароль</label>
                        <input name="pwd" type="password" class="form-control" id="password" placeholder="пароль">
                    </div>
                    <button type="submit" class="btn btn-warning">Войти</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <a role="button" href="/registration" class="btn btn-warning">Регистрация</a>
            </div>
        </div>
    </div>
</div>


<section class="container">
    <? include_once $content; ?>
</section>


<footer class="container-fluid bg-grey py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="logo-part">
                            <img src="https://picsum.photos/200/200?grayscale">
                        </div>
                    </div>
                    <div class="col-md-6 px-4">
                        <h6> О сайте</h6>
                        <p>Сайт для публикации статей</p>
                        <a href="#" class="btn-footer"> Подробнее </a><br>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 px-4">

                        <div class="row ">

                            <div class="col-md-6">
                                <h6> Меню</h6>
                                <ul>
                                    <li> <a href="#"> Главная</a> </li>
                                    <li> <a href="#"> Статьи</a> </li>
                                    <li> <a href="#"> Номинации</a> </li>
                                    <li> <a href="#"> О блоге</a> </li>
                                    <li> <a href="#"> Правила </a> </li>
                                </ul>
                            </div>
                            <div class="col-md-6 px-4">
                                <h6> Help us</h6>
                                <ul>
                                    <li> <a href="#"> Paypal</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <h6> Социальные сети</h6>
                        <ul>
                            <li> <a href="#"> FaceBook</a> </li>
                            <li> <a href="#"> Instagram</a> </li>
                            <li> <a href="#"> ВКонтакте</a> </li>
                        </ul>
                        <a href="#" class="btn-footer"> Написать нам</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/static/js/authorisation.js"></script>

</body>
</html>