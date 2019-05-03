<?
require_once 'connection.php';
session_start();

if (isset($_SESSION['id_user'])) 
{
    header('Location: ../student_you.php');
}

$email_auth = $_POST['email-auth'];
$password_auth = $_POST['password-auth'];
$button_auth = $_POST['button-auth'];

// ПОЛУЧАЕМ РОЛЬ И АЙДИ ЮЗЕРА
$query_login = "SELECT id_role, id_user FROM users WHERE email = '$email_auth' AND password = '$password_auth'";
$result_login = mysqli_query($link, $query_login);
$data_login = mysqli_fetch_row($result_login);

// ЕСЛИ АЙДИ ЮЗЕРА = 3, ТО ЕСТЬ СТУДЕНТ
if ($data_login[0] == 3)
{
    $query_auth = "SELECT id_student FROM students WHERE id_user = '$data_login[1]'";
    $result_auth = mysqli_query($link, $query_auth);
    $data_auth = mysqli_fetch_row($result_auth);
    $_SESSION['id_user'] = "$data_auth[0]";
    $_SESSION['id_role'] = "$data_login[0]";
    header('Location: ../index.php');
}
        


if (empty($_SESSION['id_user'])) 
{
    header('Location: ../login.php');
}
?>