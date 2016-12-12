<?php
session_start();
require_once('../DB/DB.php');
require_once('../functions/functions.php');
require_once('../model/Authorizer.php');

/*

$user[] = [
    'action' => 'login',
    'user_id' => 2,
    'username' => "Viktor",
    'time' => '11/11/2017 12:12:12'
];

$user[] = [
    'action' => 'register',
    'user_id' => 10,
    'username' => "Alex",
    'time' => '01/12/2016 22:10:02'
];
echo json_encode($user);

die();
*/
$action = empty($_GET['action']) ? 'login' : $_GET['action'];

switch($action)
{
    case 'login':
        if(!empty($_POST)) {

            Authorizer::auth();

            $name = $_POST['login'];
            $pass = $_POST['pass'];
            if (loginUser($name, $pass)){
                header("Location: http://localhost?action=main");
            }
            die ('NULL');
        } else {
            echo getLoginForm();
        }
        break;
    case 'register':
        if(!empty($_POST)) {
           $name = $_POST['login'];
            $pass = $_POST['pass'];
            if (registerUser($name, $pass)){
                header("Location: http://localhost?action=login");
            }
            die('USER ALREADY EXISTS');
        } else {
            echo getRegisterForm();
        }
        break;
    case 'logout':
        logout();
        exit;
        break;
    case 'main':
        if(isset($_SESSION['auth'])){
            die('success auth<br><a href="http://localhost?action=logout">LOGOUT</a>');
        }
        die('Access denied, please login');
        break;
    default:
        die("action does not exists");
        break;
}

