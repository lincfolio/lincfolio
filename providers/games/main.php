<?php

$data = getData($username);

$games = '<table class="table"><tbody>';

$gamesjson = $data['providers']['games'];

foreach ( $gamesjson as $game ) {
    $games .= '<tr><th>' . $game['game'] . '</th><td>' . $game['info'] . '</td><td>' . $game['status'] . '</td></tr>';
}

$games .= '</tbody></table>';

data("Games", $games);