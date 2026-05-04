<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

    <head>
        <?php include 'include/head.php'; ?>
        <link rel="stylesheet" href="assets/styles/index.css">
    </head>

    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
        <main>
            <section class="greeting">
                <span>ШКОЛА<br>
                    <span>БОЕВЫХ</span><br>
                    ИССКУСТВ И<br>
                    ЕДИНОБОРСТВ</span>
                <img src="assets/images/index/fighters.webp" alt="борцы">
            </section>
            <section class="directions_schedule">
                <h1>НАПРАВЛЕНИЯ</h1>
                <div class="directions">
                    <div class="direction">
                        <h3>ДЗЮДО И САМБО</h3>
                        <img src="assets/images/index/judo.webp" alt="иероглифы">
                        <p>Дзюдо и самбо одни из самых популярных видов борьбы в России, позволяющие развиваться в
                            спорте и выйти на олимпийский уровень</p>
                    </div>
                    <div class="direction">
                        <h3>КИОКУШИНКАЙ КАРАТЭ</h3>
                        <img src="assets/images/index/kyokushin.webp" alt="иероглифы">
                        <p>Киокушинкай каратэ это один из самых контактных видов каратэ, благодаря тренировкам каждый
                            сможет закалить тело и дух</p>
                    </div>
                    <div class="direction">
                        <h3>БУДОКАЙ КАРАТЭ</h3>
                        <img src="assets/images/index/IBK.webp" alt="иероглифы">
                        <p>Будокай каратэ является прикладной версией Киокушинкай каратэ, где разрешена борьба, удары в
                            голову руками</p>
                    </div>
                </div>
                <div class="schedule">
                    <h1>ГРУППЫ И РАСПИСАНИЕ</h1>
                    <div class="groups">
                        <div class="group">
                            <span class="gropup-categoru">КИОКУШИНКАЙ КАРАТЭ</span>
                            <span class="times">18:00 - 19:30</span>
                            <span class="days">ПН-СБ</span>
                        </div>
                        <div class="group">
                            <span class="gropup-categoru">ДЗЮДО/САМБО</span>
                            <span class="times">17:00 - 19:30</span>
                            <span class="days">ПН-СБ</span>
                        </div>
                        <div class="group">
                            <span class="gropup-categoru">БУДОКАЙ КАРАТЭ</span>
                            <span class="times">18:00 - 20:30</span>
                            <span class="days">ПН-СБ</span>
                        </div>
                    </div>
                    <a href="schedule.php" class="hover btn">подробнее</a>
                </div>
            </section>
            <section class="map">
                <p>Адрес: <a href="https://yandex.ru/maps/-/CPB3U4ik" class="hover">Московская обл., г.Электроугли,
                        ул.Школьная д.4</a></p>
                <div style="position:relative;overflow:hidden;"><a
                        href="https://yandex.ru/maps/21642/elektrougli/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Электроугли</a><a
                        href="https://yandex.ru/maps/21642/elektrougli/house/shkolnaya_ulitsa_4/Z0EYdAZhTk0GQFtvfXtwdH9kZw==/?ll=38.211781%2C55.715373&utm_medium=mapframe&utm_source=maps&z=17"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Школьная улица, 4 на карте
                        Электроуглей — Яндекс Карты</a><iframe
                        src="https://yandex.ru/map-widget/v1/?ll=38.211781%2C55.715373&mode=whatshere&utm_source=share&whatshere%5Bpoint%5D=38.211781%2C55.715373&whatshere%5Bzoom%5D=17&z=17"
                        width="560" height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe></div>
                <a href="https://yandex.ru/maps/-/CPB3U4ik" class="hover btn">подробнее</a>
            </section>

        </main>
        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    </body>

</html>