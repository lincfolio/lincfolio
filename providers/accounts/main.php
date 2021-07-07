<?php

require("../providers/provinc.php");

$data = getData($username);

$accounts = '<table class="table"><tbody>';

$accountsjson = $data['providers']['accounts'];

foreach ( $accountsjson as $account ) {
    $accounts .= '<tr><td>' . $account['name'] . '</td><td>' . $account['username'] . '</td></tr>';
}

$accounts .= '</tbody></table>';

data("Accounts", $accounts);