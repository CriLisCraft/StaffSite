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
    $tag = $row['tag'];
    echo '<span class="label label-';
    if ($tag == 'Feature') {
        echo 'primary">Feature';
    } elseif ($tag == 'Bug') {
        echo 'danger">Bug';
    } elseif ($tag == 'Other') {
        echo 'default">Other';
    } elseif ($tag == 'Player Data Merge') {
        echo 'info">Player Data Merge';
    } elseif ($tag == 'Plugin') {
        echo 'primary">Plugin';
    } elseif ($tag == 'VPS') {
        echo 'primary">VPS';
    } elseif ($tag == 'Server') {
        echo 'primary">Server';
    } else {
        echo 'default">None';
    }
    echo '</span>';
}
mysql_close($con);