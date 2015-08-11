<?php

include_once 'config.php';

$con = mysql_connect($mySQL_host, $mySQL_user, $mySQL_pass);
$db = mysql_select_db($mySQL_staff_db);

$res = mysql_query('SELECT * FROM projects');

while ($row = mysql_fetch_array($res)) {
    echo '<a href="https://github.com/CriLisCraft/Issue-Tracker/issues/' . $row['gitID'] . '">' . $row['gitID'] . '</a></td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td><span class="label label-' . $row['statusType'] . '">' . $row['status'] . '</span></td>';
    echo '<td>' . $row['notes'] . '</td>';
}
mysqli_close($con);