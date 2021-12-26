<?php
include_once "../common/define.php";
include_once '../view/header&footer/head_view.php';
    class UserCtrl{
        function getAll(){
            include_once '../view/user/user_view.php';
        }
        function edit_user(){
            include_once '../controller/library_edit.php';
            $edit = new Library_edit();
            $edit->edit_user();
        }
        function edit_user_confirm(){
            include_once '../view/user/user_add_confirm.php';
        }
    }
    $user = new UserCtrl();
    $method = isset($_GET['method'])? $_GET['method']: 'getAll';
    $user->$method();
    include_once '../view/header&footer/footer_view.php';