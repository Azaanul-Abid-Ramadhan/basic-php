<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Register</h1>
        <form action="./backend/register.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="masukkan nama anda">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="masukkan email anda">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="masukkan password anda">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="confirm" placeholder="masukkan konfirmasi password anda">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Register</button>
        </form>
    </div>
</body>
</html>
