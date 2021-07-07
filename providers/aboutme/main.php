<?php

$data = getData($username);

$aboutmetxt = $data['providers']['aboutme']['txt'];

data("About Me", $aboutmetxt);