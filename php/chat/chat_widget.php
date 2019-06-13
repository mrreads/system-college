<?
session_start();
if (empty($_SESSION['id_user'])) 
{
    header('Location: login.php');
}
$role_id = $_SESSION['id_role'];
if ($role_id != 3) 
{
    header('Location: login.php');
}
require_once(__DIR__ . '../../connection.php');

$user_id = $_SESSION['id_user'];
$user_info = $_SESSION['user_info'];
$user_fio = explode(' ', $user_info[0]);
$user_info[0] = $user_fio[1] . ' ' . $user_fio[2];
$group_id = mysqli_fetch_row(mysqli_query($link, "SELECT groups.id_group FROM `students`, `groups` WHERE students.id_group = groups.id_group AND `id_student` = '$user_id'"));
?>

<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald|PT+Sans+Narrow|Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="..\..\styles\widgets\chat.css">
    <script>
    function showMSG()
    {
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() 
        {
            if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200)
            {
                document.querySelector('#chat-content').innerHTML = xhr.responseText;
            }
        }
        xhr.open('GET', 'php/chat/chat_messages.php', true);
        xhr.send();
        
    }
    setInterval(function() { showMSG(); }, 1000);
    setTimeout( function() { document.querySelector('#chat-content').scrollTop = document.querySelector('#chat-content').scrollHeight; }, 1000);
    </script>
</head>

<body  onload="showMSG()">
<div id="chat">
    <div class="header">
        <p id='test'> ГРУППОВОЙ ЧАТ </p>
        <img src="../../images\icons\expand-icon.png" id="expand">
    </div>

    <div id="chat-content"> </div>

    <form class="footer" method="POST" id="form-send" onsubmit="sendMSG(event);">
        <input type="text" name="text" id="text" required="" placeholder="ВВЕДИТЕ СООБЩЕНИЕ">
        <input type="submit" name="button-chat" id="button" value="!">
    </form>
</div>

<script>
    let isHidden = false;
    let chat = document.querySelector('#chat');
    let chatFooter = document.querySelector('#chat .footer');
    let chatContent = document.querySelector('#chat #chat-content');
    let expandButton = document.querySelector('#expand');

    chatContent.scrollTop = chatContent.scrollHeight;

    expandButton.addEventListener("click", hideUnhide);

    function hideUnhide() 
    {
        if (isHidden == false) 
        {
            chat.style.height = "auto";
            chat.style.minHeight = '0px';

            chatContent.animate([{ height: '370px' }, { height: '0px' }], { duration: 300 });

            chatContent.style.height = "0px";

            chatFooter.animate([{ marginBottom: '0px' }, { marginBottom: '-40px' }], { duration: 200 });
            chatFooter.style.marginBottom = "-40px";

            isHidden = true;
        } 
        else 
        {
            chatFooter.style.display = "flex";
            chatFooter.style.maginBottom = "-40px";

            chatFooter.animate([{ marginBottom: '-40px' }, { marginBottom: '0px' }], { duration: 200 });

            chatFooter.style.marginBottom = "0px";
            chatContent.style.height = "0px";
            chatContent.style.display = "block";

            chatContent.animate([{ height: '0px' }, { height: '370px' }], { duration: 300 });

            chatContent.style.height = "370px";

            isHidden = false;
        }
    }

    function sendMSG(e)
    {
        e.preventDefault();

        let body = "text=" + encodeURIComponent(document.querySelector("#text").value);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'php/chat/chat_send.php', true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send(body);
        document.querySelector("#text").value = '';
        setTimeout( function() { document.querySelector('#chat-content').scrollTop = document.querySelector('#chat-content').scrollHeight; }, 1000)
    }
</script>
</body>