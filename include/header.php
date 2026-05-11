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
        <div class="open-btn hide-menu-el" onclick="openMobileMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#000">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
            </svg>
        </div>
    </ul>
</nav>
<nav class="header-nav-mobile">
    <ul class="header-ul">
        <?php
        if (isset($_SESSION['admin_id'])) {
            echo '<li class="nav-link hover"><a href="admin/admin_panel.php">Панель администратора</a></li>';
        } ?>

        <li class="mobile__menu__li">
            <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#000">
                <path
                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg>
        </li>
        <li><a class="logo" href="/">KOKO<span>RO</span></a></li>
        <li class="nav-link hover mobile__menu__li"><a href="about_school">о школе</a></li>
        <li class="nav-link hover mobile__menu__li"><a href="schedule">расписание</a></li>
        <li class="nav-link hover mobile__menu__li"><a href="coaches">тренеры</a></li>
        <li class="nav-link hover mobile__menu__li"><a href="news">новости</a></li>
        <li class="nav-link hover mobile__menu__li"><a href="contacts">контакты</a></li>
        <li class="nav-link hover mobile__menu__li"><a href="subscribe">записаться</a></li>
    </ul>
</nav>
<script src="assets/scripts/header.js" async></script>