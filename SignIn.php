<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleS.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <img src="./paisaje.jpg" width="100%" height="100%">
    <form method="post">
         
        <div class="inicio">
            <div class="login">
                Sign in
            </div>
            <div class="informacion">
                User
                <br>
                <input class="miInput" type="text" size="32" placeholder="Enter the User" name="user">
                <br>
                <br>
                Email
                <br>
                <input class="miInput" type="email" size="32" placeholder="Enter the Emal" name="email" required>
                <br>
                <br>
                Password
                <br>
                <input class="miInput" type="password" size="32" placeholder="Enter the Password" name="password" required>
            </div>
            <?php include("./procesar.php")?>
            <div class="boton">
                <input class="miInputB" type="submit" id="" value="Sign in" name="send">
            </div>
        </div>
    </form>
</body>

</html>