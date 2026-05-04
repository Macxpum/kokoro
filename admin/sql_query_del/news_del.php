<?php

include($_SERVER['DOCUMENT_ROOT'] . "/php__connect/connect__db.php");

$news_id = (int) $_POST["news-id"];
$stmt = mysqli_prepare($connect, "SELECT `news_image` FROM `news` WHERE `news_id` = ?;");
mysqli_stmt_bind_param($stmt, 'i', $news_id);
mysqli_stmt_execute($stmt);
$execute_result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($execute_result);
echo $row["news_image"];
if (!empty($row["news_image"]) && $_SERVER['DOCUMENT_ROOT'] . $row["news_image"]) {
    unlink($_SERVER['DOCUMENT_ROOT'] . $row["news_image"]);
} else {
    echo "Ошибка";
}
mysqli_stmt_close($stmt);
$stmt = mysqli_prepare($connect, "DELETE FROM `news` WHERE `news_id` = ? LIMIT 1;");
mysqli_stmt_bind_param($stmt, "i", $news_id);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
echo "<script>alert('Удалено успешно!'); location.href = '/admin/index.php';</script>";
exit;
?>