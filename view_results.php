<?php
include 'db_connection.php';

try {
    $query = $conn->query("SELECT * FROM results ORDER BY date_taken DESC");
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1>Quiz Results</h1>";
    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Score</th>
            <th>Total Questions</th>
            <th>Percentage</th>
            <th>Date Taken</th>
        </tr>";

    foreach ($results as $result) {
        echo "<tr>
                <td>{$result['id']}</td>
                <td>" . htmlspecialchars($result['user_name']) . "</td>
                <td>{$result['score']}</td>
                <td>{$result['total_questions']}</td>
                <td>" . number_format($result['percentage'], 2) . "%</td>
                <td>{$result['date_taken']}</td>
            </tr>";
    }
    echo "</table>";
} catch (Exception $e) {
    die("Error fetching results: " . $e->getMessage());
}
?>
