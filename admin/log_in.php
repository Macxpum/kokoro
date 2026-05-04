<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin sign up</title>
        <link rel="stylesheet" href="style__admin.css">
    </head>

    <body>
        <form method="POST" action="authorization.php">
            <div class="block">
                <label for="login">login:</label>
                <input type="text" name="login" id="login" required>
            </div>
            <div class="block">
                <label for="password">password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" value="Войти">
        </form>
    </body>

</html>