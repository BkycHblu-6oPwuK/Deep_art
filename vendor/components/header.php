<header>
    <div class="header_top">
        <div class="header_contact">
            <div class="n_tel"><a href="tel:+79525525252">+7 952 552-52-52</a></div>
            <div class="soc">
                <div class="viber"><a href="https://www.viber.com/ru/?utm_source=invite&utm_Medium=share&utm_campaign=msgtest">Viber</a></div>
                <div class="whats"><a href="https://www.whatsapp.com">Whats App</a></div>
                <div class="teleg"><a href="https://telegram.org">Telegram</a></div>
            </div>
        </div>
        <div class="logo">
            <div class="deep">
                <a href="index.php">
                    <p class="a_deep" href="">Deep Art</p>
                    <p class="a_tattoo" href="">Tattoo studio</p>
                </a>
            </div>
        </div>
        <div class="test"></div>
    </div>
    <div class="header_bottom">
        <div>
            <a href="index.php #p_about">О студии</a>
            <a href="index.php #p_price">Услуги</a>
            <a href="index.php #p_master">Мастера</a>
            <a href="index.php #p_price">Цены</a>
            <a href="index.php #p_contact">Контакты</a>
            <? if(!isset($_SESSION['user'])){?>
            <a href="login.php">Войти</a>
            <? } else { ?>
            <a href="zap.php?page=1">Записи</a>
            <? if($_SESSION['user']['status'] == '1'){echo '<a href="admin.php">Админ</a>';} ?>
            <a href="vendor/action/logOut.php">Выйти</a>
            <? } ?>
        </div>
    </div>
</header>