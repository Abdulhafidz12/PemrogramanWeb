<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Halaman Home</title>
    <style>
        body {
            background-image: url(img/bannerweb2.jpg);
            background-attachment: fixed;
            background-size: cover;
        }
        .logo {
            padding-top: 35px;
            padding-bottom: 35px;
        }
        .container{
            justify-items: center;
            margin-top: 50px;
        }
        .input {
            width: 350px;
            height: 380px;
            background-color: aliceblue;
            border: 2px solid black;
            text-align: center;
            padding-bottom: 20px;
        }
        .email {
            padding-top: 20px;
            padding-bottom: 5px;
        }
        .pw {
            padding-bottom: 5px;
        }
        button {
            margin-bottom: 25px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="input">
            <img class="logo" src="img/LOGOBOC2.png" alt="">
            <form action="backend/login.php" method="POST">
                <div class="email">
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="pw">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

</body>
</html>