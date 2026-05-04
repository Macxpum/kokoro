<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/connect__bd/connect__bd.php";

$stmt = mysqli_prepare($connect, "DELETE FROM `subscribe_user` WHERE `subscribe_user_id` = ? LIMIT 1;");
mysqli_stmt_bind_param($stmt, "i", $subscribe_user_id);
if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    echo "<script>alert('Удалено успешно!'); location.href = '/admin/index.php';</script>";
    exit;
} else {
    mysqli_stmt_close($stmt);
    echo "<script>alert('Не удалось!'); location.href = '/admin/index.php';</script>";
    exit;
}

