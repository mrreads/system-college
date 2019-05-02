<?
$group_id = $_GET['id'];

$result_group_info = mysqli_query($link, "SELECT number_group FROM groups WHERE id_group = '$group_id'");
$data_group_info = mysqli_fetch_row($result_group_info);
$group = $data_group_info[0];


if ($group == 37123)
{ ?>
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
        <td>zxvbz<br></td>
        <td>wqer<br></td>
        <td>sdf</td>
        <td>МА2134sН</td>
        <td>asdf</td>
        <td></td>
    </tr>
    <tr>
        <td>10:45<br>12:20<br></td>
        <td>ФЫВАФЫВ</td>
        <td>фывасм</td>
        <td>МАААФТАН</td>
        <td>пфывапйц</td>
        <td>ыва</td>
        <td></td>
    </tr>
    <tr>
        <td>13:00<br>14:35<br></td>
        <td>счмфыв</td>
        <td>МфывафАН</td>
        <td>цук</td>
        <td>МфываТАН</td>
        <td>ьтимсит</td>
        <td></td>
    </tr>
    <tr>
        <td>14:35<br>16:20</td>
        <td>вапр</td>
        <td>йцуке</td>
        <td>кен</td>
        <td>фыва</td>
        <td>фыва</td>
        <td></td>
    </tr>
</table>
<?
}
else
if ($group == 3719)
{ ?>
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
        <td>asdas<br></td>
        <td>фыв<br></td>
        <td>фыв</td>
        <td>фыв</td>
        <td>фыв</td>
        <td></td>
    </tr>
    <tr>
        <td>10:45<br>12:20<br></td>
        <td>МяичиАТАН</td>
        <td>чясм</td>
        <td>фывфы</td>
        <td>ыыы</td>
        <td>МАыыАН</td>
        <td></td>
    </tr>
    <tr>
        <td>13:00<br>14:35<br></td>
        <td>ыфва</td>
        <td>МАыфваТАН</td>
        <td>ыфва</td>
        <td>фыва</td>
        <td>фыва</td>
        <td></td>
    </tr>
    <tr>
        <td>14:35<br>16:20</td>
        <td>рпо</td>
        <td>впр</td>
        <td>ячсм</td>
        <td>фыва</td>
        <td>МАТАН</td>
        <td></td>
    </tr>
</table>
<?
}
else
if ($group == '3 чёто там')
{ ?>
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
        <td>sgj<br></td>
        <td>asf<br></td>
        <td>xcvb</td>
        <td>nvbnc</td>
        <td>sdfg</td>
        <td></td>
    </tr>
    <tr>
        <td>10:45<br>12:20<br></td>
        <td>fghj</td>
        <td>ioup</td>
        <td>qwer</td>
        <td>asdf</td>
        <td>zxcv</td>
        <td></td>
    </tr>
    <tr>
        <td>13:00<br>14:35<br></td>
        <td>wer</td>
        <td>erty</td>
        <td>dfgh</td>
        <td>dj</td>
        <td>sgh</td>
        <td></td>
    </tr>
    <tr>
        <td>14:35<br>16:20</td>
        <td>МАТАН</td>
        <td>sdfg</td>
        <td>sdfg</td>
        <td>sdfg</td>
        <td>sdfg</td>
        <td></td>
    </tr>
</table>
<?
}
else
{
    echo "<h1 style='font-size: 54px'> ВЫБЕРИТЕ ГРУППУ </h1>";
}
?>