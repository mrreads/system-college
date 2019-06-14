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
    // Функция, которая выводит сообщения в пустой (пока что) <div> блок.
    // А так же обновляет их каждые 1000мс.
    function showMSG()
    {
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() 
        {
            // Если запрос прошёёл и он успешный
            if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200)
            {
                // Вставь в блок #chat-content код из запроса, то есть из chat_message.php.
                document.querySelector('#chat-content').innerHTML = xhr.responseText;
            }
        }
        xhr.open('GET', 'php/chat/chat_messages.php', true);
        xhr.send();
        
    }
    // Запрос на вывод сообщений будет отправляться каждые 1000мс
    setInterval(function() { showMSG(); }, 1000);
    // Скролл снизу.
    setTimeout( function() { document.querySelector('#chat-content').scrollTop = document.querySelector('#chat-content').scrollHeight; }, 1000);
    </script>
</head>

<body  onload="showMSG()">
<div id="chat">
    <div class="header">
        <p id='test'> ГРУППОВОЙ ЧАТ </p>
        <img src="../../images\icons\expand-icon.png" id="expand">
    </div>

    <div id="chat-content"> \
        <!-- Здесь будут выводится сообщения -->
    </div>

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

    hideUnhide();
    
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

    // Функация отправки сообщений/
    function sendMSG(e)
    {
        // Я ТРИ ЧАСА С ЭТИМ СИДЕЛ, Я НЕ ПОНИМАЛ ПОЧЕМУ onSubmit НЕ РАБОТАЕТ
        // А onClick РАБОТАЕТ, А МНЕ НУЖЕН onSubmit!!!
        // ОКАЗЫВАЕТСЯ НУЖНО ПРЕОПРЕДЕЛЯТЬ ДЕФОЛНТНЫЕ ДЕЙСТВИЯ БРАУЗЕРА
        // И ТОГДА ONSUBMIT ЗАРАБОТАЛ, ММММММММММММММ
        e.preventDefault();
        // Сюда заносим $_POST данные, которые отправятся в chat_send.php.
        let data = "text=" + document.querySelector("#text").value;
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'php/chat/chat_send.php', true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send(data);
        document.querySelector("#text").value = '';
        // Скролл до самого низа делаем.
        setTimeout( function() { document.querySelector('#chat-content').scrollTop = document.querySelector('#chat-content').scrollHeight; }, 1000)
    }
</script>
</body>