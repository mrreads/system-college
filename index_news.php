<?
session_start();

if (isset($_SESSION['id_user'])) 
{
?>
    <script async>
        document.addEventListener("DOMContentLoaded", function() {
            console.log('Вы войденны');

            var auth_button = document.querySelector('#auth-button');
            auth_button.textContent = 'Выйти';

            auth_button.href = 'php/logout.php';
        });
    </script>
<?
} 
else {
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
    <link rel="stylesheet" href="styles/style_login.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<style>
    #news .с-link 
    {
        top: 0;
    }

    #news .с-link a 
    {
        margin: 0 0 15px 15px;
    }

    #news .с-link a:hover 
    {
        margin: 0 0 15px 15px;
    }
</style>

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
                    <p class="c-text">
                        Преподаватели спецдисциплин рассказали о своих специальностях, чтобы сформировать наиболее полное представление о видах профессиональной деятельности по каждому из направлений. Мероприятие получилось познавательным и полезным!
                    </p>
                    <p class="c-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere vehicula tellus at viverra. Nulla vulputate ante a purus bibendum, vel interdum turpis tincidunt. Integer tincidunt justo sed lacus dictum condimentum. Nam ullamcorper mollis augue, ac fermentum lacus vulputate quis. Sed ex quam, pretium non sodales ultrices, consectetur ut ex. Proin bibendum dictum neque, vel aliquam arcu congue eget. Pellentesque ut nunc ante. Donec consectetur orci sit amet lectus bibendum, ut pellentesque lectus aliquam. In ac nunc orci. Etiam non nisl dui. Aliquam finibus diam vel egestas dignissim. Pellentesque sit amet lacus vitae quam sodales hendrerit ac vitae ante. Nulla accumsan nisi a lacus fermentum mattis. Morbi dapibus eget magna et finibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque porttitor gravida tortor.
                    </p>
                    <p class="c-text">
                        Pellentesque tristique et felis dignissim luctus. Aliquam erat volutpat. Aliquam facilisis sapien enim, vitae posuere dolor vehicula a. Fusce ultrices pulvinar erat, nec sodales nulla laoreet non. Nulla vehicula quam odio, id aliquet neque tempor sed. Aliquam erat volutpat. Suspendisse tortor ipsum, vestibulum sit amet erat eget, imperdiet dapibus sapien. Nulla accumsan ultricies massa, ut tincidunt elit mattis at. Curabitur ac mauris porta, eleifend diam vel, vestibulum orci. Morbi ornare finibus massa, nec molestie purus viverra in. Phasellus dignissim, diam at scelerisque sollicitudin, purus felis lobortis mauris, gravida aliquam magna lacus nec lorem. Proin sem sem, hendrerit in lectus sit amet, consectetur cursus turpis.
                    </p>
                    <p class="с-link"> <a href="index.php"> Вернуться назад </a> </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>