<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

    <head>
        <?php include 'include/head.php'; ?>
        <link rel="stylesheet" href="assets/styles/news.css">
        <link rel="stylesheet" href="assets/styles/news_adaptive.css">
    </head>

    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
        <main>
            <h1 class="title">НОВОСТИ</h1>
            <section class="news">
                <?php include("include/news_block.php") ?>
            </section>
        </main>
        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    </body>

</html>