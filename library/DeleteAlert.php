<?php

include_once 'config.php';

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql =  "DELETE FROM `clc_staff`.`alerts` WHERE `alerts`.`id` = " . $_POST['del_id'] . "";

if ($con->query($sql) === true) {
    header( "refresh:0;url=http://staff.criliscraft.cf/admin.php");
} else {
    echo "Error: " . $sql . "<br />" . $con->error;
}

$con->close();