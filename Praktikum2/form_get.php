<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Login Metode GET</h1>
    <form action="submit_get.php" method="GET">
        <div>
            <label for="">Username</label>
            <input type="text" name="username" required>
        </div><br>

        <div>
            <label for="">Password</label>
            <input type="text" name="password" required>        
        </div><br>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>