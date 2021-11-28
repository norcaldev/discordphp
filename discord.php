<?php
    if (!isset($_GET['webhook']) or !isset($_GET['message'])) exit;
    file_get_contents('https://discordapp.com/api/webhooks/'.$_GET['webhook'], false, stream_context_create(['http' => [
        'method' => 'POST',
        'header' => 'Content-type: application/json',
        'content' => json_encode(['content' => $_GET['message']])
    ]]))
?>