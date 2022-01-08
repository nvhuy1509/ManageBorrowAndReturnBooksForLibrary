<?php
    session_start();
    include_once "app/common/define.php";
    include_once 'app/view/head_view.php';
    if(!isset($_GET['url'])){
        include_once 'bookCtrl.php';
    }
    else {
        $url=$_GET['url'];
        switch ($url)
        {
            case 'book':
                include_once 'bookCtrl.php';
                break;
            case 'user':
                include_once 'userCtrl.php';
                break;
            case 'muontra':
                include_once 'muontraCtrl.php';
                break;
        }
    }
    include_once 'app/view/footer_view.php';