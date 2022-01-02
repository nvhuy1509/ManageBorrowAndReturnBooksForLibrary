<?php
    session_start();
    include_once "app/common/define.php";
    include_once 'app/view/header&footer/head_view.php';
    if(!isset($_GET['url'])){
        include_once 'bookCtrl.php';
    }
    else {
        $url=$_GET['url'];
        switch ($url)
        {
            // quản lý sách
            case 'book':
                include_once 'bookCtrl.php';
                break;
            // quản lý người dùng
            case 'user':
                include_once 'userCtrl.php';
                break;
            case 'library_edit':
                include_once 'library_edit.php';
                break;
            // quản lý mượn trả sách
            case 'muontra':
                include_once 'muontraCtrl.php';
                break;

        }
    }
    include_once 'app/view/header&footer/footer_view.php';