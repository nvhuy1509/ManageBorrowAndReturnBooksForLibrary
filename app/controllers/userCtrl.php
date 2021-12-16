<?php
    class UserCtrl{
        function getAll(){
            include_once 'app/views/user/user_view.php';
        }
    }
    $sach = new UserCtrl();
    $method = isset($_GET['method'])? $_GET['method']: 'getAll';
    $sach->$method();