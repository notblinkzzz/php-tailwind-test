<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date and Time Formatter</title>
    <link rel="stylesheet" href="assets/css/style.css" />

</head>
<body>
    <div class="container">
        <h1>Simple Date and Time Formatter</h1>
        <div class="output">
            <?php
                date_default_timezone_set('Asia/Manila'); // adjust as needed
                $now = new DateTime();
                $formattedDate = $now->format('l, F j, Y');
                $formattedTime = $now->format('h:i:s A');
                $futureDate = $now->modify('+7 days')->format('Y-m-d');

                // Reset $now to current time for consistent output
                $now = new DateTime();
                echo "<p><strong>Current Date and Time:</strong> " . $now->format('Y-m-d H:i:s') . "</p>";
                echo "<p><strong>Formatted Date:</strong> $formattedDate</p>";
                echo "<p><strong>Formatted Time:</strong> $formattedTime</p>";
                echo "<p><strong>Date 7 days from today:</strong> $futureDate</p>";
            ?>
        </div>
    </div>
</body>
</html>
