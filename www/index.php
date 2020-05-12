<?php
// phpinfo();

$link = mysqli_connect("mysql", "root", "password", null);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made!" . PHP_EOL. "<br/>";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL. "<br/>";
echo "MySQL Server version: ".$link->server_version;

mysqli_close($link);

?>
