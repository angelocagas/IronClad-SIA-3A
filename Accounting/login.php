<?php

include 'connect.php';

session_start();

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $username = filter_var($username);
    $pass = ($_POST['pass']);
    $pass = filter_var($pass);

    $select = $conn->prepare("SELECT * FROM `users` WHERE username = ? AND password = ?");
    $select->execute([$username, $pass]);
    $row = $select->fetch(PDO::FETCH_ASSOC);

    if ($select->rowCount() > 0) {

        if ($row['role'] == 'admin') {

            $_SESSION['admin'] = $row['id'];
            $auditlogin = $conn->prepare("INSERT INTO `audit`(role, username, action) VALUES(?,?,?)");
            $auditlogin->execute(["admin", $row['username'], "login"]);
            header('location:dashboard.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login - Ironclad Rentals </title>
        <link rel="icon" type="image/png" href="logo.png">
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
        body {
            font-family: 'Public Sans', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f8f8;
            background: linear-gradient(135deg, #f8f8f8 0%, #ebedf1 100%);
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h2 {
            text-align: center;
            color: #696CFF;
            font-size: 28px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-label {
            font-size: 18px;
            color: #697A8D;
            margin-bottom: 8px;
            display: block;

        }

        .form-control {
            width: 95%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
            color: #697A8D;
        }

        .form-control:focus {
            outline: none;
            border-color: #696CFF;
        }

        .password-container {
            position: relative;

        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #697A8D;
        }

        .toggle-password i {
            font-size: 15px;
            margin-top: 30px;
        }

        .toggle-password.active i::before {
            content: "\f070";
        }

        .btn {
            background-color: #696CFF;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn:hover {
            background-color: #5759d6;
        }

        .forgot-password {
            margin-top: 10px;
            text-align: right;
            font-size: 16px;
            color: #697A8D;
        }

        .forgot-password a {
            color: #696CFF;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;


            margin-bottom: 30px;
        }

        .logo img {
            max-width: 200px;
            height: auto;
        }
        </style>
    </head>

    <body>

        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            <h2>Login to Ironclad Rentals</h2>
            <form id="formAuthentication" method="POST">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control"
                        placeholder="Enter your username" required>
                </div>
                <div class="form-group password-container">
                    <label for="pass" class="form-label">Password</label>
                    <div class="password-input-container">
                        <input type="password" name="pass" id="password" class="form-control"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            required>
                        <span class="toggle-password">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn">Login</button>
            </form>
            <div class="forgot-password">
                <a href="loginforget.php">Forgot Password?</a>
            </div>
        </div>

        <script>
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute('type', type);

            if (this.classList.contains("active")) {
                this.innerHTML = '<i class="fas fa-eye"></i>';
                this.classList.remove("active");
            } else {
                this.innerHTML = '<i class="fas fa-eye-slash"></i>';
                this.classList.add("active");
            }
        });
        </script>
    </body>

</html>
