<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

    <head>
        <?php include 'include/head.php'; ?>
        <link rel="stylesheet" href="assets/styles/schedule.css">
    </head>

    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
        <main>
            <h1 class="title">РАСПИСАНИЕ</h1>
            <section class="directions">
                <div class="direction">
                    <h3 class="direction-title">КИОКУШИНКАЙ КАРАТЭ</h3>
                    <div class="direction-info">
                        <div class="direction-info_group">
                            <span class="group-categoru">ДЕТИ</span>
                            <span class="group-days">ВТ, ЧТ, СБ</span>
                            <span class="group-times">18:00 - 19:15</span>
                            <span class="group-hall">зал №20</span>
                        </div>
                        <div class="direction-info_group">
                            <span class="group-categoru">ПОДРОСТКИ</span>
                            <span class="group-days">ПН, СР, ПТ</span>
                            <span class="group-times">18:00 - 19:30</span>
                            <span class="group-hall">Зал №27</span>
                        </div>
                        <div class="direction-info_group">
                            <span class="group-categoru">ВЗРОСЛЫЕ</span>
                            <span class="group-days">ПН, СР, ПТ</span>
                            <span class="group-times">19:30 - 21:00</span>
                            <span class="group-hall">зал №2</span>
                        </div>
                    </div>
                </div>
                <div class="direction">
                    <h3 class="direction-title">ДЗЮДО И САМБО</h3>
                    <div class="direction-info">
                        <div class="direction-info_group">
                            <span class="group-categoru">ДЕТИ</span>
                            <span class="group-days">ВТ, ЧТ, СБ</span>
                            <span class="group-times">17:00 - 18:00</span>
                            <span class="group-hall">зал №6</span>
                        </div>
                        <div class="direction-info_group">
                            <span class="group-categoru">ПОДРОСТКИ</span>
                            <span class="group-days">ПН, СР, ПТ</span>
                            <span class="group-times">17:00 - 19:30</span>
                            <span class="group-hall">Зал №13</span>
                        </div>
                        <div class="direction-info_group">
                            <span class="group-categoru">ВЗРОСЛЫЕ</span>
                            <span class="group-days">ПН, СР, ПТ</span>
                            <span class="group-times">20:00 - 22:00</span>
                            <span class="group-hall">зал №19</span>
                        </div>
                    </div>
                </div>
                <div class="direction">
                    <h3 class="direction-title">ПРИКЛАДНОЕ БУДОКАЙ КАРАТЭ</h3>
                    <div class="direction-info">
                        <div class="direction-info_group">
                            <span class="group-categoru">ПОДРОСТКИ</span>
                            <span class="group-days">ПН, СР, ПТ</span>
                            <span class="group-times">18:00 - 20:30</span>
                            <span class="group-hall">Зал №5</span>
                        </div>
                        <div class="direction-info_group">
                            <span class="group-categoru">ВЗРОСЛЫЕ</span>
                            <span class="group-days">ПН, СР, ПТ</span>
                            <span class="group-times">18:00 - 20:30</span>
                            <span class="group-hall">зал №7</span>
                        </div>
                    </div>
                </div>
                </div>
                <a href="subscribe.php" class="hover btn">ЗАПИСАТЬСЯ</a>
            </section>
            <section class="first_class">
                <h1>ЧТО <span class="red">НУЖНО</span> ДЛЯ ЗАНЯТИЙ?</h1>
                <div class="things">
                    <span class="thing">Спортивная одежда</span>
                    <span class="thing">Чистое полотенце</span>
                    <span class="thing">Кимоно + пояс</span>
                    <span class="thing">Вода</span>
                    <span class="thing">Личные медикаменты</span>
                    <span class="thing">Медицинская справка</span>
                    <span class="thing">сменная обувь</span>
                    <span class="thing">ЗАщитная экипировка для киокушинкай каратэ</span>
                </div>
            </section>
            <p class="announcement">
                Перед началом занятий, необходимо, предоставить актуальный медицинский документ подтверждающий
                возможность занятий спортом (единоборствами) и предупредить заранее о наличии особенностей здоровья!
            </p>
        </main>
        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    </body>

</html>