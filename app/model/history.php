<?php
    class History{
        private $__conn;
    
        function __construct() {
            include_once "app/common/database.php";
            if (!isset($this->__conn)){
                $connect = new DB();
                $this->__conn = $connect->getInstance();
            }
        }

        function getAll($table){
            $sql = "select * from ".$table;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
         
                $result[] = $row;
            }
            
            return $result;
        }

        function getSearch($book, $user){
            $sql = "select * from book_transactions where user_id = '.$user.' and book_id = '.$book.'" ;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
         
                $result[] = $row;
            }
            // var_dump($result);
            return $result;
        }

        function getDataBook($book, $user) {
            $sql = "select books.name as book_name, (select count(*) from book_transactions,books where book_transactions.book_id='.$book.' and books.id=book_transactions.book_id) as count, book_transactions.borrowed_date, book_transactions.return_plan_date,
            book_transactions.return_actual_date,users.name as user_name
            from users,book_transactions,books where  book_transactions.user_id= '.$user.' and book_transactions.book_id='.$book.' and books.id=book_transactions.book_id and  users.id=book_transactions.user_id" ;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
         
                $result[] = $row;
            }
            // var_dump($result);
            return $result;
        }
    }