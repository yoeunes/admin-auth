<?php
include_once __DIR__.'/../../app/init.php';

if (true == $_SESSION['auth']) {
    redirect('/admin/article');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="flex container p-4">
    <div class="flex-1 text-4xl font-semibold">
        Admin Auth
    </div>
    <div>
        <a class="text-indigo-500" href="/admin/login">Admin Area</a>
    </div>
</header>
<div class="container mx-auto p-4">
    <?php flasher() ?>
    <form action="/admin/controller/user/user_login.php" method="post" class="w-2/3 mx-auto mt-4">
        <div class="flex flex-col">
            <label for="email">Email</label>
            <input class="border border-gray-200 rounded h-10" type="text" id="email" name="user[email]" value="<?php echo $_SESSION['user']['email'] ?? null ?>">
        </div>
        <div class="flex flex-col mt-4">
            <label for="password">Password</label>
            <input class="border border-gray-200 rounded h-10" type="password" id="password" name="user[password]">
        </div>
        <button class="bg-indigo-500 text-white px-4 py-2 rounded mt-4">Login</button>
    </form>
</div>
</body>
</html>
