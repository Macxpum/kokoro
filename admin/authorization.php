<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/connect__bd/connect__bd.php";
// если уже авторизован, сразу в админку
if (isset($_SESSION['admin_id'])) {
    header("Location: /admin/admin_panel.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_login = trim($_POST['login']);
    $user_password = $_POST['password'];

    $stmt = mysqli_prepare(
        $connect,
        "SELECT `id`, `user_password` FROM `users` WHERE `user_login` = ? LIMIT 1"
    );
    mysqli_stmt_bind_param($stmt, "s", $user_login);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($user_password, $user['user_password'])) {
        session_regenerate_id(true);
        $_SESSION['admin_id'] = (int) $user['id'];
        header("Location: /admin/admin_panel.php");
        mysqli_stmt_close($stmt);
        exit();

    } else {
        header("Location: /admin/log_in.php");
        echo "<script>alert('Ошибка доступа!');</script>";
        mysqli_stmt_close($stmt);
        exit();
    }

}
