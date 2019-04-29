<?
session_start();

if (empty($_SESSION['id_user'])) 
{
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> О преподаватеел!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
    <link rel="stylesheet" href="styles/contents/style_subject_teacher_profile.css">
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
                    <a href="php/logout.php"> Выйти </a>
                </div>
            </div>
            <div id="nav-menu">
                <ul>
                    <li> <a href="subject.php"> Предметы </a> </li>
                    <li> <a href="subject_teacher.php" id="nav-menu_active"> Преподаватели </a> </li>
                </ul>
            </div>
            <div id="content">
                <div id="profile">
                    <img src="https://vignette.wikia.nocookie.net/bokunoheroacademia/images/9/94/Eraser.png/revision/latest?cb=20181002192225&path-prefix=pt-br">
                    <div class='p-background'>
                        <h2 class="b-name"> Имя Фамилия </h2>
                        <p class="b-info"> Преподаватель </p>
                    </div>
                    <div class='info-background'>
                        <div class="user-info">
                            <p> Имя преподавателя: </p>
                            <p> [фио препода] </p>
                            <hr>
                            <p> Номер отделение: </p>
                            <p> [отделение] </p>
                            <hr>
                            <p> Основное направление: </p>
                            <p> [название специальности] </p>
                            <hr>
                            <p> Категория: </p>
                            <p> [уровень квалификации] </p>
                            <hr>
                            <p> Кабинет: </p>
                            <p> [номер кабинета] </p>
                        </div>
                        <div class="profile-info">
                            <p> Почта преподавателя: </p>
                            <p> [почтовый адрес] </p>
                            <hr>
                            <p> Номер: </p>
                            <p> [номер телефона] </p>
                            <hr>
                            <p> Вконтакте: </p>
                            <p> <a href="#"> [если имеется] </a> </p>
                        </div>
                        <div class="items">
                            <p class=p-button> <a href="subject_subject_profile.php"> Предмет, который ведёт препод </a> </p>
                            <hr>
                            <p class=p-button> <a href="subject_subject_profile.php"> Предмет, который ведёт препод </a> </p>
                            <hr>
                            <p class=p-button> <a href="subject_subject_profile.php"> Предмет, который ведёт препод </a> </p>
                            <hr>
                            <p class=p-button> <a href="subject_subject_profile.php"> Предмет, который ведёт препод </a> </p>
                            <hr>
                            <p class=p-button> <a href="subject_subject_profile.php"> Предмет, который ведёт препод </a> </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
