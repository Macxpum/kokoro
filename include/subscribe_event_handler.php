<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/connect__bd/connect__bd.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user_name = trim($_POST['user_name']);
    $user_phone = trim($_POST['user_phone']);
    $group_child = trim(isset($_POST['group-child']));
    $group_teenage = trim(isset($_POST['group-teenage']));
    $group_adult = trim(isset($_POST['group-adult']));
    $direction_kiokushinkai = trim(isset($_POST['direction-kiokushinkai']));
    $direction_judo_sambo = trim(isset($_POST['direction-judo_sambo']));
    $direction_budokai = trim(isset($_POST['direction-budokai']));
    $user_email = trim($_POST['user_email']);
    $comment = trim($_POST['comment']);
    $messanger_tg = trim(isset($_POST['messanger-tg']));
    $messanger_max = trim(isset($_POST['messanger-max']));
    $messanger_phone = trim(isset($_POST['messanger-phone']));

    $groups = json_encode([
        $group_child,
        $group_teenage,
        $group_adult
    ]);
    $directions = json_encode([
        $direction_kiokushinkai,
        $direction_judo_sambo,
        $direction_budokai
    ]);
    $messangers = json_encode([
        $messanger_tg,
        $messanger_max,
        $messanger_phone
    ]);

    $stmt = mysqli_prepare($connect, "INSERT INTO `subscribe_user` 
    (`subscribe_user_name`, `subscribe_user_phone`, 
    `subscribe_user_email`, `subscribe_user_comment`, 
    `subscribe_user_groups`, `subscribe_user_directions`, 
    `subscribe_user_messangers`) 
    VALUES (?, ?, ?, ?, ?, ?, ?);");
    mysqli_stmt_bind_param(
        $stmt,
        'sssssss',
        $user_name,
        $user_phone,
        $user_email,
        $comment,
        $groups,
        $directions,
        $messangers
    );
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("location: ../subscribe.php");
        echo "<script>alert('Форма удачно отправленна! Ожидайте, с Вами свяжется администрация по почте')</script>";
        exit();
    } else {
        mysqli_stmt_close($stmt);
        header("location: ../subscribe.php");
        echo "<script>alert('Форма не отправлена! Попробуйте отправить еще раз позже')</script>";
        exit();
    }

}