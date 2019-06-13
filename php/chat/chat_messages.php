<?
session_start();
require_once(__DIR__ . '../../connection.php');

$user_id = $_SESSION['id_user'];
$group_id = mysqli_fetch_row(mysqli_query($link, "SELECT groups.id_group FROM `students`, `groups` WHERE students.id_group = groups.id_group AND `id_student` = '$user_id'"));

$query_messages = " SELECT
                        messages.name,
                        messages.date,
                        messages.message
                    FROM
                        `messages`,
                        `users`,
                        `roles`
                    WHERE
                        users.id_user = messages.id_user 
                    AND 
                        roles.id_role = messages.id_role
                    AND
                        messages.id_group = $group_id[0] 
                    ORDER BY 
                        `id_message`;";
$result_messages = mysqli_query($link, $query_messages);

while ($message = mysqli_fetch_row($result_messages)) 
{
    echo "<div id='box-message'>";
    echo "	<p class='name'> $message[0] </p>";
    echo "	<p class='date'> $message[1] </p>";
    echo "	<p class='message'> $message[2] </p>";
    echo "</div>";
}
?>