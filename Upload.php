<?php

$target_path = "uploads/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    header( "refresh:0;url=http://staff.criliscraft.cf/index.php");
} else {
    echo "Error, Please contact Chaka.";
}