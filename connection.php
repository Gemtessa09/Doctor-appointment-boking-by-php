<?php
// Connect to Render PostgreSQL database
$host = "dpg-d3psv37diees73c4aq3g-a.oregon-postgres.render.com";
$port = "5432";
$dbname = "edoc_cg1i";
$username = "edoc_cg1i_user";
$password = "GoE9Thow9mcrmAqoibgttxJzvDaqoHB4";

// Create connection
$database = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

?>
