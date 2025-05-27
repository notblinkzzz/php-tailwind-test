<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tailwind CSS -->
        <link href="../../src/output.css" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/style.css">
        <title>PHP with Tailwind</title>
    </head>
    <body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold underline bg-blue-500 text-white p-4 rounded-lg shadow-lg">
            <?php
                echo "Hello world from PHP!";
            ?>
        </h1>
        <p class="text-3xl font-bold underline bg-red-500 text-white p-4 rounded-lg shadow-lg">
            <?php
                $name = "John Doe";
                echo "Hello, $name !";
            ?>
        </p>
    </body>
</html>
