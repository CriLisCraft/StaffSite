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
    $manager = $row['manager'];
    echo $manager;
}
mysql_close($con);
