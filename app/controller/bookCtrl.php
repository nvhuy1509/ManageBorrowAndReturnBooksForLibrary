<?php
include_once "../common/define.php";
include_once '../view/header&footer/head_view.php';
    class bookCtrl{
        function getAll(){
            include_once '../view/book/book_view.php';
        }
    }
    $book = new bookCtrl();
    $method = isset($_GET['method'])? $_GET['method']: 'getAll';
    $book->$method();

    include_once '../view/header&footer/footer_view.php';