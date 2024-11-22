<html>
<head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        .header i {
            font-size: 24px;
        }
        .header .title {
            font-size: 24px;
            font-weight: 700;
        }
        .names {
            font-family: 'Great Vibes', cursive;
            font-size: 48px;
            margin: 20px 0;
        }
        .login-box {
            background-color: #f0f0f0;
            padding: 40px;
            border-radius: 10px;
            display: inline-block;
            text-align: left;
        }
        .login-box h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .login-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
            background-color: #ccc;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <i class="fas fa-home"></i>
            <div class="title">GUESTBOOK</div>
            <i class="fas fa-user"></i>
        </div>
        <div class="names">
            Dhani<br>&<br>Rose
        </div>
        <div class="login-box">
            <h2>Log In</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Guest/Admin Code">
            <button>Log In</button>
            <?php
            header("Location: welcome-admin.php");
            ?>
        </div>
    </div>
</body>
</html>