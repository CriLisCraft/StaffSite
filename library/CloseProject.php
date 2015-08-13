<?php

include_once 'config.php';

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE `projects` SET `status` = 'Closed', `bkStatus` = 'closed' WHERE `id` = " . $_POST['id'] . ";";

if ($con->query($sql) === true) {
    header( "refresh:0;url=http://staff.criliscraft.cf/projects.php");
} else {
    echo "Error: " . $sql . "<br />" . $con->error;
}

$con->close();