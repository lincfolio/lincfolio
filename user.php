<?php

require("getdata.php");
require("providers/provinc.php");

function renderUserPage($username) {
    $data = getData($username);

    echo('

    <html>

          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

          <style>

          body {
            background-color: #121212;
          }

          </style>

          <body>

          <br><br>

          <div class="ui container-lg bg-dark rounded shadow text-center text-light text-wrap" style="padding-top:1rem;padding-bottom:2rem">

          <div class="container bg-dark bg-gradient rounded shadow-lg text-center" style="padding-top:5px;padding-bottom:5px;width:50%">
          <h1>' . $data["name"] . '</h1>
          <h3>' . $data["job-title"] . '</h3>
          </div>

          <br>

          <div class="row row-cols-1">





    ');

    foreach ( $data["include"] as $provider ) {
        require('providers/' . $provider . '/main.php');
    }

    echo('




            </div>
          </body>
    </html>

          ');
}