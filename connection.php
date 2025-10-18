<?php
$host = "dpg-d3ps9rqli9vc73bs6lvg-a";
$port = "5432";
$dbname = "edoc_xt4w";
$user = "edoc_xt4w_user";
$password = "WmMydYKl5PNVo486cPRjROTjZVByJ1YP";

// Create connection
$database = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$database) {
    die("Connection failed: " . pg_last_error());
}

// Optional: set client encoding to UTF8
pg_set_client_encoding($database, "UTF8");
?>
