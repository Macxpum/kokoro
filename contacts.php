<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

    <head>
        <?php include 'include/head.php'; ?>
        <link rel="stylesheet" href="assets/styles/contacts.css">
    </head>

    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
        <main>
            <h1 class="title">КОНТАКТЫ</h1>
            <section class="contacts">
                <div class="contact">
                    <span class="post">Руководитель спортивного клуба</span>
                    <span class="name">Петровичев Игорь Станиславович</span>
                    <a class="contact-contact hover" href="tel:+79858902112">+7 (985) 890-21-12</a>
                </div>
                <div class="contact">
                    <span class="post">Главный секретарь спортивного клуба</span>
                    <span class="name">Войтенок Денис Сергеевич</span>
                    <a class="contact-contact hover" href="tel:+79265345600">+7 (926) 534-56-00</a>
                </div>
                <div class="contact">
                    <span class="post">Электронная почта:</span>
                    <a class="contact-contact hover" href="mailto:kokoro@gmail.com">kokoro@gmail.com</a>
                </div>
                <div class="contact">
                    <span class="post">Адрес:</span>
                    <a class="contact-contact hover" href="https://yandex.ru/maps/-/CPB3U4ik">Московская обл.,
                        г.Электроугли,
                        ул.Школьная
                        д.4</a>
                </div>
                <div class="contact">
                    <span class="post">Режим работы:</span>
                    <span class="name">09:00 - 22:00</span>
                </div>
                <img src="assets/images/index/map.webp" alt="карта" class="map">
                <a href="subscribe.php" class="hover btn">ЗАПИСАТЬСЯ</a>
            </section>
        </main>
        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    </body>

</html>