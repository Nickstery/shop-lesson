<?php

function getLoginForm()
{
    return '
    <h1>Login</h1>
    <form action="http://localhost?action=login" method="POST">
        <input type="text" name="login"><br>
        <input type="password" name="pass"><br>
        <input type="submit" value="Login"><br>
    </form>
    ';
}

function getRegisterForm()
{
    return '
    <h1>Register</h1>
    <form action="http://localhost?action=register" method="POST">
        <input type="text" name="login"><br>
        <input type="password" name="pass"><br>
        <input type="submit" value="Register"><br>
    </form>
    ';
}

function loginUser($login, $pass)
{
    $conn = DB::getConnection();
    $conn->query('SELECT * FROM `users` WHERE `login` = "'.$login.'" AND `pass` = "'.$pass.'" LIMIT 1');
    if ($conn->affected_rows === 1) {
        $_SESSION['auth'] = 1;
        //Session::setUser(....);
        return true;
    }
    return false;
}

function registerUser($login, $pass)
{
    $conn = DB::getConnection();
    $conn->query('SELECT * FROM `users` WHERE `login` = "'.$login.'"');
    if ($conn->affected_rows === 0) {
        $conn->query('INSERT INTO `users` (login, pass) VALUES ("' . $login . '","' . $pass . '")');
        return true;
    }
    return false;
}

function logout(){
    unset($_SESSION['auth']);
    header('Location: http://localhost');
}