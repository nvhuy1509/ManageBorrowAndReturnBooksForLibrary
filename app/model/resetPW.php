<?php
class Reset
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

    function getAll($table)
    {
        $sql = "select * from " . $table . " where reset_password_token != '0' ";
        $query =  mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row =  mysqli_fetch_assoc($query)) {
            $result[] = $row;
        }

        return $result;
    } 
    function setTokenPW($table, $user_login)
    {
        $microtime = microtime();
        $sql = "update " . $table . "  SET reset_password_token='".$microtime."' where login_id = '$user_login'";
        $query =  mysqli_query($this->__conn, $sql);
    }
    
    function UpdatePW($table, $user_login, $newpw)
    {
        $newpassword = md5($newpw);
        $sql = "update " . $table . "  SET password= '".$newpassword."',reset_password_token = '0'  where login_id = '".$user_login."' ";
        $query =  mysqli_query($this->__conn, $sql);
    }

    function checkLogin_id($table, $user_login)
    {
        $sql = "    SELECT 1  FROM `admins` WHERE login_id = '".$user_login."'";
        $query =  mysqli_query($this->__conn, $sql);
        $checked =  mysqli_fetch_assoc($query);
       
        return $checked;
        
    }

}
