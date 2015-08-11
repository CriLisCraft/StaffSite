<?php
header( "refresh:2;url=index.php");
$target_path = "uploads/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    echo 'Uploaded. Click <a href="http://staff.criliscraft.cf/">here</a> if you have not been refirected within 5 seconds.';
} else {
    echo "Error, Please contact Chaka.";
}