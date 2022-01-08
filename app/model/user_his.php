<?php
include "../common/db.php";

//  Lấy ra danh sách người dùng
function get_user() 
{
    global $conn;
    $sql = "SELECT * FROM users";
    $statement = $conn->prepare($sql);

   
    $statement -> execute();
    $list_user = $statement -> fetchAll(PDO::FETCH_ASSOC);
    // print_r ($list_user); // check value  
    return $list_user;
}


?>