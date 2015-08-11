<?php
require_once 'Websend.php';

$ws = new Websend("localhost");
$ws->password = "ourbukkit";

if($ws->connect()){
    $ws->doCommandAsConsole("time set 6000");
    echo "Time set.";
}else{
    echo "Failed to connect.";
}
$ws->disconnect();
?>
