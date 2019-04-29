<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Расписание!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
    <link rel="stylesheet" href="styles/contents/style_schedule.css">
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
                        <li> <a href="schedule.php" id="sb-menu_active"> Расписание </a> </li>
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
            <div id="content">
                <div id="rasp">
                    <table border="1">
                        <tr>
                            <th></th>
                            <th>ПН<br></th>
                            <th>ВТ</th>
                            <th>СР</th>
                            <th>ЧТ</th>
                            <th>ПТ</th>
                            <th>СБ</th>
                        </tr>
                        <tr>
                            <td>9:00<br>10:35<br></td>
                            <td>РУССКИЙ<br></td>
                            <td>МАТАН<br></td>
                            <td>РУССКИЙ</td>
                            <td>МАТАН</td>
                            <td>РУССКИ</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>10:45<br>12:20<br></td>
                            <td>МАТАН</td>
                            <td>РУССКИЙ</td>
                            <td>МАТАН</td>
                            <td>РУССКИЙ</td>
                            <td>МАТАН</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>13:00<br>14:35<br></td>
                            <td>РУССКИЙ</td>
                            <td>МАТАН</td>
                            <td>РУССКИЙ</td>
                            <td>МАТАН</td>
                            <td>РУССКИЙ</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>14:35<br>16:20</td>
                            <td>МАТАН</td>
                            <td>РУССКИЙ</td>
                            <td>МАТАН</td>
                            <td>РУССКИЙ</td>
                            <td>МАТАН</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <form class="is-search">
                    <input type="text" placeholder="Введите группу.">
                    <div class="is-items">
                        <p class=is-p-button> <a href="#"> Группа </a> </p>
                        <hr>
                        <p class=is-p-button> <a href="#"> Группа </a> </p>
                        <hr>
                        <p class=is-p-button> <a href="#"> Группа </a> </p>
                        <hr>
                        <p class=is-p-button> <a href="#"> Группа </a> </p>
                        <hr>
                        <p class=is-p-button> <a href="#"> Группа </a> </p>
                        <hr>
                        <p class=is-p-button> <a href="#"> Группа </a> </p>
                        <hr>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>