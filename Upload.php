<?php
$target_path = "uploads/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    echo 'Uploaded. <a href="http://criliscraft.noip.me/staff/">Back to the staff page</a>';
} else {
    echo "Error, Please contact Chaka.";
}