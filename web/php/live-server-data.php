<?php
// Set the JSON header
use app\forms\GraphForm;

header("Content-type: text/json");

// The x value is the current JavaScript time, which is the Unix time multiplied
// by 1000.
$socket = GraphForm::getSocket();
// throw new \Exception(var_export($socket));

$x = $socket['datetime'];
// The y value is a random number
$y = $socket['bid'];

// Create a PHP array and echo it as JSON
$ret = array($x, $y);
echo json_encode($ret);
?>