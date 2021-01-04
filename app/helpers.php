<?php

function flash(string $type, string $message)
{
    $_SESSION['_flash'][$type][] = $message;
}

function error(string $message)
{
    flash('error', $message);
}

function success(string $message)
{
    flash('success', $message);
}

function flasher()
{
    include_once __DIR__.'/../component/flasher.php';
}

function redirect(string $url)
{
    header('Location: ' . $url);
    exit;
}
