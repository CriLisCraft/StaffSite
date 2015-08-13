<?php

include_once 'config.php';

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE `clc_staff`.`alerts` SET `type` = '" . $_POST['edit_type'] . "', `text` = '" . $_POST['edit_text'] . "', `visible` = '" . $_POST['edit_visible'] . "'
WHERE `alerts`.`id` = " . $_POST['edit_id'] . ";";

if ($con->query($sql) === true) {
    header( "refresh:0;url=http://staff.criliscraft.cf/admin.php");
} else {
    echo "Error: " . $sql . "<br />" . $con->error;
}

$con->close();