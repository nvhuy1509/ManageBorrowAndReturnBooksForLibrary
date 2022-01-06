<?php
include_once "app/common/define.php";
include_once "app/model/admin.php";
class LoginCtrl{
    function login(){
        include_once 'app/view/login_view.php';
        session_start();
        $errors = array(); 
        // check if user submit form
        if (isset($_POST["btn_submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            // delete html tag, symbol, ...
            $username = strip_tags($username);
            $username = addslashes($username);
            $password = strip_tags($password);
            $password = addslashes($password);
            if ($username == "") {
                array_push($errors, "Hãy nhập login id");
            }
            else if (strlen($username) < 4) {
                array_push($errors, "Hãy nhập login id tối thiểu 4 ký tự!");
            };
            if ($password =="") {
                array_push($errors, "Hãy nhập password!");
            }
            else if (strlen($password) < 6) {
                array_push($errors, "Hãy nhập password tối thiểu 6 ký tự!");
            }else{
                $getAdmin = new Admin();
                $num_rows = $getAdmin->GetSingle($username, $password);
                if ($num_rows==0) {
                    array_push($errors, "login id hoặc password không đúng!");
                }else{
		            // save username into session
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                }
            }
        }
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<span style='color: red;'>$error</span><br>";
            }
        }
    }
}
$method = isset($_GET['dn'])?$_GET['dn']:'login';
$home = new LoginCtrl();
$home->$method();
