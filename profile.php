<?php 
session_start();
if($_SESSION['role'] != 'user') {
    session_destroy();
    header('Localtion: index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Selamat Datang</title>
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .welcome-container {
            max-width: 500px;
            padding: 40px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
        }
        h1 {
            color: #343a40;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Selamat Datang <?= $_SESSION['name']; ?></h1>
        <div class="mt-4">
            <a href="backend/logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>
</html>
