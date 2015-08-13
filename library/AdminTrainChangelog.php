<?php

include_once 'config.php';

$con = mysql_connect(HOST, USER, PASS);
$db = mysql_select_db(DB);

$res = mysql_query("SELECT * from train_changelog");

while ($row = mysql_fetch_array($res)) {
    echo '<tr>';
    echo '<td>' . $row['id'] .'</td>';
    echo '<td>' . $row['type'] .'</td>';
    echo '<td>' . $row['date'] . '</td>';
    echo '<td>' . $row['note'] . '</td>';
    echo '</tr>';
}
mysql_close($con);
