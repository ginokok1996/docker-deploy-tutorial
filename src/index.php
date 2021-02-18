<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hello there</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            font-size: larger;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>

<body>
    <p class="center">hello world</p>
    <?php
    if (getenv('APP_ENV')) {
        $host = 'mysql';
    } else {
        $host = '127.0.0.1:3306';
    }

    $connection = new PDO("mysql:host={$host};dbname=env-2862-1613676344282-docker-uitleg-db", 'admin-904241', '1234567a');

    ?>
</body>

</html>