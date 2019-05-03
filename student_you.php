<?
session_start();

if (empty($_SESSION['id_user'])) 
{
    header('Location: login.php');
}

$user_id = $_SESSION['id_user'];

//ВОЗЬМЁМ ИНФОРМАЦИ О СТУДЕНТЕ, ЧТОБЫ ПОЗЖЕ ЕЁ ВЫВЕСТИ.
require_once 'php/connection.php';
$query_user_info = "SELECT
                            fio,
                            date_of_birth,
                            number_group,
                            form_study,
                            email,
                            phone_number,
                            name_role
                    FROM 
                            students,
                            `groups`,
                            roles
                    WHERE 
                            students.id_group = groups.id_group
                    AND
                            students.id_role = roles.id_role
                    AND
                            id_student = '$user_id';";

$result_user_info = mysqli_query($link, $query_user_info);
$data_user_info = mysqli_fetch_row($result_user_info);

$user_id_group = mysqli_fetch_row(mysqli_query($link, "SELECT id_group FROM students WHERE id_student = '$user_id'"));

$user_name = $data_user_info[0];
$user_birth = $data_user_info[1];
$user_group = $data_user_info[2];
$user_formstudy = $data_user_info[3];
$user_email = $data_user_info[4];
$user_phone = $data_user_info[5];
$user_role = $data_user_info[6];

$user_fi = explode(' ', $user_name);
#$user_fi[1] = ИМЯ
#$user_fi[0] = ФАМИЛИЯ
#$user_fi[0] = ОЧЕСТВО
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Информация о вас!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
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
<? echo "           <p class='sb-name'> $user_fi[1] $user_fi[0] </p>"; ?>
<? echo "           <p class='sb-role'> $user_role </p>"; ?>
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
                    <a href="php/logout.php"> Выйти </a>
                </div>
            </div>
            <div id="nav-menu">
                <ul>
                    <li> <a href="student_you.php" id="nav-menu_active"> Вы </a> </li>
                    <li> <a href="student_group.php"> Группы </a> </li>
                    <li> <a href="student_specialty.php"> Специальности </a> </li>
                </ul>
            </div>
            <div id="content">
                <div id="profile">
                    <img src="images/avatar.jpg">
                    <div class='p-background'>
            <? echo "<h2 class='b-name'> $user_fi[1] $user_fi[0] </h2>"; ?>
            <? echo "<p class='b-info'> $user_role </p>"; ?>
                    </div>
                    <div class='info-background'>
                        <div class="user-info">
                            <p> Имя ученика: </p>
                    <? echo "<p> $user_name</p>"; ?>
                            <hr>
                            <p> Дата рождения: </p>
                    <? echo "<p> $user_birth </p>"; ?>
                            <hr>
                            <p> Группа: </p>
                    <? echo "<p> <a href='student_group_profile.php?id=$user_id_group[0]'> $user_group </a> </p>"; ?> 
                            <hr>
                            <p> Форма обучения: </p>
                    <? echo "<p> $user_formstudy </p>"; ?>
                        </div>
                        <div class="profile-info">
                            <p> Почтовый адрес: </p>
                    <? echo "<p> $user_email </p>"; ?>
                            <hr>
                            <p> Номер: </p>
                    <? echo "<p> $user_phone </p>"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
