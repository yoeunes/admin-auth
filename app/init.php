<?php

session_start();

if (!isset($_SESSION['auth'])) {
    $_SESSION['auth'] = false;
}

include_once __DIR__.'/helpers.php';


