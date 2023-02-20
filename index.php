<?php
session_start();
include 'vendor/components/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deep Art</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <? include "vendor/components/header.php" ?>
    <div class="fon">
        <picture><img src="vendor/img/фон.png" alt=""></picture>
    </div>
    <div class="all">
        <div class="text_center" id="p_about">
            <p class="p_center">Качество в любом стиле и маштабе</p>
            <p class="p_cent_two">О СТУДИИ</p>
            <div class="border"></div>
        </div>
        <div class="about">
            <p>Студии «DeepArt» - самый масштабный тату-проект в городе Омске, объединяющий в себе две студии,
                талантливых мастеров и тысячи счастливых гостей! В 2017 году перешли на Российский уровень, открыв
                третью студию, одну из лучших в Москве.</p>
            <li>Качество нашей работы и уровень мастеров признаны наградами фестивалей/конвенций России и Европы.
                Воплотим любую Вашу идею, на самом высоком уровне - от аккуратной надписи до масштабной художественной
                работы в любом стиле.</li>
            <li>В ходе работы используем только сертифицированное современное оборудование, лучшие пигменты и стерильные
                одноразовые расходные материалы, что гарантирует высокое качество и безопасность оказываемых услуг.</li>
            <li>Индивидуальный подход к каждому клиенту. Грамотно проконсультируем по всем вопросам. Поможем в выборе
                идеи, места, размера татуировки. Подскажем, как нам достичь идеальной татуировки! Консультация,
                разработка эскиза (проекта) - бесплатно!</li>
            <li>Более 1000 реальных благодарных отзывов о работе с нашей командой! Мы знаем как предоставить комфортную
                атмосферу и прийти к отличным результатам!</li>
            <li>Студия «Tattoo-Leader» — обращаясь к нам, Вы доверяете себя профессионалам!</li>
        </div>
        <div class="plus">
            <div class="pal">
                <p>Качество в любом стиле и маштабе</p>
            </div>
            <div class="kre">
                <p>Безопасность</p>
            </div>
            <div class="serd">
                <p>Сервис и комфорт</p>
            </div>
            <div class="cas">
                <p>Скорость</p>
            </div>
        </div>
        <div class="text_center" id="p_master">
            <p class="p_center">Опыт бесценен</p>
            <p class="p_cent_two">МАСТЕРА</p>
            <div class="border"></div>
        </div>
        <div class="master">
            <?
            $masters = $link->prepare("SELECT * FROM `masters`");
            $masters->execute();
            $array = $masters->fetchAll(PDO::FETCH_ASSOC);
            foreach ($array as $master ){
            ?>
            <div class="master_card">
                <div class="master_foto">
                    <picture><a href="master.php?id_master=<?=$master['id'] ?>"><img src="vendor/img/<?= $master['foto'] ?>" alt=""></a></picture>
                </div>
                <div class="about_master">
                    <p><?=$master['name'] ?></p>
                    <p>Предпочитаемые стили:</p>
                    <? 
                    $styles = $link->prepare("SELECT * FROM `styles` WHERE `id_master` = ?");
                    $styles->execute(array($master['id']));
                    $arr = $styles->fetchAll(PDO::FETCH_ASSOC);
                    foreach($arr as $style){
                    ?>
                    <p class="about_ser"><?= $style['title'] ?></p>
                    <? } ?>
                    <p>Опыт раблоты: <?=$master['stage'] ?></p>
                </div>
            </div>
            <? } ?>
        </div>
        <div class="text_center" id="p_price">
            <p class="p_center">Всё имеет свою цену</p>
            <p class="p_cent_two">ЦЕНЫ</p>
            <div class="border"></div>
        </div>
        <div class="price">
            <p>Минимальная стоимость татуировки.................................................................1500р
            </p>
            <p>Небольшие работы до 10х10 см ..........................................................от 1500 до 5000р
            </p>
            <p>Средняя работа 15х15 см .....................................................................от 5000 до
                9000р
            </p>
            <p>Стоимость полного дня мастера, объем работы до формата А4 (5-7ч).........от 9000р
            </p>
            <p>Анестезия(не гель)..................................................................................................от
                350р
            </p>
            <p>Исправление(обновление) старой татуировки..............................................от 3000р
            </p>
            <p>Консультация
                мастера..................................................................................бесплатно
            </p>
            <p>Разработка индивидуального эскиза..........................................................бесплатно
            </p>
            <p>Коррекция нашей работы в течении 2х месяцев.......................................бесплатно
            </p>
            <p>Коррекция нашей работы после 2х месяцев...................................................от 1500р
            </p>
        </div>
    </div>
    <div class="text_center" id="p_contact">
        <p class="p_center">Нас легко найти</p>
        <p class="p_cent_two">КОНТАКТЫ</p>
        <div class="border"></div>
    </div>
    <div class="contact">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18312.80378549742!2d73.38188934348916!3d54.98887237306421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43aafe1a35508705%3A0x66e89ef79d64a2aa!2z0KHQutCy0LXRgCDQuNC80LXQvdC4INCU0LfQtdGA0LbQuNC90YHQutC-0LPQvg!5e0!3m2!1sru!2sru!4v1667712027542!5m2!1sru!2sru"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <? include "vendor/components/footer.php" ?>
    <div ID = "toTop"> ^ Наверх </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/toTop.js"></script>
</body>

</html>