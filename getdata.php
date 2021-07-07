<?php

function getData($username) {

    $rawjson = file_get_contents('https://raw.githubusercontent.com/lincfolio/lfdb/main/profiles/' . $username . '/lf.json');

    return json_decode($rawjson, true);

}