<?php
session_start();

if (isset($_SESSION['admin_id'])) {
    // уже авторизован
    header("Location: /admin/admin_panel.php");
    exit();
} else {
    // не авторизован
    header("Location: /admin/log_in.php");
    exit();
}