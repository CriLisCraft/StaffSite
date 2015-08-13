<?php

include_once 'config.php';

$con = new mysqli(HOST, USER, PASS, DB);
if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "INSERT INTO `clc_staff`.`train_changelog` (`id`, `type`, `date`, `note`)
VALUES (NULL, '" . $_POST['type'] . "', '" . $_POST['date'] . "', '" . $_POST['note'] . "');";

if ($con->query($sql) === true) {
    header( "refresh:0;url=http://staff.criliscraft.cf/admin.php");
} else {
    echo "Error: " . $sql . "<br />" . $con->error;
}

$con->close();