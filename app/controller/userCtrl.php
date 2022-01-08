<?php
    class UserCtrl{
        function getAll(){
            include_once "app/model/user.php";
            $getUser = new User();
            $row = $getUser->GetAll("users");
            include_once 'app/view/user/user_view.php';
        }
    }

    $user = new UserCtrl();
    $method = isset($_GET['method'])? $_GET['method']: 'getAll';
    $user->$method();