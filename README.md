# KOKORO website

Source code for the KOKORO website built with PHP, shared includes, static assets, and a MySQL connection loaded from a local config outside the repository.

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
   |-site configs/
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
CREATE TABLE `news` (
  `news_id` int NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_pubulikate_date` date NOT NULL,
  `news_heading` text NOT NULL,
  `news_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
CREATE TABLE `subscribe_user` (
  `subscribe_user_id` int NOT NULL,
  `subscribe_user_name` text NOT NULL,
  `subscribe_user_phone` text NOT NULL,
  `subscribe_user_email` text NOT NULL,
  `subscribe_user_comment` text NOT NULL,
  `subscribe_user_groups` text NOT NULL,
  `subscribe_user_directions` text NOT NULL,
  `subscribe_user_messangers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_login` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `users` (`id`, `user_login`, `user_password`) VALUES
(1, 'admin', '$2b$12$FD9ORfcQCZbdsfRMLR2CTu161ej5w87S3RdCNtz37sDOOOy/dcUpy');
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);
ALTER TABLE `subscribe_user`
  ADD PRIMARY KEY (`subscribe_user_id`);
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`user_login`);
ALTER TABLE `news`
  MODIFY `news_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `subscribe_user`
  MODIFY `subscribe_user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
```

4. In case if you all do right your web site will be start!
