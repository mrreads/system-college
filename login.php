<?
session_start();

if (isset($_SESSION['id_user'])) 
{
    header('Location: student_you.php');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Войти!</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald|PT+Sans+Narrow|Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="styles/style_login.css">
</head>
<body>
    <div id="main">
        <form id="login-popup" method="POST" action="php/auth.php">
            <div class="quit">
                <a href="../index.php"> <img src="images/icons/close-icon.png"> </a>
            </div>
            <div class="inputs">
                <input type="email" placeholder="ВВЕДИТЕ ПОЧТУ" name='email-auth'>
                <input type="password" placeholder="ВВЕДИТЕ ПАРОЛЬ" name="password-auth">
            </div>
            <div class="button">
                <input type="submit" value="ЗАЛОГИНИТЬСЯ!" name='button-auth'>
            </div>
        </form>
    </div>
    </div>
</body>
</html>