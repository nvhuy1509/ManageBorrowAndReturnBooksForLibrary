<?php
// class Book{
//     private $__conn;
//     private $category = array(
//         1 => 'Khoa học',
//         2 => 'Tiểu thuyết',
//         3 => 'Manga',
//         4 => 'Sách giáo khoa'
//     );
//     function __construct() {
//         include_once "app/common/database.php";
//         if (!isset($this->__conn)){
//             $connect = new DB();
//             $this->__conn = $connect->getInstance();
//         }
//     }
//     function getAll($table){
//         $sql = "select * from ".$table;
//         $query =  mysqli_query($this->__conn, $sql);
//         $result = array();
//         while ($row =  mysqli_fetch_assoc($query)){
//             foreach($this->category as $key=>$value){
//                 if($row['category']==$key){
//                     $row['category']=$value;
//                 }
//             }
//             $result[] = $row;
//         }

//         return $result;
//     }
//     function getSingle($table,$id){
//         $sql = "select * from ".$table." where id=".$id;
//         $query =  mysqli_query($this->__conn, $sql);
//         $row =  mysqli_fetch_assoc($query);

//         return $row;
//     }
//     function Update($table,$data,$id_table,$id){
//         $sql = "";
//         foreach($data as $keys => $values){
//             $sql .= $keys."='".$values."',";                 
//         }	
//         $sql="update ".$table." set ".rtrim($sql,',')." where ".$id_table."=".$id;
//         var_dump($sql);
//         mysqli_query($this->__conn, $sql);
//         // echo $id;
//         // var_dump($data); die();
// }
// }

class Book
{
    private $__conn;
    private $category = array(
        1 => 'Khoa học',
        2 => 'Tiểu thuyết',
        3 => 'Manga',
        4 => 'Sách giáo khoa'
    );
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
        $sql = "select * from " . $table;
        $query =  mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row =  mysqli_fetch_assoc($query)) {
            foreach ($this->category as $key => $value) {
                if ($row['category'] == $key) {
                    $row['category'] = $value;
                }
            }
            $result[] = $row;
        }
        //var_dump($row);
        return $result;
    }
    function getDataWithCate($table, $category, $name)
    {
        $sql = "select * from " . $table . " where category = " . $category . "and name like " . $name;
        $query =  mysqli_query($this->__conn, $sql);
        $row =  mysqli_fetch_assoc($query);

        return $row;
    }

    function getDataNoCate($table, $name)
    {
        $sql = "select * from " . $table . " where name like " . $name;
        $query =  mysqli_query($this->__conn, $sql);
        $row =  mysqli_fetch_assoc($query);

        return $row;
    }
    function getDetailBook($table, $id)
    {
        $sql = "select * from " . $table . " where id=" . $id;
        $query =  mysqli_query($this->__conn, $sql);
        $row =  mysqli_fetch_assoc($query);

        return $row;
    }
    function Update($table, $data, $id_table, $id)
    {
        $sql = "";
        foreach ($data as $keys => $values) {
            $sql .= $keys . "='" . $values . "',";
        }
        $sql = "update " . $table . " set " . rtrim($sql, ',') . " where " . $id_table . "=" . $id;
        //var_dump($sql);
        mysqli_query($this->__conn, $sql);
        // echo $id;
        // var_dump($data); die();
    }
    function getSingle($table, $id)
    {
        $sql = "select * from " . $table . " where id=" . $id;
        $query =  mysqli_query($this->__conn, $sql);
        $row =  mysqli_fetch_assoc($query);

        return $row;
    }
}
