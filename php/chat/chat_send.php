<?
session_start();

require_once(__DIR__ . '../../connection.php');

$role_id = $_SESSION['id_role'];
$user_id = $_SESSION['id_user'];
$user_info = $_SESSION['user_info'];
$user_fio = explode(' ', $user_info[0]);
$user_info[0] = $user_fio[1] . ' ' . $user_fio[2];
$group_id = mysqli_fetch_row(mysqli_query($link, "SELECT groups.id_group FROM `students`, `groups` WHERE students.id_group = groups.id_group AND `id_student` = '$user_id'"));

$message = htmlentities(mysqli_real_escape_string($link, $_POST['text']));
if (isset($message))
{
    $query_send = "INSERT INTO `messages` (`id_message`, `name`, `message`, `date`, `id_group`, `id_role`, `id_user`) VALUES (NULL, '$user_info[0]', '$message', CURRENT_TIMESTAMP, '$group_id[0]', '$role_id', '$user_id')";
    $query_send = "INSERT INTO `messages` (`id_message`, `name`, `message`, `date`, `id_group`, `id_role`, `id_user`) VALUES (NULL, '$user_info[0]', '$message', CURRENT_TIMESTAMP, '$group_id[0]', '$role_id', '1')";
    $result_send = mysqli_query($link, $query_send);
}
mysqli_close($link);
exit();
?>