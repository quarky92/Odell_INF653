<?php
$dsn = "mysql:host=localhost;dbname=zippyusedautos";
$username = "root";

try {
    $db = new PDO($dsn, $username);
} catch (PDOException $e) {
    $message = $e->getMessage();
    echo "<p> $message </p>";
}

function _log($data)
{
    echo "<script> console.log(" . json_encode($data) . "); </script>";
}
