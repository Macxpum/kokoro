<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

    <head>
        <?php include 'include/head.php'; ?>
        <link rel="stylesheet" href="assets/styles/index.css">
        <link rel="stylesheet" href="assets/styles/index_adaptive.css">
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
                        href="https://yandex.ru/maps/org/sportklub_tori/19492307910/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Спортклуб Тори</a><a
                        href="https://yandex.ru/maps/21642/elektrougli/category/sports_hall_gym/41430094175/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Спортивный, тренажёрный зал в
                        Электроуглях</a><iframe
                        src="https://yandex.ru/map-widget/v1/?ll=38.211615%2C55.715323&mode=poi&poi%5Bpoint%5D=38.211265%2C55.715314&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D19492307910&z=18.8"
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