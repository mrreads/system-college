<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> О предметье!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
    <link rel="stylesheet" href="styles/contents/style_subject_subject_profile.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|PT+Sans+Narrow|Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="styles/style_adaptability.css">
    <link rel="stylesheet" href="styles/contents/style_profile.css">
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
                        <li> <a href="subject.php" id="sb-menu_active"> Предметы </a> </li>
                        <li> <a href="student_you.php"> Студент </a> </li>
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
                    <li> <a href="subject.php" id="nav-menu_active"> Предметы </a> </li>
                    <li> <a href="subject_teacher.php"> Преподаватели </a> </li>
                </ul>
            </div>
            <div id="content">
                <div id="profile">
                    <div class='p-background'>
                        <h2 class="b-name"> Название предмета </h2>
                    </div>
                    <div class='info-background'>
                        <div class="item-info">
                            <p> Название предмета: </p>
                            <p> [название предмета] </p>
                            <hr>
                            <p> Профильность: </p>
                            <p> [база 10-11 или специальность] </p>
                            <hr>
                            <p> Минимальное кол-во часов: </p>
                            <p> [часики] </p>
                        </div>
                        <div class="items">
                            <p class=p-button> <a href="subject_teacher_profile.php"> Преподаватель предмета </a> </p>
                            <hr>
                            <p class=p-button> <a href="subject_teacher_profile.php"> Преподаватель предмета </a> </p>
                            <hr>
                            <p class=p-button> <a href="subject_teacher_profile.php"> Преподаватель предмета </a> </p>
                            <hr>
                            <p class=p-button> <a href="subject_teacher_profile.php"> Преподаватель предмета </a> </p>
                            <hr>
                            <p class=p-button> <a href="subject_teacher_profile.php"> Преподаватель предмета </a> </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>