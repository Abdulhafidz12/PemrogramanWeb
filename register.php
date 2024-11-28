<?php 
session_start();

// Periksa apakah sesi 'role' diatur dan apakah pengguna memiliki peran 'user'
if (isset($_SESSION["role"])) {
    // Jika tidak, arahkan ke index.php
    header('Location: index.php');
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Styling untuk body */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(160deg, #35A5B1, #2A757D); /* Gradien untuk latar belakang */
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container untuk form register */
        .register-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 450px;
        }

        /* Judul Register */
        .register-container h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #fff;
        }

        /* Styling untuk input */
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 16px;
            outline: none;
            transition: background 0.3s;
        }

        .register-container input:focus {
            background: rgba(255, 255, 255, 0.3);
        }

        /* Tombol Submit */
        .register-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            background: #ff5f6d;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .register-container input[type="submit"]:hover {
            background: #ff3030;
        }

        /* Teks tambahan */
        .register-container p {
            margin-top: 15px;
            font-size: 14px;
            color: #ddd;
        }

        .register-container p a {
            color: white;
            text-decoration: none;
        }

        .register-container p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        <form action="./backend/register.php" method="post">
            <input type="text" name="name" placeholder="Masukkan nama anda" required>
            <input type="email" name="email" placeholder="Masukkan email anda" required>
            <input type="password" name="password" placeholder="Masukkan password anda" required>
            <input type="password" name="confirm" placeholder="Masukkan konfirmasi password anda" required>
            <input type="submit" value="Register" name="submit">
        </form>
        <p>Sudah punya akun? <a href="index.php">Login di sini</a></p>
    </div>
</body>
</html>
