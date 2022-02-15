<?php

// Redirect using a Location header that has not had spaces correctly encoded.
$testurl = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['SCRIPT_NAME'];

if (empty($_GET['step'])) {
    $target = "$testurl?step=value with spaces";

    header('HTTP/1.1 302 Found');
    header("Location: $target");
} else {
    echo 'done';
}
