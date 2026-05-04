<?php

include($_SERVER["DOCUMENT_ROOT"] . "/php__connect/connect__db.php");

if (
    $_SERVER['REQUEST_METHOD'] === "POST"
    && isset($_FILES['news-image'])
    && isset($_POST['news-time_pub'])
    && isset($_POST['news-heading'])
    && isset($_POST['news-text'])
) {
    $news_image = $_FILES['news-image'];
    $news_time_pub = $_POST['news-time_pub'];
    $news_heading = $_POST['news-heading'];
    $news_text = $_POST['news-text'];

    // путь загрузки
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/uploads/';
    // если его нет - создаем
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_name = time() . '.webp';

    $file_path = $upload_dir . $file_name;

    if (move_uploaded_file($news_image["tmp_name"], $file_path)) {
        $news_stmt = mysqli_prepare($connect, "INSERT INTO `news` 
                            (`news_image`, `news_pubulikate_date`, `news_heading`, `news_text`) 
                            VALUES (?, ?, ?, ?)");
        $bd_file_path = '/assets/images/uploads/' . $file_name;
        mysqli_stmt_bind_param($news_stmt, "ssss", $bd_file_path, $news_time_pub, $news_heading, $news_text);
        if (mysqli_stmt_execute($news_stmt)) {
            mysqli_stmt_close($news_stmt);
            header("Location: ../admin_panel.php");
            echo "<script>alert('Новость загружена!')</script>";
            exit();
        } else {
            mysqli_stmt_close($news_stmt);
            header("Location: ../admin_panel.php");
            echo "<script>alert('Возникла ошибка! Попробуйте еще раз')</script>";
            exit();
        }
    } else {

        header("Location: ../admin_panel.php");
        echo "<script>alert('Возникла ошибка! Попробуйте еще раз')</script>";
        exit();
    }

}