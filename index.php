<?
session_start();

if (isset($_SESSION['id_user'])) 
{
?>
    <script async>
        document.addEventListener("DOMContentLoaded", function() 
        {
            console.log('Вы войденны');

            var auth_button = document.querySelector('#auth-button');
            auth_button.textContent = 'Выйти';

            auth_button.href = 'php/logout.php';
        });
    </script>
<?
} 
else 
{
?>
    <script>
        console.log('Вы не авторизованны!');
    </script>
<?
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Новости!</title>
    <link rel="stylesheet" href="styles/style_index.css">
    <link rel="stylesheet" href="styles/contents/style_news.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|PT+Sans+Narrow|Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="main-wrapper">
        <div id="header-menu">
            <div class="hm-logo">
                <h2> <a href="index.php"> ЩЕЛКОВСКИЙ КОЛЛЕДЖ </a> </h2>
            </div>
            <div class="hm-menu">
                <ul>
                    <li> <a href="index.php" id="hm-menu_active"> Главная </a> </li>
                    <li> <a href="student_you.php"> Личный кабинет</a> </li>
                </ul>
            </div>
            <div class="hm-login">
                <a href="login.php" id="auth-button"> Войти </a>
            </div>
        </div>
        <div id="header-picture">
        </div>
        <div id="nav-menu">
            <ul>
                <li> <a href="index.php" id="nav-menu_active"> Новости </a> </li>
                <li> <a href="vneurochka_meropriyatia.php"> Мероприятия</a> </li>
                <li> <a href="schedule.php"> Расписание </a> </li>
                <form>
                    <input type="text" placeholder="ИЩИ" id="ishi-pole">
                    <input id="ishi" type="submit" value=" ">
                </form>
            </ul>
        </div>
        <div id="content">
            <div id="news">
                <div class="news_block">
                    <h2 class="c-h"> День открытых дверей в СП №2 </h2>
                    <p class="c-text"> <img src="https://schelcol.ru/media/k2/items/cache/ce93b7c97ea8831859bbe17c36b83648_L.jpg">
                        02 марта 2019 г. в СП №2 состоялся День открытых дверей. <br>
                        На мероприятии школьники и родители ознакомились со специальностями отделения и колледжа в целом, по которым планируется набор на 2019-2020 учебный год, их спецификой, а так же с общественной и культурной жизнью отделения и колледжа.
                    </p>
                    <p class="с-link"> <a href="index_news.php"> Подробнее... </a> </p>
                </div>
                <div class="news_block">
                    <h2 class="c-h"> Профориентационная работа с учениками 9-х классов </h2>
                    <p class="c-text"> <img src="https://schelcol.ru/media/k2/items/cache/576634a42c4a68b90d534f03316d9d02_L.jpg">
                        25-28 февраля 2019 г. преподаватели СП №2 провели активную профориентационную работу с учениками 9-х классов в школах г. Фрязино, Ивантеевки, п. Свердловский, п. Монино, д. Гребнево, д.Огуднево, п. Литвиново.
                    </p>
                    <p class="с-link"> <a href="index_news.php"> Подробнее... </a> </p>
                </div>
                <div class="news_block">
                    <h2 class="c-h"> Посещение студентами СП №3,4 Ярмарки вакансий для выпускников </h2>
                    <p class="c-text"> <img src="https://schelcol.ru/media/k2/items/cache/2da7e6c037342f54c10e77c0d3e4a775_L.jpg"> 27 февраля 2019 г. в СП № 6 ГБПОУ МО «Щелковский колледж» состоялась «Ярмарка вакансий» для выпускников колледжа. Ярмарку вакансий посетили выпускники групп 367, 3618, 3519, 3521в, 3621 и 4516 в сопровождении зам. руководителя СП № 3 Солодовой Д.С. и преподавателей Комовой Т.И. и Макаровой А.Н. </p>
                    <p class="с-link"> <a href="index_news.php"> Подробнее... </a> </p>
                </div>
                <div class="pages">
                    <a href="#" class='active-pages'> 1 </a>
                    <a href="#"> 2 </a>
                    <a href="#"> 3 </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>