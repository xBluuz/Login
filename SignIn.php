<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleS.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/155299/isolated/preview/1988d1faba4d059eb4461d955af5cf61-x-marca-garabato.png">
    <title>xBluuz - Sing In</title>
</head>

<body>
    <img src="./paisaje.jpg" width="100%" height="100%">
    <form method="post">

        <div class="inicio">
            <div class="botonn">
                <a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" color="white" 
                        class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z" />
                        <path fill-rule="evenodd"
                            d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                    </svg></a>
            </div>
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
                    <input class="miInput" type="password" size="32" placeholder="Enter the Password" name="password"
                        required>
                </div>
                <?php include("./procesar.php") ?>
                <div class="boton">
                    <input class="miInputB" type="submit" id="" value="Sign in" name="send">
                </div>
            </div>


    </form>
</body>

</html>