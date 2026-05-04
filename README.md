# CKI website

Source code for the CKI website built with PHP, shared includes, static assets, and a MySQL connection loaded from a local config outside the repository.

## Important

This project can be stored on GitHub as source code, but it cannot run on GitHub Pages in its current form because GitHub Pages does not support PHP or MySQL.

## Launch

1. You need to clone files from repositorie into your web server
2. Next sep will be creating a file and folder "site\_\_configs" in same dir with you web site.
   It`s look like:

   ```
   server\
   |
   |-your web site/
   |
   |-site**configs/
   |  |
   |  |-bd__config.php
   ```

3. Next sep is creating config and importing db:

config:

```PHP
   <?php

   return [
       'host' => '', #ip of host service
       'user' => '', #user name you use to sign in phpmyadmin
       'password' => '', #user password you use to sign in phpmyadmin
       'database' => '', #data base name

   ];
```

db (admin panel password login is "admin"):

```SQL
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `documents` (
  `id` int NOT NULL,
  `documents__patch` text NOT NULL,
  `documents__name` text NOT NULL,
  `documents__is__service` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
CREATE TABLE `events` (
  `id` int NOT NULL,
  `event__img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `event__name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `event__text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `event__price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `event__date` date DEFAULT NULL,
  `event__time` time DEFAULT NULL,
  `event__description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `event__place__providence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `event__availability` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `event__tiket__link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `news` (
  `id` int NOT NULL,
  `news__img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `news__name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `news__author` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `news__time__pub` date DEFAULT NULL,
  `news__full__text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `posters` (
  `id` int NOT NULL,
  `poster__img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `poster__name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `poster__text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `teammates` (
  `id` int NOT NULL,
  `teammate__img` text NOT NULL,
  `teammate__name` text NOT NULL,
  `teammate__position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
CREATE TABLE `teams` (
  `id` int NOT NULL,
  `team__prewive` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team__name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team__dir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team__coach` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team__subsribe__url` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `user__login` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user__password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `users` (`id`, `user__login`, `user__password`) VALUES
(1, 'admin', '$2b$12$FD9ORfcQCZbdsfRMLR2CTu161ej5w87S3RdCNtz37sDOOOy/dcUpy');
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `teammates`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_login` (`user__login`);
ALTER TABLE `documents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `posters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `teammates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `teams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
```

4. In case if you all do right your web site will be start!
