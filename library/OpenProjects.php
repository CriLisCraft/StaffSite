<?php

include_once 'config.php';

$con = mysql_connect(HOST, USER, PASS);
$dp = mysql_select_db(DB);

$res = mysql_query("SELECT * FROM projects");

while ($row = mysql_fetch_array($res)) {
    if ($row['bkStatus'] == 'open') {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td><a href="http://staff.criliscraft.cf/project.php?id=' . $row['id'] . '">' . $row['name'] . '</a></td>';
        $tag = $row['tag'];
        echo '<td><span class="label label-';
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
        echo "</span></td>";
        echo '<td>' . $row['openedOn'] . '</td>';
        echo '<td>' . $row['manager'] . '</td>';
        echo '</tr>';
    }
}
mysql_close($con);