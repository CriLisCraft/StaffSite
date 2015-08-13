<?php

include_once 'config.php';

$con = mysql_connect(HOST, USER, PASS);
$db = mysql_select_db(DB);

$res = mysql_query('SELECT * FROM alerts');

while ($row = mysql_fetch_array($res)) {
    echo '<div class="alert alert-';
    echo $row['type'];
    echo '" role="alert">';
    echo $row['text'];
    echo '        <sup>ID: ' . $row['id'] . '</sup>';
    echo '        <sup>VISIBLE: ' . $row['visible'] . '</sup>';
    echo '</div>';
}
mysql_close($con);