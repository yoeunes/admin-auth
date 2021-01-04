<?php

include_once __DIR__.'/../../../app/init.php';

if (true == $_SESSION['auth']) {
    redirect('/admin/article');
    exit;
}

$user = array_merge(['email' => null, 'password' => null], $_POST['user'] ?? []);

$_SESSION['user'] = $user;

if('salma@gmail.com' !== $user['email'] || '123456' !== $user['password']) {
    error('Email or Password invalid');
    redirect('/admin/login');
    exit;
}

success('Yeeey!!! you are connected successfully');

$_SESSION['auth'] = true;
redirect('/admin/article');
