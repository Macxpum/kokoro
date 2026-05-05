<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

    <head>
        <?php include 'include/head.php'; ?>
        <link rel="stylesheet" href="assets/styles/about_school.css">
        <link rel="stylesheet" href="assets/styles/about_school_adaptive.css">
    </head>

    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
        <main>
            <h1 class="title">О ШКОЛЕ</h1>
            <section class="block-slogan">
                <h1 class="slogan">KOKO<span class="red">RO</span> — СЕРДЦЕ НАСТОЯЩЕГО БОЙЦА</h1>
                <p><b>KOKO<span class="red">RO</span></b> — это состояние, в котором соединяются разум, характер и
                    воля.Его переводят как «сердце», «душа» или «внутренний дух человека».</p>
                <p>В школе практикуются различные направления единоборств: Дзюдо, Каратэ Киокушинкай, Будокай каратэ и
                    Самбо. Всё это формирует не только физическую подготовку, но и дисциплину, характер и уважение к
                    традициям спорта.</p>
                <h1>СЭНСЕЙ. <span class="red">НАСТАВНИК.</span> МАСТЕР.</h1>
                <div class="school_leader">
                    <img src="/assets/images/about_school/sensei.webp" alt="мастер-наставник" class="leader_photo">
                    <div class="about_leader">
                        <p>Руководителем нашего клуба является <span class="red">Петровичев Игорь Станиславович</span> —
                            обладатель 3 дана IBK Каратэ России.</p>
                        <p>На протяжении многих лет он развивал школу, накапливал опыт, искал единомышленников и
                            формировал сильную команду спортсменов и тренеров.</p>
                        <p>Сегодня школа объединяет большое количество учеников, многие из которых достигли высоких
                            результатов на соревнованиях и получили чёрные пояса. </p>
                    </div>
                </div>
            </section>
            <section class="news">
                <h1>НОВОСТИ</h1>
                <div class="newsgroup_bloks">
                    <?php include("include/news_block.php") ?>
                </div>
                <a href="news.php" class="hover">ДРУГИЕ НОВОСТИ</a>
            </section>
        </main>
        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    </body>

</html>