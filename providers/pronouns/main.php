<?php

$data = getData($username);

$pronouns = '<table class="table"><tbody>';

$pronounsjson = $data['providers']['pronouns'];

foreach ( $pronounsjson as $pronoun ) {
    $pronouns .= '<tr><td>' . $pronoun['pronoun'] . '</td><td>' . $pronoun['status'] . '</td></tr>';
}

$pronouns .= '</tbody></table>';

data("Pronouns", $pronouns);