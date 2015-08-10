<?php
include_once 'cgi-bin/ServerStatus.php';
$status = new MinecraftServerStatus();

$response = $status->getStatus('criliscraft.noip.me');

if (!$response) {
    echo '<h2>STATUS: <span class="label label-danger">Offline</span></h2>';
} else {
    echo '<h2>STATUS: <span class="label label-success">Online</span></h2>';
    echo "Online Players " .$response['players']."/".$response['maxplayers'];
    echo '<br /><pre>';
    print_r($response['sample']);
    echo '</pre>';
}
