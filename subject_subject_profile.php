<?
session_start();

if (empty($_SESSION['id_user']) or empty($_GET['id'])) 
{
    header('Location: login.php');
}

$subject_id = $_GET['id'];

require_once 'php/connection.php';
$query_subject_info = "SELECT
                        subject_name, quantity_hour, teacher_info.fio, teacher_info.id_teacher
                    FROM
                        subjects, teacher_info, subject_teacher
                    WHERE 
                        teacher_info.id_teacher = subject_teacher.id_teacher
                    AND
                        subject_teacher.id_subject = subjects.id_subject
                    AND
                        subjects.id_subject = '$subject_id'";

$result_subject_info = mysqli_query($link, $query_subject_info);
$data_subject_info = mysqli_fetch_row($result_subject_info);

$subject_name = $data_subject_info[0];
$subject_hours = $data_subject_info[1];
$subject_teacher = $data_subject_info[2];
$subject_id_teacher = $data_subject_info[3];

$user_id = $_SESSION['id_user'];
$query_user_info = "SELECT students.name, roles.name FROM students, roles WHERE students.id_role = roles.id_role AND students.id_user = '$user_id'";
$result_user_info = mysqli_query($link, $query_user_info);
$data_user_info = mysqli_fetch_row($result_user_info);
$user_fio = $data_user_info[0];
$user_fio = explode(' ', $user_fio);
?>

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
                    <? echo " <p class='sb-name'> $user_fio[1] $user_fio[0] </p>"; ?>
                    <? echo "<p class='sb-role'> $data_user_info[1] </p>"; ?>
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
                    <li> <a href="subject.php" id="nav-menu_active"> Предметы </a> </li>
                    <li> <a href="subject_teacher.php"> Преподаватели </a> </li>
                </ul>
            </div>
            <div id="content">
                <div id="profile">
                    <div class='p-background'>
                        <? echo "<h2 class='b-name'> $subject_name </h2>"; ?>
                    </div>
                    <div class='info-background'>
                        <div class="item-info">
                            <p> Название предмета: </p>
                            <? echo "<p> $subject_name </p>"; ?>
                            <hr>
                            <p> Кол-во часов: </p>
                            <? echo "<p> $subject_hours </p>"; ?>
                            <hr>
                            <p> Ведёт: </p>
                            <? echo "<p> <a href='subject_teacher_profile.php?id=$subject_id_teacher'> $subject_teacher </a> </p>"; ?>
                        </div>
                        <!-- <div class="items">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>