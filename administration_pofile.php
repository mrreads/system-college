<?
session_start();

if (empty($_SESSION['id_user']) or empty($_GET['id'])) 
{
    header('Location: login.php');
}

$administration_id = $_GET['id'];

require_once 'php/connection.php';
$query_administration_info = "SELECT
                        fio,
                        number_SP,
                        position,
                        email,
                        phone_number,
                        addres,
                        name_role,
                        classrooms.number
                    FROM
                        administration_info,
                        roles,
                        classrooms
                    WHERE 
                        roles.id_role = administration_info.id_role
                    AND
                        administration_info.id_classroom = classrooms.id_classrooms
                    AND
                        id_administration = '$administration_id';";

$result_administration_info = mysqli_query($link, $query_administration_info);
$data_administration_info = mysqli_fetch_row($result_administration_info);

$admin_name = $data_administration_info[0];
$admin_numbersp = $data_administration_info[1];
$admin_position = $data_administration_info[2];
$admin_email = $data_administration_info[3];
$admin_phone = $data_administration_info[4];
$admin_address = $data_administration_info[5];
$admin_role = $data_administration_info[6];
$admin_classroom = $data_administration_info[7];

$admin_fi = explode(' ', $admin_name);

$user_id = $_SESSION['id_user'];
$query_user_info = "SELECT fio, name_role FROM students, roles WHERE students.id_role = roles.id_role AND id_student = '$user_id'";
$result_user_info = mysqli_query($link, $query_user_info);
$data_user_info = mysqli_fetch_row($result_user_info);
$user_fio = $data_user_info[0];
$user_fio = explode(' ', $user_fio);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> О администрации!</title>
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
                    <? echo " <p class='sb-name'> $user_fio[1] $user_fio[0] </p>"; ?>
                    <? echo "<p class='sb-role'> $data_user_info[1] </p>"; ?>
                </div>
                <div class="sb-menu">
                    <ul>
                        <li> <a href="administration.php" id="sb-menu_active"> Администрация </a> </li>
                        <li> <a href="subject.php"> Предметы </a> </li>
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
            <div id="content">
                <div id="profile">
                    <img src="https://konata.namikoi.com/characters/5f245464-91c4-4597-b7a2-f4e5397740fa/b88e507d-9053-44b4-8198-aa1961eca6c0.jpg">
                    <div class='p-background'>
                        <? echo "              <h2 class='b-name'> $admin_fi[1] $admin_fi[0] </h2>"; ?>
                        <? echo "              <p class='b-info'> $admin_role </p>"; ?>
                    </div>
                    <div class='info-background'>

                        <div class="user-info">
                            <p> Имя администрации: </p>
                            <? echo "<p> $admin_name </p>"; ?>
                            <hr>
                            <p> Отделение: </p>
                            <? echo "<p> $admin_numbersp </p>"; ?>
                            <hr>
                            <p> Должность: </p>
                            <? echo "<p> $admin_position </p>"; ?>
                            <hr>
                            <p> Кабинет: </p>
                            <? echo "<p> $admin_classroom </p>"; ?>
                        </div>
                        <div class="profile-info">
                            <p> Почта администрации: </p>
                            <? echo "<p> $admin_email </p>"; ?>
                            <hr>
                            <p> Номер: </p>
                            <? echo "<p> $admin_phone </p>"; ?>
                            <hr>
                            <p> Адрес: </p>
                            <? echo "<p> $admin_address </p>"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>