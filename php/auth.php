<?
require_once 'connection.php';
session_start();

$email_auth = $_POST['email-auth'];
$password_auth = $_POST['password-auth'];
$button_auth = $_POST['button-auth'];

$query_login = "SELECT email, password, id_student FROM students";
$result_login = mysqli_query($link, $query_login);

while ($row = mysqli_fetch_row($result_login)) 
{
    if (($email_auth == $row[0]) and ($password_auth == $row[1])) 
    {
        $_SESSION['id_user'] = "$row[2]";
        header('Location: ../index.php');
    }
}