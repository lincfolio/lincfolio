<?php

$data = getData($username);

$hobbies = '';

$hobbiesjson = $data['providers']['hobbies']['name'];

foreach ( $hobbiesjson as $hobby ) {
    $hobbies .= $hobby . '<br>';
}

data("Hobbies", $hobbies);