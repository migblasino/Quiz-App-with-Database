<?php include 'retrieve_questions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz App</title>
</head>
<body>
    <h1>Quiz App</h1>
    <form action="submit_quiz.php" method="POST">
        <div class="user-info">
            <label for="user_name">Enter your name:</label>
            <input type="text" id="user_name" name="user_name" required>
        </div>
        <?php foreach ($questions as $index => $question): ?>
            <div class="question">
                <p><strong><?= $index + 1 ?>. <?= htmlspecialchars($question['question']) ?></strong></p>
                <div class="options">
                    <?php foreach (['a', 'b', 'c', 'd'] as $option): ?>
                        <label>
                            <input type="radio" name="answer[<?= $question['id'] ?>]" value="<?= $option ?>" required>
                            <?= htmlspecialchars($question["option_$option"]) ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <button type="submit">Submit Quiz</button>
    </form>
</body>
</html>
