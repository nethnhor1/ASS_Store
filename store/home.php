<?php
// home.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="icon" href="./image.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./image.png">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(./image.png);
            font-family: Arial, sans-serif;
        }

        form {
            padding: 20px;
            background: green;
            border-radius: 8px;
        }

        button {
            width: 100%;
            height: 100%;
            font-size: 3rem;
            background-color: #0078D7;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        button:hover {
            background-color: #13cc0dff;
        }
    </style>
</head>

<body>

    <form action="home/index.php" method="get">
        <button type="submit">ចូលទៅកាន់ ASS Website</button>
    </form>

</body>

</html>