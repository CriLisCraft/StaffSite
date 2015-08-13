<?php

include_once 'config.php';

$con = mysql_connect(HOST, USER, PASS);
$db = mysql_select_db(DB);

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
mysql_close($con);