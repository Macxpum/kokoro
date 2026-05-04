<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

    <head>
        <?php include 'include/head.php'; ?>
        <link rel="stylesheet" href="assets/styles/coaches.css">
    </head>

    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
        <main>
            <div class="title-box">
                <h1 class="title">СЭНСЭЙ</h1>
                <span class="title-subscript"><span class="red">БОЛЬШЕ</span>, ЧЕМ ТРЕНЕР</span>
            </div>
            <section class="coaches">
                <div class="coach">
                    <div class="coach-subscribe">
                        <img class="coach-img" src="assets/images/Для_заполнения_бд/igor.webp">
                        <p onclick="igor()" class="hover subscribe">Записаться</p>
                    </div>
                    <div class="coach-info">
                        <span class="coach-surname">Петровичев<br>
                            <span class="coach-name">Игорь Станиславович</span>
                        </span>
                        <span class="coach-age">Возраст: 53 года</span>
                        <span class="coach-experience_sports">Стаж занятий единоборствами: 25 лет</span>
                        <span class="coach-experience_level">Мастерская степень: 3 Дан IBK Russia</span>
                        <span class="coach-experience_teaching">Стаж преподавания: 15 года</span>
                        <span class="coach-directions">Направление: Кумитэ/Ката/Прикладная техника</span>
                        <span class="coach-education">Образование: Физкультурно-педагогическое</span>
                    </div>
                </div>
                <div class="coach">
                    <div class="coach-subscribe">
                        <img class="coach-img" src="assets/images/Для_заполнения_бд/denis.webp">
                        <p onclick="denis()" class="hover subscribe">Записаться</p>
                    </div>
                    <div class="coach-info">
                        <span class="coach-surname">Войтенок<br>
                            <span class="coach-name">Денис Сергеевич</span>
                        </span>
                        <span class="coach-age">Возраст: 19 лет</span>
                        <span class="coach-experience_sports">Стаж занятий единоборствами: 11 лет</span>
                        <span class="coach-experience_level">Мастерская степень: 1 Дан IBK Russia</span>
                        <span class="coach-experience_teaching">Стаж преподавания: 4 года</span>
                        <span class="coach-directions">Направление: Кумитэ/Ката</span>
                        <span class="coach-education">Образование: Физкультурно-педагогическое (на обучении)</span>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="about_us">
                <h1 class="about_us-title">О НАС</h1>
                <div class="speaches">
                    <p class="speach-01">Игорь Станиславович и Денис Сергеевич идут рука об руку уже на протяжении 11
                        лет. В начале это был путь Сэнсэя и ученика, а теперь - путь двух мастеров.</p>
                    <p class="speach-02">“Благодаря накопленному опыту и современным подходам - развитие клуба и
                        обучение спортсменов проходит на очень высоком уровне. Мы возвращаем традицию и стараемся идти в
                        ногу со временем. Растим учеников и идём дальше” </p>
                </div>
            </div>
            <?php include 'include/footer.php'; ?>
        </footer>
        <script src="assets/scripts/autofill_form.js"></script>
    </body>

</html>