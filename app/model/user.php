<?php
class User
{
    private $__conn;
    private $type = array(
        1 => 'Student',
        2 => 'Teacher'
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
            foreach ($this->type as $key => $value) {
                if ($row['type'] == $key) {
                    $row['type'] = $value;
                }
            }
            $result[] = $row;
        }

        return $result;
    }
    function getSingle($table, $id)
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
        mysqli_query($this->__conn, $sql);
    }

    function Add($table, $data)
    {
        $sql    = "";
        $keys   = "";
        $values = "";
        foreach ($data as $key => $value) {
            $keys .= ($key).', ';
            $values .= ("'".$value."'").', ';
        }
        $keys = rtrim($keys, ', ');
        $values = rtrim($values, ', ');

        $sql = "INSERT INTO " .$table. ' ('.$keys.')'. "VALUES" . ' ('.$values.')';
        if (mysqli_query($this->__conn, $sql)) {
            return true;
        } else {
            // return false;
            return "Error: " . $sql . "<br>" . mysqli_error($this->__conn);
        }
    }
}
