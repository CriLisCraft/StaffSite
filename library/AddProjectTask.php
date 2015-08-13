<?php

include_once 'config.php';

$con = new mysqli(HOST, USER, PASS, DB);
if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}
$sql = "INSERT INTO `tasks` (`id`, `projectID`, `name`, `status`, `manager`)
VALUES (NULL, '" . $_POST['id'] . "', '" . $_POST['name'] . "', 'Not Done', '" . $_POST['manager'] . "');";

if ($con->query($sql) === true) {
    header( "refresh:0;url=http://staff.criliscraft.cf/project.php?id=" . $_POST['id']);
} else {
    echo "Error: " . $sql . "<br />" . $con->error;
}

$con->close();
