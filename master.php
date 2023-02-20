<?php
session_start();
include 'vendor/components/connect.php';
$idMaster = $_GET['id_master'];
$masters = $link->prepare("SELECT * FROM `masters` WHERE `id` = ?");
$masters->execute(array($idMaster));
$master = $masters->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мастер</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/plagins/jquery-ui/jquery-ui.css">
</head>

<body>
    <? include "vendor/components/header.php" ?>
    <div class="master_all">
        <div class="master_left">
            <h1><?= $master['name'] ?></h1>
            <a href="#p_zap" class="a_btn">Записаться</a>
            <div class="master_har">
                <div class="master_style">
                    <p>Предпочитаемые стили:</p>
                    <?
                    $styles = $link->prepare("SELECT * FROM `styles` WHERE `id_master` = ?");
                    $styles->execute(array($idMaster));
                    $arr = $styles->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($arr as $style) {
                    ?>
                        <span><?= $style['title'] ?></span>
                    <? } ?>
                </div>
                <div class="master_stag">
                    <p>Опыт работы:</p>
                    <span><?= $master['stage'] ?></span>
                </div>
            </div>
            <div class="master_about">
                <p><?= $master['desc'] ?></p>
            </div>
        </div>
        <div class="master_right">
            <picture><img src="vendor/img/<?= $master['foto'] ?>" alt=""></picture>
        </div>
    </div>
    <div class="block_slider">
        <div class="slider">
            <div class="line_slider">
                <?

                $gallarys = $link->prepare("SELECT * FROM `gallary` WHERE `id_master` = ?");
                $gallarys->execute(array($idMaster));
                foreach ($gallarys as $gallary) {
                ?>
                    <picture><img class="slider_img" src="vendor/img/slider/<?= $idMaster ?>/<?= $gallary['img'] ?>" alt=""></picture>
                <? } ?>
            </div>
            <div class="slider_buttons">
                <button id="prev" class="slider_button"> <img src="vendor/img/short_right.png" alt=""> </button>
                <button id="next" class="slider_button"> <img class="rotate" src="vendor/img/short_right.png"></button>
            </div>
        </div>
    </div>
    <p id="p_question" class="p_articles">Задать вопрос</p>
    <form class="form" method="post">
        <input name="name" class="input" type="text" placeholder="Введите ваше Имя" required></input><br>
        <input name="name_master" class="input" type="hidden" placeholder="Введите имя Mастера" value="<?= $master['name'] ?>" required></input>
        <input name="email" class="input" type="email" placeholder="Введите ваш E-mail" required></input><br>
        <input name="tel" class="input" type="tel" placeholder="Введите ваш Номер телефона" required></input><br>
        <textarea name="message" class="area" placeholder="Введите ваше сообщение"></textarea><br>
        <input name="otp" class="a_question" type="submit" value="Отправить">
        <div id="erconts"></div>
    </form>
    <? if(isset($_SESSION['user'])){ ?>
    <p id="p_zap" class="p_articles">Записаться</p>
    <div class="zap">
        <div class="feedback_form" id="form_two">
            <form class="form_feedback" method="post">
                <span>Ваше имя:</span>
                <input type="text" placeholder="Ваше имя*" class="input_name" name="name" value="<?=$_SESSION['user']['name'] ?>" required>
                <span>Ваш email:</span>
                <input type="email" placeholder="Email" id="em" class="input_email" name="email" value="<?=$_SESSION['user']['email'] ?>">
                <span>Ваш номер телефона:</span>
                <input type="tel" placeholder="Телефон*" class="input_tel" name="tel" value="<?=$_SESSION['user']['tel'] ?>" required>
                <input type="hidden" name="id_master" value="<?=$master['id'] ?>">
                <input type="hidden" name="name_master" value="<?=$master['name'] ?>">
                <span>Выберите дату и время:</span>
                <div class="date">
                    <input name="date" type="text" class="datepicker" placeholder="Выберите дату" readonly required>
                </div>
                <div class="time">

                </div>
                <input type="hidden" class="time_input" name="time" value="">
                <input type="submit" value="Отправить" class="input_submit" name="send">
                <div class="erconts"></div>
            </form>
        </div>
    </div>
    <? } else { echo '<p id="p_zap" class="p_articles"><a style="color:#BB8C5F;" href="login.php">Авторизуйтесь</a> для того чтобы записаться</p>'; } ?>
    <div ID="toTop"> ^ Наверх </div>
    <? include "vendor/components/footer.php" ?>
    <script src="assets/plagins/jquery-ui/external/jquery/jquery.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/toTop.js"></script>
    <script src="assets/js/feedback.js"></script>
    <script src="assets/plagins/jquery-ui/jquery-ui.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>