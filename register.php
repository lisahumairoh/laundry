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
            background-color: #eee;
        }
        .form-login{
            margin-top: 100px;
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
        .form-login #tmbdaftar{
            background-color: #ffb993;
            border: none;
            padding: 7px;   
            color: #fff;
            border-radius: 5px;
            width: 100px;
            height: 30px;
        }
        .form-login h2{
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
        <br><br><br><br>
    <div class="form-login">
        <center>
        <form action="function_register.php" method="POST">
            <br>
        <h2>Regis</h2>
        <table border="0">
        <tr>
        <div class="input">
            <td><label for="">Username</label></td>
            <td><input type="text" name="username" id="username"></td>
        </div>
        </tr>
        <tr>
        <div class="input">
            <td><label for="">Password</label></td>
            <td><input type="password" name="pass" id="pass"></td>
        </div>
        <tr>
        <div class="input">
            <td><label for="">Nama</label></td>
            <td><input type="text" name="nama" id="nama"></td>
        </div>
        </tr>
        <tr>
        <div class="input">
            <td><label for="">Alamat</label></td>
            <td><input type="text" name="alamat" id="alamat"></td>
        </div>
        </tr>
        <tr>
        <div class="input">
            <td><label for="">No telp/hp</label></td>
            <td><input type="text" name="no_telp" id="no_telp"></td>
        </div>
        </tr>
        <tr>
        <div class="input">
            <td><label for="">Email</label></td>
            <td><input type="text" name="email" id="email"></td>
        </div>
        </tr>
        <br>
        <tr>
            <div class="input">
                <td colspan="2">
                <center>
                    <input id="tmbdaftar" type="submit" value="regis">    
                </center>
                </td>
            </div>
        </tr>
        <br>
        <tr>
            <td colspan="2">
                <center>
                <a href="login.php">Sudah punya akun?</a>
                </center>
            </td>
        </tr>
        </table>
        <br>

        </form>
        </center>
    </div>
    </div>
</body>
</html>