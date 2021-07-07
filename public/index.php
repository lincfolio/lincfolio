<?php

require("../vendor/autoload.php");

ini_set('display_errors',0);
error_reporting(E_ALL|E_STRICT);

$klein = new \Klein\Klein();

$klein->respond('/[:username]', function ($request) {
    require("../user.php");
    renderUserPage($request->username);
});

$klein->respond('/', function () {
    require("../home.php");
});

$klein->dispatch();