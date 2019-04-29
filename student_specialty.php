<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Поиск специальности!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
    <link rel="stylesheet" href="styles/contents/style_student-specialty.css">
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
                        <li> <a href="student_you.php" id="sb-menu_active"> Студент </a> </li>
                        <li> <a href="schedule.php"> Расписание </a> </li>
                        <li> <a href="metodichka.php"> Методичка </a> </li>
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
            <div id="nav-menu">
                <ul>
                    <li> <a href="student_you.php"> Вы </a> </li>
                    <li> <a href="student_group.php"> Группы </a> </li>
                    <li> <a href="student_specialty.php" id="nav-menu_active"> Специальности </a> </li>
                </ul>
            </div>
            <div id="content">
                <div class="items">
                    <form>
                        <input id="enter" type="text" placeholder="Введите специальность или ключевые слова.">
                        <input id="search" type="submit" value="ПОИСК">
                    </form>
                    <p class=p-button> <a href="student_sceciality_profile.php"> Специальность </a> </p>
                    <hr>
                    <p class=p-button> <a href="student_sceciality_profile.php"> Специальность </a> </p>
                    <hr>
                    <p class=p-button> <a href="student_sceciality_profile.php"> Специальность </a> </p>
                    <hr>
                    <p class=p-button> <a href="student_sceciality_profile.php"> Специальность </a> </p>
                    <hr>
                    <p class=p-button> <a href="student_sceciality_profile.php"> Специальность </a> </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</body>

</html>