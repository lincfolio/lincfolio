<?php

function data($title, $data) {
    echo('

                    <div class="col">
                    <div class="container bg-dark rounded shadow-lg" style="padding-top:1rem;padding-bottom:2rem;width:90%;margin-top:0.5rem;margin-bottom:0.5rem">
                    <div class="container bg-primary bg-gradient rounded shadow" style="padding-top:2px;padding-bottom:1px;width:100%">
                    <center>
                    <h2>' . $title . '</h2>
                    </center>
                    </div>
                    <div style="height:0.5rem"></div>
                    <div class="container bg-dark bg-gradient rounded shadow-sm" style="padding-top:5px;padding-bottom:1px;width:100%">

                        ' . $data . '

                    </div>
                    </div>
                    </div>

                    ');
}

$data = getData($username);

$accounts = '<table class="table"><tbody>';

$accountsjson = $data['providers']['accounts'];

foreach ( $accountsjson as $account ) {
    $accounts .= '<tr><td>' . $account['name'] . '</td><td>' . $account['username'] . '</td></tr>';
}

$accounts .= '</tbody></table>';

data("Accounts", $accounts);