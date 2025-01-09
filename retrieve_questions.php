<?php
include 'db_connection.php';

try {
    $query = $conn->query("SELECT * FROM questions");
    $questions = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Error fetching questions: " . $e->getMessage());
}
?>
