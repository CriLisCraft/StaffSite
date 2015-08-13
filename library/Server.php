<?php
include_once 'ServerStatus.php';
$status = new MinecraftServerStatus();

$response = $status->getStatus('104.243.39.107');
$staff = array('Chaka');

if (!$response) {
    echo '<h2>STATUS: <span class="label label-danger">Offline</span></h2>';
} else {
    echo '<h2>STATUS: <span class="label label-success">Online</span></h2>';
    echo "Online Players " .$response['players']."/".$response['maxplayers'];

    echo '<table class="table"><tr><th></th><th>Username</th><th>UUID</th><th>Actions</th></tr>';
    foreach ($response['sample'] as $player) {
        echo '<tr>';
        echo '<td><img src="https://crafatar.com/avatars/' . $player->id .'?helm" alt="' . $player->name . 's head" height="16" width="16"></td>';
        echo '<td>'.$player->name.'</td><td>'.$player->id.'</td>';
        echo '<td>';
        echo '<div class="dropdown">';
        echo '<button class="btn btn-default dropdown-toggle" id="ss-dp" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';
        echo 'Actions';
        echo '<span class="caret"></span>';
        echo '</button>';
        echo '<ul class="dropdown-menu" aria-labelledby="ss-dp">';
        echo '<li><a href="?kick="' . $player->name . '>Kick</a></li>';
        echo '<li><a href="?ban="' . $player->name . '>Ban</a></li>';
        echo '</ul>';
        echo '</div>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}