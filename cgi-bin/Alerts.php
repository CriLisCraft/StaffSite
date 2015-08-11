<?php

include_once 'config.php';

$con = mysql_connect($mySQL_host, $mySQL_user, $mySQL_pass);
$db = mysql_select_db('clc_staff');

$res = mysql_query('SELECT * FROM alerts');

while ($row = mysql_fetch_array($res)) {
    if ($row['visible'] == 'true') {
        echo '<div class="alert alert-';
        echo $row['type'];
        echo '" role="alert">';
        echo $row['text'];
        echo '</div>';
    }
}
mysqli_close($con);