<?php

include_once 'config.php';

$con = new mysqli(HOST, USER, PASS, DB);
if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}
$sql = "INSERT INTO `clc_staff`.`projects` (`id`, `name`, `status`, `bkStatus`, `tag`, `openedOn`, `manager`)
VALUES (NULL, '" . $_POST['name'] . "', 'Open', 'open', '" . $_POST['tag'] . "', CURRENT_TIMESTAMP, '" . $_POST['manager'] . "');";

if ($con->query($sql) === true) {
    header( "refresh:0;url=http://staff.criliscraft.cf/projects.php");
} else {
    echo "Error: " . $sql . "<br />" . $con->error;
}

$con->close();