<?php

$data = getData($username);

$distro = '<table class="table"><tbody>';

$distrojson = $data['providers']['distroinfo'];



$distros .= '<tr><td>OS</td><td>' . $distro['os'] . '</td></tr>';
$distros .= '<tr><td>Distro</td><td>' . $distro['distro'] . '</td></tr>';
$distros .= '<tr><td>WM/DE</td><td>' . $distro['wmde'] . '</td></tr>';
$distros .= '<tr><td>Terminal</td><td>' . $distro['terminal'] . '</td></tr>';
$distros .= '<tr><td>Browser</td><td>' . $distro['browser'] . '</td></tr>';



$distros .= '</tbody></table>';

data("Distros", $distros);