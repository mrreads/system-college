<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Поиск методички!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
    <link rel="stylesheet" href="styles/contents/style_metodichka.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|PT+Sans+Narrow|Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="styles/style_adaptability.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="main-wrapper">
        <div id="wrapper-one">
            <div id="side-bar">
                <div class="hm-logo">
                    <h2> <a href="index.php"> ЩЕЛКОВСКИЙ <br> КОЛЛЕДЖ </a> </h2>
                </div>
                <div class="sb-profile">
                    <img src="images/avatar.jpg">
                    <p class="sb-name"> Имя Фамилия </p>
                    <p class="sb-role"> Студент </p>
                </div>
                <div class="sb-menu">
                    <ul>
                        <li> <a href="administration.php"> Администрация </a> </li>
                        <li> <a href="subject.php"> Предметы </a> </li>
                        <li> <a href="student_you.php"> Студент </a> </li>
                        <li> <a href="schedule.php"> Расписание </a> </li>
                        <li> <a href="metodichka.php" id="sb-menu_active"> Методичка </a> </li>
                        <li> <a href="vneurochka.php"> Внеурочка </a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="wrapper-two">
            <div id="header-menu">
                <div class="hm-menu">
                    <ul>
                        <li> <a href="index.php"> Главная </a> </li>
                        <li> <a href="student_you.php" id="hm-menu_active"> Личный кабинет</a> </li>
                    </ul>
                </div>
                <div class="hm-login">
                    <a href="index.php"> Выйти </a>
                </div>
            </div>
            <div id="content">
                <div class="search">
                    <form>
                        <input id="enter" type="text" placeholder="Введите название вспомогательного материала.">
                        <input id="search" type="submit" value="ПОИСК">
                        <div class="checkbox">
                            <input type="checkbox">
                            <label for="gsp"> КОНСПЕКТЫ </label>
                            <input type="checkbox">
                            <label for="gsp"> ПРЕЗЕНТАЦИИ </label>
                            <input type="checkbox">
                            <label for="gsp"> МЕТОДИЧЕСКИЕ ОБЕСПЕЧЕНИЯ </label>
                        </div>
                    </form>
                </div>
                <div class="items-search">
                    <div class="items">
                        <p class=p-button> <a href="metodichka_profile.php"> Название методички </a> </p>
                        <hr>
                        <p class=p-button> <a href="metodichka_profile.php"> Название презентации </a> </p>
                        <hr>
                        <p class=p-button> <a href="metodichka_profile.php"> Название книги </a> </p>
                        <hr>
                        <p class=p-button> <a href="metodichka_profile.php"> Название презентации </a> </p>
                        <hr>
                        <p class=p-button> <a href="metodichka_profile.php"> Название методички </a> </p>
                        <hr>
                        <p class=p-button> <a href="metodichka_profile.php"> Название конспекта </a> </p>
                        <hr>
                        <p class=p-button> <a href="metodichka_profile.php"> Название методички </a> </p>
                        <hr>
                        <p class=p-button> <a href="metodichka_profile.php"> Название статьи </a> </p>
                    </div>
                    <form class="is-search">
                        <input type="text" placeholder="Введите предмет">
                        <div class="is-items">
                            <p class=is-p-button> <a href="#"> Математика </a> </p>
                            <hr>
                            <p class=is-p-button> <a href="#"> Русский </a> </p>
                            <hr>
                            <p class=is-p-button> <a href="#"> История </a> </p>
                            <hr>
                            <p class=is-p-button> <a href="#"> Химия </a> </p>
                            <hr>
                            <p class=is-p-button> <a href="#"> Биология </a> </p>
                            <hr>
                            <p class=is-p-button> <a href="#"> Философия </a> </p>
                            <hr>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>