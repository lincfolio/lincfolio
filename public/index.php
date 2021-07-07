<?php

require("../vendor/autoload.php");

error_reporting(0);

$klein = new \Klein\Klein();

$klein->respond('/[:username]', function ($request) {
    require("../user.php");
    renderUserPage($request->username);
});

$klein->respond('/', function () {
    require("../home.php");
});

$klein->dispatch();