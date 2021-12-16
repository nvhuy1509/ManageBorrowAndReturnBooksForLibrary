<?php
include_once "app/common/define.php";
class LoginCtrl{
    function Login(){
        include_once 'app/views/login_view.php';
    }
}
$method = isset($_GET['dn'])?$_GET['dn']:'login';
$home = new LoginCtrl();
$home->$method();
