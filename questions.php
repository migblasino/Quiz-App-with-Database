<?php
include 'db_connection.php';

$query = $conn->query("SELECT * FROM questions");
$questions = $query->fetchAll(PDO::FETCH_ASSOC);
?>
