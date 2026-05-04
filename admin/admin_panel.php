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
            <div class="subscribe_user" id="subscribe_user">
                <?php
                $stmt = mysqli_prepare($connect, "SELECT * FROM `subscribe_user` ORDER BY `subscribe_user_id`");
                if (!$stmt) {
                    die("Ошибка SQL: " . mysqli_error($connect));
                }
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                function boolConvertation($value)
                {
                    if ($value == "") {
                        return "НЕ ВЫБРАНО";
                    } else {
                        return "ВЫБРАНО";
                    }
                }
                while ($row = mysqli_fetch_assoc($result)) {
                    $groups = json_decode($row["subscribe_user_groups"]);
                    $directions = json_decode($row["subscribe_user_directions"], true);
                    $messangers = json_decode($row["subscribe_user_messangers"], true);



                    $groups_checkbox_1 = boolConvertation($groups["0"]);
                    $groups_checkbox_2 = boolConvertation($groups["1"]);
                    $groups_checkbox_3 = boolConvertation($groups["2"]);

                    $directions_checkbox_1 = boolConvertation($directions["0"]);
                    $directions_checkbox_2 = boolConvertation($directions["1"]);
                    $directions_checkbox_3 = boolConvertation($directions["2"]);

                    $messangers_checkbox_1 = boolConvertation($messangers["0"]);
                    $messangers_checkbox_2 = boolConvertation($messangers["1"]);
                    $messangers_checkbox_3 = boolConvertation($messangers["2"]);

                    ?>
                    <div class="">
                        <h1 class="user_name"><?php echo htmlspecialchars($row["subscribe_user_name"]) ?></h1>
                        <h1 class="user_phone"><?php echo htmlspecialchars($row["subscribe_user_phone"]) ?></h1>
                        <h1 class="user_email"><?php echo htmlspecialchars($row["subscribe_user_email"]) ?></h1>
                        <h1 class="user_comment"><?php echo htmlspecialchars($row["subscribe_user_comment"]) ?></h1>
                        <h1 class="user_groups">Детская: <?php echo htmlspecialchars($groups_checkbox_1) ?>; Подростковая:
                            <?php echo htmlspecialchars($groups_checkbox_2) ?>; Взрослая:
                            <?php echo htmlspecialchars($groups_checkbox_3) ?>;</h1>
                        <h1 class="user_directions">Киокушинкай каратэ:
                            <?php echo htmlspecialchars($directions_checkbox_1) ?>;
                            Дзюдо / Самбо: <?php echo htmlspecialchars($directions_checkbox_2) ?>; Будокай каратэ:
                            <?php echo htmlspecialchars($directions_checkbox_3) ?>;
                        </h1>
                        <h1 class="user_messangers">Telegram: <?php echo htmlspecialchars($messangers_checkbox_1) ?>; Max:
                            <?php echo htmlspecialchars($messangers_checkbox_2) ?>; По телефону:
                            <?php echo htmlspecialchars($messangers_checkbox_3) ?>;</h1>

                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </body>

</html>