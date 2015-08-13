<?php

include_once 'config.php';

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE `tasks` SET `status` = '" . $_POST['status'] . "' WHERE `id` = " . $_POST['tid'] . ";";

if ($con->query($sql) === true) {
    header( "refresh:0;url=http://staff.criliscraft.cf/project.php?id=" . $_POST['id']);
} else {
    echo "Error: " . $sql . "<br />" . $con->error;
}

$con->close();