<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question List</title>
    <link rel="stylesheet" href="question.css">
</head>
<body>
    <div class="container">
        <h1>Student Help System</h1>

        <!-- Display List of Questions/Posts -->
        <div class="question-list" id="question-list">
        <table border=1>
        <tr>
            <th colspan=5><h3> Question List</h3> </th>
        </tr>
        <tr>
            <th>Question Id</th>
            <th>User ID</th>
            <th>Module ID</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
        <?php 
        include "../connect.php"; 
        ?>
        <?php 
        foreach ($questions as $question) {
        ?>
        <tr>
            <td><?= $question['question_id']?></td>
            <td><?= $question['user_id']?></td>
            <td><?= $question['module_id']?></td>
            <td><?= $question['title']?></td>
            <td><?= $question['content']?></td>
        </tr>
        <?php } ?>
    </table>
        </div>
    </div>

    <!-- Script for handling question display and comment/reaction submission -->
    <script src="script.js"></script>
</body>
</html>