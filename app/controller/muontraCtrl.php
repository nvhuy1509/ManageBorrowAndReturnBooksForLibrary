<?php

    class MuontraCtrl{
        function getAll(){
            include_once "app/model/book_transactions.php";
            $getTransaction = new book_transactions();
            $book = "";
            $user = "";
            $status = "";
            $overdue = "";
            if(isset( $_GET['search-book'])){
                $book =$_GET['search-book'];
            }
            if(isset( $_GET['search-user'])) {
                $user =$_GET['search-user'];
            }
            if(isset( $_GET['search-status'])){
                $status =$_GET['search-status'];
            }
            if(isset( $_GET['search-overdue'])) {
                $overdue =$_GET['search-overdue'];
            } 
            $row = $getTransaction->getAdvanceSearch($book, $user, $status, $overdue);
            $result_book = $getTransaction->GetBook();
            $result_user = $getTransaction->GetUser();
            $status = array("Đang mượn", "Đã trả", "Qúa hạn");
            $overdue_day = array("Dưới 1 ngày", "Từ 1-5 ngày", "Từ 5-10 ngày", "Qúa 10 ngày");
            include_once 'app/view/muontra_view.php';
        }
    }
    $muontra = new MuontraCtrl();
    $method = $_GET['method'];
    $muontra->$method();

