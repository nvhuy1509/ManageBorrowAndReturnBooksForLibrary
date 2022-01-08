<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

include_once "app/common/define.php";
include_once 'app/view/header&footer/head_view.php';
if (!isset($_GET['url'])) {
    include_once 'bookCtrl.php';
} else {
    $url = $_GET['url'];
    switch ($url) {

            // quản lý sách
        case 'book':
            include_once 'bookCtrl.php';
            break;
        case 'library_edit_book':
            include_once 'library_edit.php';

        // quản lý sách
        case 'library_search':
            include_once 'library_search.php';
            break;
        case 'library_add':
            include_once 'library_add.php';

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
        //Lịch sử mượn sách
        case 'history':
             include_once 'historyCtrl.php';
             break;
        case 'ledger': // sổ cái
             include_once 'ledgerCtrl.php';
             break;
    }
}
include_once 'app/view/header&footer/footer_view.php';

