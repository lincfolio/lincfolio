<?php

require("../vendor/autoload.php");

$klein = new \Klein\Klein();

$klein->respond('/[:username]', function ($request) {
    require("../user.php");
    renderUserPage($request->username);
});

$klein->respond('/', function () {
    require("../home.php");
});

$klein->dispatch();