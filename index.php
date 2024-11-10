<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman login</h1>

    <form action="./backend/admin.php" method="post">
        <input type="email" name="email" id="email" placeholder="email"/>
        <br>
        <input type="password" name="password" id="password" placeholder="password"/>
        <br><br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>