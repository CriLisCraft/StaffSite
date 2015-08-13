<?php

include_once 'config.php';

$con = new mysqli(HOST, USER, PASS, DB);
if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "INSERT INTO alerts (id, type, text, visible)
VALUES ('" . $_POST['add_id'] . "', '" . $_POST['add_type'] . "', '" . $_POST['add_text'] . "', '" . $_POST['add_visible'] . "')";

if ($con->query($sql) === true) {
    header( "refresh:0;url=http://staff.criliscraft.cf/admin.php");
} else {
    echo "Error: " . $sql . "<br />" . $con->error;
}

$con->close();