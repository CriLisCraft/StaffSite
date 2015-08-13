<?php

include_once 'config.php';

$id = $_GET['id'];

$con = mysql_connect(HOST, USER, PASS);

if (!$con) {
    die('Could not connect: ' . mysql_error());
}

$db = mysql_select_db(DB, $con);

$res = mysql_query('SELECT * FROM projects WHERE id =' . $id . ' LIMIT 0 , 30');

while ($row = mysql_fetch_array($res)) {
    $status = $row['status'];
    echo '<span class="label label-';
    if ($status == "Open") {
        echo 'success">Open';
    } else if ($status == "Closed") {
        echo 'danger">Closed';
    } else {
        echo 'danger">ERROR';
    }
    echo '</span>';
}
mysql_close($con);