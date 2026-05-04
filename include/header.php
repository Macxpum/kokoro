<nav class="header-nav">
    <a class="logo" href="/">KOKO<span>RO</span></a>
    <ul class="header-ul">
        <?php
        if (isset($_SESSION['admin_id'])) {
            echo '<li class="nav-link hover"><a href="admin/admin_panel.php">Панель администратора</a></li>';
            echo '<script>
                    document.querySelector(".header-ul").style.justifyContent = "start"
                  </script>';
        } ?>

        <li class="nav-link hover"><a href="about_school.php">о школе</a></li>
        <li class="nav-link hover"><a href="schedule.php">расписание</a></li>
        <li class="nav-link hover"><a href="coaches.php">тренеры</a></li>
        <li class="nav-link hover"><a href="news.php">новости</a></li>
        <li class="nav-link hover"><a href="contacts.php">контакты</a></li>
        <li class="nav-link hover"><a href="subscribe.php">записаться</a></li>
    </ul>
</nav>