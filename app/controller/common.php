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
        case 'library_search':
            include_once 'library_search.php';
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
        case 'ledger': // sổ cái
            include_once 'ledgerCtrl.php';
            break;
    }
}
include_once 'app/view/header&footer/footer_view.php';
