<?php
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
    function getAll($table, $name = '', $cate = 0)
    {
        $sql = "select * from " . $table . " where name like '%" . $name . "%'";
        if (isset($cate) && $cate != 0) {
            $sql .= "and category = " . $cate;
        }
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

        return $result;
    }


    function getDetailBook($table, $id)
    {
        $sql = "select * from " . $table . " where id=" . $id;
        $query =  mysqli_query($this->__conn, $sql);
        $row =  mysqli_fetch_assoc($query);

        return $row;
    }

    function addBook($table, $name, $category, $author, $quantity, $description, $avatar)
    {
        $sql = "INSERT INTO " . $table . " (name, category, author, quantity, description, avatar)
             values('$name', '$category', '$author', '$quantity', '$description', '$avatar')";
        mysqli_query($this->__conn, $sql);
        $last_id = $this->__conn->insert_id;

        return $last_id;
    }

    function DeleteBook($table, $id)
    {
        $delete = "delete from " . $table . " where id=" . $id;
        $querydelete =  mysqli_query($this->__conn, $delete);
        $sql = "select * from " . $table . "";
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

        return $result;
    }
}
