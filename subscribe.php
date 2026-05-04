<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

    <head>
        <?php include 'include/head.php'; ?>
        <link rel="stylesheet" href="assets/styles/subscribe.css">
    </head>

    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
        <main>
            <h1 class="title">ЗАЯВКА НА ТРЕНЕРОВКИ</h1>

            <body>

                <form class="signup-form" action="include/subscribe_event_handler.php" method="post">
                    <label for="user_name">КАК ВАС ЗОВУТ?</label>
                    <input type="text" placeholder="ВАШЕ ИМЯ" id="user_name" name="user_name" required maxlength="255">
                    <label for="user_phone">ВАШ НОМЕР ТЕЛЕФОНА</label>
                    <input type="tel" placeholder="7----------" id="user_phone" name="user_phone" pattern="[0-9]{11,11}"
                        required maxlength="11">
                    <div class="form-row">
                        <div class="form-col">
                            <h3>ГРУППА:</h3>
                            <div class="checkbox-block">
                                <input type="checkbox" name="group-child" id="group-child">
                                <label for="group-child" class="checkbox">Детская</label>
                            </div>
                            <div class="checkbox-block">
                                <input type="checkbox" name="group-teenage" id="group-teenage">
                                <label for="group-teenage" class="checkbox">Подростковая</label>
                            </div>
                            <div class="checkbox-block">
                                <input type="checkbox" name="group-adult" id="group-adult">
                                <label for="group-adult" class="checkbox">Взрослая</label>
                            </div>
                        </div>
                        <div class="form-col">
                            <h3>НАПРАВЛЕНИЕ:</h3>
                            <div class="checkbox-block">
                                <input type="checkbox" name="direction-kiokushinkai" id="direction-kiokushinkai">
                                <label for="direction-kiokushinkai" class="checkbox">Киокушинкай каратэ</label>
                            </div>
                            <div class="checkbox-block">
                                <input type="checkbox" name="direction-judo_sambo" id="direction-judo_sambo">
                                <label for="direction-judo_sambo" class="checkbox">Дзюдо / Самбо</label>
                            </div>
                            <div class="checkbox-block">
                                <input type="checkbox" name="direction-budokai" id="direction-budokai">
                                <label for="direction-budokai" class="checkbox">Будокай каратэ</label>
                            </div>
                        </div>
                    </div>
                    <label for="user_email">ВАША ЭЛЕКТРОННАЯ ПОЧТА</label>
                    <input type="email" placeholder="EMAIL@EMAIL.COM" id="user_email" name="user_email" required
                        maxlength="255">
                    <textarea name="comment" id="comment" placeholder="КОММЕНТАРИЙ" required maxlenght="255"></textarea>
                    <h3>КАК ВАМ УДОБНО ОБЩАТЬСЯ?</h3>
                    <div class="checkbox-block">
                        <input type="checkbox" id="messanger-tg" name="messanger-tg">
                        <label for="messanger-tg" class="checkbox">Telegram</label>
                    </div>
                    <div class="checkbox-block">
                        <input type="checkbox" id="messanger-max" name="messanger-max">
                        <label for="messanger-max" class="checkbox">Max</label>
                    </div>
                    <div class="checkbox-block">
                        <input type="checkbox" id="messanger-phone" name="messanger-phone">
                        <label for="messanger-phone" class="checkbox">По телефону</label>
                    </div>
                    <div class="policy">
                        <input type="checkbox" name="acept_with-policy" id="acept_with-policy" required>
                        <label for="acept_with-policy">
                            Согласие с <a href="privat_policy.php">политикой конфиденциальности</a>
                        </label>
                    </div>
                    <button type="submit">ЗАПИСАТЬСЯ</button>


                </form>
        </main>
        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    </body>

</html>