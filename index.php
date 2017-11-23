<?php include 'config.php';?>
<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title><?=TITLE;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=META_DESCRIPTION;?>">
    <meta name="keywords" content="<?=META_KEYWORDS;?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
<header class="container-fluid">
    <?php include 'includes/header.html';?>
</header>
<div class="container-fluid">
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
    <div id="cta-blue" class="row text-center live-bg">
        <div class="cta-white" data-toggle="modal" data-target="#сall-me">Подключить мой ЖК</div>
    </div>
    <div id="advantage-one" class="row">
        <?php include 'includes/advantage-one.html';?>
    </div>
    <div id="excerption-one" class="row">
        <?php include 'includes/excerption-one.html';?>
    </div>
    <div id="cta-gray" class="row live-bg">
        <div>
            <h2>Начните работу абсолютно бесплатно!</h2>
            <div class="cta-orange-fill" data-toggle="modal" data-target="#сall-me">Подключить мой ЖК</div>
        </div>
    </div>
    <div id="why-we" class="row">
        <?php include 'includes/why-we.html';?>
    </div>
    <div id="contact-us-one" class="row text-center">
        <?php include 'includes/contact-us-one.html';?>
    </div>
    <footer>
        <?php include 'includes/footer.html';?>
    </footer>
</div>
<!-- Modal -->
<div id="сall-me" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <img src="images/CdkGV2B9Rzuu4MLXapyd5g.png" alt="callback"/>
            <h4>Заказать обратный звонок</h4>
            <form onsubmit="homstmail.callback($(this));return false;">
                <input type="hidden" name="subj" value="Подключтить мой ЖК"/>
                <input type="text" name="name" value="" placeholder="Имя" required/>
                <input type="text" name="tel" value="" placeholder="Телефон" required/>
                <input type="submit" value="Позвонить мне"/>
            </form>
        </div>
    </div>
</div>
<div id="alerts" class="alert"></div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="js/jquery.slides.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>