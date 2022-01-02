<?php
    class bookCtrl{
        function getAll(){
            include_once 'app/view/book/book_view.php';
        }
    }
    $book = new bookCtrl();
    $method = isset($_GET['method'])? $_GET['method']: 'getAll';
    $book->$method();