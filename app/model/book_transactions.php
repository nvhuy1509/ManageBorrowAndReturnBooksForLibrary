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

    function getAdvanceSearch($book, $user, $status, $overdue){
        $sql = "SELECT b.name as 'ten_sach', u.name as 'nguoi_dung', timestampdiff(HOUR,CURRENT_TIMESTAMP, t.return_plan_date)  as time,
                CASE 
                    WHEN DATEDIFF(t.return_plan_date, CURRENT_TIMESTAMP) >= 0  AND t.return_actual_date is null THEN 'Đang mượn' 
                    WHEN DATEDIFF(t.return_plan_date, CURRENT_TIMESTAMP) < 0 AND t.return_actual_date is null THEN 'Quá hạn'
                    WHEN t.return_actual_date is not null THEN 'Ðã trả' 
                END as 'status',
                CASE 
                    WHEN DATEDIFF(CURRENT_TIMESTAMP, t.return_plan_date) > 0 THEN DATEDIFF(CURRENT_TIMESTAMP, t.return_plan_date)
                    ELSE 0 
                END as 'delay'
            from book_transactions t, users u, books b 
            WHERE t.book_id = b.id and t.user_id = u.user_id";
            
            if($book != ""){
                $sql = $sql." and b.name = '".$book."'";
            }

            if($user != ""){
                $sql = $sql." and u.name = '".$user."'";
            }

            $conditionStatus = "";

            if($status != "" && $status == "Đang mượn"){
                $conditionStatus = " and DATEDIFF(t.return_plan_date, CURRENT_TIMESTAMP) >= 0  AND t.return_actual_date is null";
            }

            if($status != "" && $status == "Qúa hạn"){
                $conditionStatus = " and DATEDIFF(t.return_plan_date, CURRENT_TIMESTAMP) < 0 AND t.return_actual_date is null";
            }

            if($status != "" && $status == "Đã trả"){
                $conditionStatus = " and t.return_actual_date is not null";
            }
            
            $sql = $sql.$conditionStatus;

            $conditionOverdue = "";

            if($overdue != "" && $overdue == "Dưới 1 ngày"){
                $conditionOverdue = " and timestampdiff(HOUR,t.return_plan_date, CURRENT_TIMESTAMP) < 24  
                                      and timestampdiff(HOUR,t.return_plan_date, CURRENT_TIMESTAMP) > 0
                                      and t.return_actual_date is null";
            }

            if($overdue != "" && $overdue == "Từ 1-5 ngày"){
                $conditionOverdue = " and timestampdiff(HOUR,t.return_plan_date, CURRENT_TIMESTAMP) >= 48  
                                      and timestampdiff(HOUR,t.return_plan_date, CURRENT_TIMESTAMP) < 120
                                      and t.return_actual_date is null";
            }
            if($overdue != "" && $overdue == "Từ 5-10 ngày"){
                $conditionOverdue = " and timestampdiff(HOUR,t.return_plan_date, CURRENT_TIMESTAMP) >= 144  
                                      and timestampdiff(HOUR,t.return_plan_date, CURRENT_TIMESTAMP) < 240
                                      and t.return_actual_date is null";
            }
            if($overdue != "" && $overdue == "Qúa 10 ngày"){
                $conditionOverdue = " and timestampdiff(HOUR,t.return_plan_date, CURRENT_TIMESTAMP) > 240 
                                      and t.return_actual_date is null";
            }

            $sql = $sql.$conditionOverdue;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            
            return $result;
    }

    function getBook(){
        $sql = "SELECT * from books";
        $query =  mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row =  mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
        
        return $result;
    }

    function getUser(){
        $sql = "SELECT * from users";
        $query =  mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row =  mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
        
        return $result;
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
