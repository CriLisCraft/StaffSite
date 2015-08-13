<?php

include_once 'config.php';

$id = $_GET['id'];

$con = mysql_connect(HOST, USER, PASS);

if (!$con) {
    die('Could not connect: ' . mysql_error());
}

$db = mysql_select_db(DB, $con);

$res = mysql_query('SELECT * FROM tasks WHERE projectID =' . $id . ' LIMIT 0 , 30');

while ($row = mysql_fetch_array($res)) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td><span class="label label-';
    if ($row['status'] == 'Not Done') {
        echo 'danger">Not Done';
    } elseif ($row['status'] == 'In Progress') {
        echo 'warning">In Progress';
    } elseif ($row['status'] == 'Done') {
        echo 'success">Done';
    } else {
        echo 'danger">ERROR';
    }
    echo '</span>';
    echo '<td>' . $row['manager'] . '</td>';
    echo '</tr>';
}
mysql_close($con);
