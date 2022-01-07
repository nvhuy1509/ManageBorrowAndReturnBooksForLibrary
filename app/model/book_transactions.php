<?php
class book_transactions
{
    private $__conn;
   
    function __construct()
    {
        include_once "app/common/database.php";
        if (!isset($this->__conn)) {
            $connect = new DB();
            $this->__conn = $connect->getInstance();
        }
    }
    function getAll($user_id, $book_id)
    {
        // $sql = "select * from ".$table;
        $sql = "SELECT bk.id, bk.description , b.name as bookname ,us.name ,bk.return_plan_date ,bk.return_actual_date 
        FROM book_transactions as bk 
        INNER JOIN users AS us ON bk.user_id = us.id 
        INNER JOIN books AS b ON b.id = bk.book_id 
        Where  (b.id= $book_id or $book_id =-1 )
        and (us.id= $user_id or $user_id=-1 )";


        $query =  mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row =  mysqli_fetch_assoc($query)) {
            $result[] = $row;
        }

        return $result;
    }
    function getCommonData($table)
    {
        $sql = "select * from " . $table;
        $query =  mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row =  mysqli_fetch_assoc($query)) {
            $result[] = $row;
        }

        return $result;
    }
    function Update($id)
    {
        $sql = "update book_transactions set return_actual_date= NOW() where id =$id ";
        mysqli_query($this->__conn, $sql);
    }
}
