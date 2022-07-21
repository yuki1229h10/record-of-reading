<?php

$dbHost = '';
$dbUsername = '';
$dbData = '';
$dbTable = '';

$link = mysqli_connect($dbName, $dbPass, $dbData, $dbTable);

if (!$link) {
  echo 'Error: 接続ができませんでした' . PHP_EOL;
  echo 'Debugging Error: ' . mysqli_error($link) . PHP_EOL;
  exit;
}
