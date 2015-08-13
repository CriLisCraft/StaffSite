<?php

include_once 'config.php';

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE `clc_staff`.`train_changelog` SET `id` = \'4\', `type` = \'Old\', `date` = \'8-11-1015\', `note` = \'I am new\'
WHERE `train_changelog`.`id` = 3;";

$sql = 'UPDATE `train_changelog` SET `type` = "' . $_POST['type'] . '", `date` = "' . $_POST['date'] . '", `note` = "' .  $_POST['note'] . '"
WHERE `id` = "' . $_POST['id'] . '";';

if ($con->query($sql) === true) {
    header( "refresh:0;url=http://staff.criliscraft.cf/admin.php");
} else {
    echo "Error: " . $sql . "<br />" . $con->error;
}

$con->close();