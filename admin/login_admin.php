<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #eee;

        }
        .form-login{
            position: relative;
            display: inline-block;
            width: 400px;
            height: 400px;
        }
        .form-login form{
            background-color: #fff;
            border-radius: 10px;
        }
        .form-login, input{
            margin: 3px;
            height: 25px;
        }
        .form-login #tmblogin{
            background-color: #ffb993;
            border-radius: 5px;
            border: none;
            padding: 7px;   
            width: 100px;
            height: 30px;
            color: #fff;
        }
        .form-login h2,label,input{
            text-align: center;
        }
        .form-login form a{
            text-decoration: none;
            color: #ffb993;
        }
    </style>
</head>
<body>
    <div class="container-login">
    <div class="form-login">
        <center>
        <form action="function_login_admin.php" method="POST">
        <br>
        <h2>Login admin</h2>
        <br><br>
        <div class="input">
            <label for="">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="input">
            <label for="">Password</label>
            <input type="password" name="pass" id="pass">
        </div>
        <br>
        <div class="input">
            <input id="tmblogin" type="submit" value="Login">
        </div>
        <br><br>
        </form>
        </center>
    </div>
    </div>
</body>
</html>