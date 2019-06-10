<?
session_start();
require_once 'connection.php';

$query_messages = "  SELECT
                messages.name,
                messages.date,
                messages.message
            FROM
                messages,
                users,
                roles
            WHERE
                users.id_user = messages.id_user 
            AND 
                roles.id_role = messages.id_role;";
$result_messages = mysqli_query($link, $query_messages);
?>

<link rel="stylesheet" href="..\styles\widgets\chat.css">

<div id="chat">
    <div class="header">
        <p> ГРУППОВОЙ ЧАТ </p>
        <img src="../../images\icons\expand-icon.png" id="expand">
    </div>

    <div class="content">
<?
        while ($message = mysqli_fetch_row($result_messages))
        {
            echo "<div id='box-message'>";
            echo "	<p class='name'> $message[0] </p>";
            echo "	<p class='date'> $message[1] </p>";
            echo "	<p class='message'> $message[2] </p>";
            echo "</div>";
        }
?>
    </div>

    <form class="footer">
        <input type="text" name="text-chat" id="text" required="" placeholder="ВВЕДИТЕ СООБЩЕНИЕ">
        <input type="submit" name="button-chat" id="button" value="!">
    </form>
</div>

<script>
    let isHidden = false;
    let chat = document.querySelector('#chat');
    let chatFooter = document.querySelector('#chat .footer');
    let chatContent = document.querySelector('#chat .content');
    let expandButton = document.querySelector('#expand');

    hideUnhide();

    chatContent.scrollTop = chatContent.scrollHeight;

    expandButton.addEventListener("click", hideUnhide);

    function hideUnhide()
    {
        if (isHidden == false)
        {
            chat.style.height = "auto";
            chat.style.minHeight   = '0px';

            chatContent.animate(
                [{ height: '370px' },{ height: '0px' }],
                { duration: 300 }
            );

            chatContent.style.height = "0px";

            chatFooter.animate(
                [{ marginBottom: '0px' },{ marginBottom: '-40px' }],
                { duration: 200 }
            );
            chatFooter.style.marginBottom = "-40px";

            isHidden = true;
        }
        else
        {
            chatFooter.style.display = "flex";
            chatFooter.style.maginBottom = "-40px";

            chatFooter.animate(
                [{ marginBottom: '-40px' },{ marginBottom: '0px' }],
                { duration: 200 }
            );
            chatFooter.style.marginBottom = "0px";
            chatContent.style.height = "0px";
            chatContent.style.display = "block";

            chatContent.animate(
                [{ height: '0px' },{ height: '370px' }],
                { duration: 300 }
            );

            chatContent.style.height = "370px";

            isHidden = false;
        }
    }



</script>