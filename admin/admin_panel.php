<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/connect__bd/connect__bd.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Панель администратора</title>
        <link rel="stylesheet" href="admin_panel.css">
    </head>

    <body>
        <nav class="panel_nav">
            <ul class="nav-ul">
                <li class="nav-li"><a href="#news" class="nav-a">Добавить новости</a></li>
                <li class="nav-li"><a href="#subscribe_user" class="nav-a">Обработка заявок</a></li>
                <li class="nav-li"><a href="log_out.php" class="nav-a">Выйти</a></li>
                <li class="nav-li"><a href="/" class="nav-a">На главную</a></li>
            </ul>
        </nav>
        <div>
            <div class="news-posted">
                <?php

                $stmt = mysqli_prepare($connect, "SELECT * FROM `news` ORDER BY `news_id` DESC");

                if (!$stmt) {
                    die("Ошибка SQL: " . mysqli_error($connect));
                }
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                    $date_part = explode('-', $row['news_pubulikate_date']);
                    $year = $date_part[0];
                    $month = $date_part[1];
                    $day = $date_part[2];
                    ?>
                    <div class="news-block" id="_<?php echo htmlspecialchars($row['news_id']) ?>">
                        <img src="<?php echo htmlspecialchars($row['news_image'], ENT_QUOTES) ?>" class="news-img"
                            alt="news-img">
                        <span class="news-time_pub"><?php echo htmlspecialchars($day . '.' . $month . '.' . $year) ?></span>
                        <h3 class="news-heading">
                            <?php echo htmlspecialchars($row['news_heading']) ?>
                        </h3>
                        <p class="news-text">
                            <?php echo htmlspecialchars($row['news_text']) ?>
                        </p>
                        <form action="sql_query_del/news_del.php" method="POST">
                            <input type="hidden" name="news-id" value="<?php echo htmlspecialchars($row['news_id']) ?>">
                            <input type="submit" class="btn" value="Удалить новость">

                        </form>

                    </div>
                    <?php

                }
                mysqli_stmt_close($stmt);
                ?>
            </div>
            <div class="post_news" id="news">
                <form action="sql_query_add/news.php" method="post" enctype="multipart/form-data">
                    <div class="block">
                        <label for="news-image">Изображение</label>
                        <input name="news-image" id="news-image" type="file" accept=".webp" required>
                    </div>
                    <div class="block">
                        <label for="news-time_pub">Время публикации</label>
                        <input name="news-time_pub" id="news-time_pub" type="date" required
                            value="<?php echo date("Y-m-d"); ?>">
                    </div>
                    <div class="block">
                        <label for="news-heading">Заголовок</label>
                        <input name="news-heading" id="news-heading" type="text" required maxlength="255">
                    </div>
                    <div class="block">
                        <label for="news-text">Текст новости</label>
                        <input name="news-text" id="news-text" type="text" required maxlength="255">
                    </div>
                    <button type="submit" class="btn">Добавить</button>
                </form>
            </div>
            <div class="subscribe_user" id="subscribe_user" align="center">
                <?php
                $stmt = mysqli_prepare($connect, "SELECT * FROM `subscribe_user` ORDER BY `subscribe_user_id`");
                if (!$stmt) {
                    die("Ошибка SQL: " . mysqli_error($connect));
                }
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)) {
                    $groups = json_decode($row["subscribe_user_groups"]);
                    $directions = json_decode($row["subscribe_user_directions"], true);
                    $messangers = json_decode($row["subscribe_user_messangers"], true);

                    $groups_checkbox_1 = $groups["0"];
                    $groups_checkbox_2 = $groups["1"];
                    $groups_checkbox_3 = $groups["2"];

                    $directions_checkbox_1 = $directions["0"];
                    $directions_checkbox_2 = $directions["1"];
                    $directions_checkbox_3 = $directions["2"];

                    $messangers_checkbox_1 = $messangers["0"];
                    $messangers_checkbox_2 = $messangers["1"];
                    $messangers_checkbox_3 = $messangers["2"];

                    ?>
                    <div>
                        <p class="user_name">
                        <h1>Имя: <?php echo htmlspecialchars($row["subscribe_user_name"]) ?></h1>
                        </p>
                        <p class="user_phone">
                        <h1>Телефон: <?php echo htmlspecialchars($row["subscribe_user_phone"]) ?></h1>
                        </p>
                        <p class="user_email">
                        <h1>Email: <?php echo htmlspecialchars($row["subscribe_user_email"]) ?></h1>
                        </p>
                        <p class="user_comment">
                        <h1>Комментарий:
                            <?php echo htmlspecialchars($row["subscribe_user_comment"]) ?>
                        </h1>
                        </p>
                        <p class="user_groups">
                        <h1>Выбранные группы:
                            <?php
                            if ($groups_checkbox_1) {
                                echo "Детская, ";
                            }
                            if ($groups_checkbox_2) {
                                echo "Подростковая, ";
                            }
                            if ($groups_checkbox_3) {
                                echo "Взрослая ";
                            }
                            ?>
                        </h1>
                        </p>
                        <p class="user_directions">
                        <h1>Выбранные направления:
                            <?php
                            if ($directions_checkbox_1) {
                                echo "Киокушинкай каратэ, ";
                            }
                            if ($directions_checkbox_2) {
                                echo "Дзюдо / Самбо, ";
                            }
                            if ($directions_checkbox_3) {
                                echo "Будокай каратэ";
                            }
                            ?>
                        </h1>
                        </p>
                        <p class="user_messangers">
                        <h1>Способы связи:
                            <?php
                            if ($messangers_checkbox_1) {
                                echo "Telegram, ";
                            }
                            if ($messangers_checkbox_2) {
                                echo "Max, ";
                            }
                            if ($messangers_checkbox_3) {
                                echo "По телефону";
                            }
                            ?>

                        </h1>
                        </p>
                        <form action="sql_query_del/subscriber_del.php" method="post">
                            <input type="hidden" name="subscribe_user_id"
                                value="<?php echo htmlspecialchars($row["subscribe_user_id"]) ?>">
                            <input type="submit" class="btn" value="Удалить заявку">
                        </form>

                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </body>

</html>