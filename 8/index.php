<?php

$var_url = 'https://marc.cesnuria.com/A1/7/index.php';

$var_url = parse_url($var_url);

echo $var_url['scheme']."<br>";
echo $var_url['host']."<br>";
echo $var_url['path']."<br>";

