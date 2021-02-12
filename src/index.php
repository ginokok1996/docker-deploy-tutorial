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
    <!--    <a href="other-page.html">Go to other page</a>-->
    <?php
    if (getenv('APP_ENV')) {
        $connection = new PDO('mysql:host=mysql;dbname=env-2701-1613121431803-docker-db', 'admin-142839', 'rOElFw!@YCHpx221');
    } else {
        $connection = new PDO('mysql:host=127.0.0.1:3306;dbname=env-2701-1613121431803-docker-db', 'admin-142839', 'rOElFw!@YCHpx221');
    }
    ?>
</body>

</html>