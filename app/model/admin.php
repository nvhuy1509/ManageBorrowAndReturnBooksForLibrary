<?php
    class Admin{
        private $__conn;
        function __construct() {
            include_once "app/common/database.php";
            if (!isset($this->__conn)){
                $connect = new DB();
                $this->__conn = $connect->getInstance();
            }
        }
        function getSingle($username, $password){
            $sql = "select * from admins where login_id = '".$username."' and password = '".md5($password)."'";
            $query =  mysqli_query($this->__conn, $sql);
            $num_rows = mysqli_num_rows($query);
          
            return $num_rows;
        }
	}