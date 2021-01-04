<?php

include_once __DIR__.'/../../app/init.php';

session_destroy();

redirect('/admin/login');
