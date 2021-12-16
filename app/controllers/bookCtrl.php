<?php
    class bookCtrl{
        function getAll(){
            include_once 'app/views/book/book_view.php';
        }
    }
    $sach = new bookCtrl();
    $method = isset($_GET['method'])? $_GET['method']: 'getAll';
    $sach->$method();