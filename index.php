<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Продажа новостроя в Казахстане | homsters.kz</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>

<header class="container">
    <div id="header-top" class="row">
        <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img src="images/homsters-kz-logo.svg" class="navbar-brand" alt="homsters.kz"/>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Что говорят застройщики</a></li>
                            <li><a href="#">Цифры о нас</a></li>
                            <li><a href="#">Видео</a></li>
                            <li><div id="menu-cta">Подключтить мой ЖК бесплатно</div></li>
                        </ul>
                    </div>
                </div>
            </nav>
    </div>
</header>

<div class="container">

    <div id="video-banner" class="row">
        <?php include 'includes/video-banner.html';?>
    </div>

    <div id="partners" class="row">
       <?php include 'includes/partners.html';?>
    </div>

    <div id="sales-analytics" class="row">
        <?php include 'includes/sales-analytics.html';?>
    </div>

    <div id="testimanials-one" class="row">
        <?php include 'includes/testimanials-one.html';?>
    </div>

    <div id="cta-blue" class="row text-center">
        <div class="cta-white">Подключить мой ЖК</div>
    </div>

    <div id="advantage-one" class="row">
        <?php include 'includes/advantage-one.html';?>
    </div>

    <div id="excerption-one" class="row">
        <?php include 'includes/excerption-one.html';?>
    </div>

    <div id="cta-gray" class="row">
        <div class="button-cta-orange"></div>
    </div>

    <div id="why-we" class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
    </div>

    <div id="contact-us-one" class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-5"></div>
        <div class="col-sm-5"></div>
    </div>

    <footer class="row">
        <div id="level-one" class="col-sm-12">
            <div class="col-sm-2"><img src="images/homsters-kz-logo.svg" alt="homsters.kz"/></div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="">Новостройки</a>
                        <a href="">Вторичка</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="">Застройщики</a>
                        <a href="">Ипотека</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="">Акции</a>
                        <a href="">Обзоры</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <form action="">
                    <input type="text" name="email" value=""/>
                    <input type="button" value="Подписаться на новости"/>
                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div id="level-two" class="col-sm-12 text-center">
            <ul class="list-unstyled">
                <li>О нас</li>
                <li>Карьера</li>
                <li>Новости</li>
                <li>Блог</li>
                <li>Акции</li>
                <li>Сотрудничество</li>
                <li>Рейтинг новостроек</li>
                <li>Обзоры новостроек</li>
                <li>Аналитика</li>
            </ul>
        </div>
        <div id="level-three" class="col-sm-12 text-center">
            <ul class="list-unstyled">
                <li>Copyright2017@Homsters.kz</li>
            </ul>
            <ul class="list-unstyled">
                <li>Карта сайта</li>
                <li>Гид по недвижимости</li>
                <li>Условия</li>
                <li>Связаться</li>
            </ul>
        </div>
    </footer>

</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="js/script.js"></script>
</body>
</html>