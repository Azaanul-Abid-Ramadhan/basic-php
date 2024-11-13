<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background-color: #a1a0a5;
    }
    .login-container {
        width: 100%;
        max-width: 400px;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        background-color: #ffffff;
        margin: 0 20px;
    }
    .input-group {
        position: relative;
        margin-bottom: 20px;
    }
    .input-group__input {
        font: inherit;
        color: #000;
        padding: 10px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 10px;
        outline: none;
        background-color: #f8f9fa;
        transition: border-color 500ms;
    }
    .input-group__input:focus {
        border-color: #3c503e;
    }
    .input-group__label {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #888;
        transition: all 300ms ease;
        pointer-events: none;
    }
    .input-group__input:focus + .input-group__label,
    .input-group__input:valid + .input-group__label {
        transform: translateY(-150%) scale(0.8);
        background-color: #ffffff;
        padding: 0 5px;
        color: #3c503e;
    }
    button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 10px;
        background-color: #00bfff;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }
    button:hover {
        background-color: #1e90ff;
    }
</style>
</head>

<body>
    <div class="login-container">
        <h2 class="text-center">Halaman Login</h2>
        <form action="./backend/login.php" method="post">
            <div class="input-group">
                <input type="email" name="email" id="email" class="input-group__input" required>
                <label for="email" class="input-group__label">Email</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" class="input-group__input" required>
                <label for="password" class="input-group__label">Password</label>
            </div>
            <button type="submit" name="submit" id="submit">Login</button>
        </form>
    </div>
</body>
</html>
