<?php
    require_once "../model/user_his.php";
    require_once "../model/book_his.php";

    $list_user = get_user();
    $list_books = [];
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if(isset($book_name) || isset($_GET['user_id'])){
            if(isset($_GET['book_name'])){
                $book_name = $_GET['book_name'];
            }
            if(isset($_GET['user_id'])){
                $user_id = $_GET['user_id'];
            }
            $list_books = search_user_borrow($book_name, $user_id);
        }
    }
    require_once "../view/history/user_view.php";

    function formatDate($date)
    {
        $date = date('Y-m-d h:i:s', strtotime($date));
        $new_date = date('h:i d/m/Y', strtotime($date));
        return $new_date;
    }
?>