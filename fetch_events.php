<?php
// fetch_events.php

$servername = "localhost";
$username = "root";
$password = ""; // XAMPP default
$dbname = "bup_portal"; // change to your DB name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// --- Fetch events ---
$upcoming_sql = "SELECT * FROM events WHERE type='upcoming' ORDER BY event_date ASC";
$previous_sql = "SELECT * FROM events WHERE type='previous' ORDER BY event_date DESC";

$upcoming_events = $conn->query($upcoming_sql);
$previous_events = $conn->query($previous_sql);

?>
