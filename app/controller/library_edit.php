<?php
class Library_edit
{

    function edit_book_input()
    {
        //validate
        include_once 'app/model/book.php';
        $category = array(
            1 => 'Khoa học',
            2 => 'Tiểu thuyết',
            3 => 'Manga',
            4 => 'Sách giáo khoa'
        );
        $id = (int)$_GET['id'];
        $error = array();
        if (isset($_POST['btn_update'])) {
            if (empty($_POST['book_name'])) {
                $error['book_name'] = "Hãy nhập tên sách";
            } else {
                if (strlen($_POST['book_name']) > 100) {
                    $error['book_name'] = "Tên sách nhỏ hơn 100 kí tự";
                } else {
                    $book_name = $_POST['book_name'];
                }
            }
            if (empty($_POST['book_category'])) {
                $error['book_category'] = "Hãy chọn thể loại";
            } else {

                $book_category = $_POST['book_category'];
            }
            if (empty($_POST['book_author'])) {
                $error['book_author'] = "Hãy nhập tên tác giả";
            } else {
                if (strlen($_POST['book_author']) > 250) {
                    $error['book_author'] = "Tên tác giả nhỏ hơn 250 kí tự";
                } else {
                    $book_author = $_POST['book_author'];
                }
            }
            if (empty($_POST['book_quantity'])) {
                $error['book_quantity'] = "Hãy nhập số lượng";
            } else {
                if (strlen($_POST['book_quantity']) > 100) {
                    $error['book_quantity'] = "Số lượng nhỏ hơn 100";
                } else {
                    $book_quantity = $_POST['book_quantity'];
                }
            }
            if (empty($_POST['book_description'])) {
                $error['book_description'] = "Hãy nhập mô tả chi tiết";
            } else {
                if (strlen($_POST['book_description']) > 1000) {
                    $error['book_description'] = "Mô tả nhỏ hơn 1000 kí tự";
                } else {
                    $book_description = $_POST['book_description'];
                }
            }
            $upload_dir = "web/avatar/tmp/";

            $upload_file = $upload_dir . basename($_FILES['file']['name']);
            //$_SESSION['avatar'] = $_FILES['file']['name'];

            $type_allow = array('png', 'jpg', 'jpeg', 'gif');
            $type_file = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if(isset($_GET['back'])) {
                if (file_exists('web/avatar/tmp/'.$_POST['abc'])) {
                    $type_file = pathinfo($_POST['abc'], PATHINFO_EXTENSION);
                }
                else{
                    $type_file = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                }
                
            }
            else{
                if ((!file_exists($_FILES["file"]["tmp_name"]))) {
                    $error['type'] = "Hãy chọn ảnh";
                } else if (!in_array(strtolower($type_file), $type_allow)) {
                    $error['type'] = "File không thích hợp";
                }
            }
           
            if (empty($error)) {
                move_uploaded_file($_FILES['file']['tmp_name'], "web/avatar/tmp/" . $_FILES['file']['name']);
                $_SESSION['book_name'] = $book_name;
                $_SESSION['book_category'] = $book_category;
                $_SESSION['book_author'] = $book_author;
                $_SESSION['book_description'] = $book_description;
                $_SESSION['book_quantity'] = $book_quantity;
                // $_SESSION['tmp_name'] = $_FILES["file"]["tmp_name"];
                $_SESSION['book_avatar'] = $_FILES["file"]["name"];
                
                header("Location: ?url=library_edit_book&method=edit_book_confirm&id=$id");
            }
        }
        include_once "app/view/book/book_update_input.php";
    }

    function edit_book_confirm()
    {

        include_once "app/model/book.php";
        $id = $_GET['id'];

        $name =  $_SESSION['book_name'];
        $author =  $_SESSION['book_author'];
        $type = $_SESSION['book_category'];
        $quantity = $_SESSION['book_quantity'];
        $description = $_SESSION['book_description'];
        $file_name =  $_SESSION['book_avatar'];

        include_once 'app/view/book/book_update_confirm.php';
    }
    function edit_book_complete()
    {

        include_once "app/model/book.php";
        $id = $_GET['id'];
        $test = new Book();

        if (isset($_POST['btn_confirm'])) {
            // $book = edit_book();
            $name = $_POST['book_name'];
            $author = $_POST['book_author'];
            $category = $_POST['book_category'];
            $quantity = $_POST['book_quantity'];
            $description = $_POST['book_description'];
            $file_name = $_POST['file'];

            if (!is_dir("web/avatar/" . $id . "/")) {
                mkdir("web/avatar/" . $id . "/");
            }

            $getBook = new Book();
            $row = $getBook->getSingle("books", $id);
            //var_dump($row);
            if ($row['avatar'] != $file_name) {
                unlink("web/avatar/" . $id . "/" . $row['avatar']);
            }

            rename('web/avatar/tmp/' . $file_name, "web/avatar/" . $id . "/" . $file_name);
            $book = array(
                'name' => $name,
                'category' => $category,
                'author' => $author,
                'quantity' => $quantity,
                'avatar' => $file_name,
                'description' => $description,
            );
            $test = new Book();
            $test->Update('books', $book, 'id', $id);
        }
        session_destroy();
        $dir = 'web/avatar/tmp/';
        foreach (glob($dir . '*.*') as $v) {
            unlink($v);
        }
        include_once 'app/view/book/book_update_complete.php';
    }

    // quản lý người dùng-> sửa
    function view_edit_input()
    {
        
        $id = $_GET['id'];
        include_once "app/model/user.php";
        $getUser = new User();
        $data = $getUser->getAll("users");
        $row = $getUser->GetSingle("users", $id);
        $arr_type = array(
            1 => 'student',
            2 => 'teacher'
        );
       
        if(!isset($_GET['back'])){
            $_SESSION['user_name']=$row['name'];
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION['user_type']=$row['type'];
            $_SESSION['avatar']=$row['avatar'];
            $_SESSION['description']=$row['description'];
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $error = array();
            if (empty($_POST['user_name'])) {
                $error['user_name'] = "Hãy nhập họ và tên";
                $_SESSION['user_name']=$_POST['user_name'];
            } else {
                if (strlen($_POST['user_name']) >100 ) {
                    $error['user_name'] = "Tên nhỏ hơn 100 kí tự";
                } else {
                    $_SESSION['user_name'] = $_POST['user_name'];
                }
            }
            if (empty($_POST['user_type'])) {
                $error['user_type'] = "Hãy chọn phân loại";
                $_SESSION['user_id']=$_POST['user_type'];
            } else {
                $_SESSION['user_id']=$_POST['user_type'];
            }
            if (empty($_POST['user_id'])) {
                $error['user_id'] = "Hãy nhập ID";
                $_SESSION['user_id']=$_POST['user_id'];
            } 
            else if (strlen($_POST['user_id']) > 10) {
                    $error['user_id'] = "Id khong qua 10";
                    $_SESSION['user_id']=$_POST['user_id'];
                } 
            else if ($getUser->CheckUserId("users", $_POST['user_id'], $id) != 0) {
                $error['user_id'] = 'Mã đã tồn tại';
                $_SESSION['user_id']=$_POST['user_id'];
                } 
            else {
                $_SESSION['user_id']  = $_POST['user_id'];
                }
            if (empty($_POST['description'])) {
                $error['description'] = "Hãy nhập mô tả chi tiết";
                $_SESSION['description']=$_POST['description'];
            } else {
                if (strlen($_POST['description']) > 1000) {
                    $error['description'] = "Mô tả nhỏ hơn 1000 kí tự";
                    $_SESSION['description']=$_POST['description'];
                } else {
                    $_SESSION['description']=$_POST['description'];
                }
            }
            if (empty($error)) {
                $_SESSION['user_name']  = $_POST['user_name'];
                $_SESSION['user_type']  = $_POST['user_type'];
                if ($_FILES['file_user']['name'] !== '') {
                    $_SESSION['check'] = true;
                    $_SESSION['avatar'] = $_FILES['file_user']['name'];
                    $_SESSION['file_tmp_name'] = $_FILES['file_user']['tmp_name'];
                    move_uploaded_file($_SESSION['file_tmp_name'], "web/avatar/tmp/" . $_SESSION['avatar']);
                    $file_path = FULL_SITE_ROOT . "web/avatar/tmp/" . $_SESSION['avatar'];
                  
                }else if(isset($_GET['back'])){
                    $_SESSION['check'] = true;
                    $file_path = FULL_SITE_ROOT . "web/avatar/tmp/" . $_SESSION['avatar'];
                    $file_view = $_SESSION['avatar'];
                }else{
                    $_SESSION['check'] = false;
                    $file_path = FULL_SITE_ROOT . "web/avatar/" . $id . "/" . $_SESSION['avatar'];
                    $file_view = $_SESSION['avatar'];
                }
                $_SESSION['description']  = $_POST['description'];
                header('Location: ?url=library_edit&method=view_edit_confirm&id=' . $id);
                
            } else {
            }
            
        }
        include_once 'app/view/user/user_edit_input.php';
    }
    function view_edit_confirm()
    {
        $id =  $id = $_GET['id'];
        $name = $_SESSION['user_name'];
        $id_user = $_SESSION['user_id'];
        $type = $_SESSION['user_type'];
        $description = $_SESSION['description'];
        
        if ( $_SESSION['check'] == true) {
            $file_view = $_SESSION['avatar'];
            $file_path = FULL_SITE_ROOT . "web/avatar/tmp/" . $file_view;
        } else {
            $file_view = $_SESSION['avatar'];
            $file_path = FULL_SITE_ROOT . "web/avatar/" . $id . "/" . $file_view;
        }
        include_once 'app/view/user/user_edit_confirm.php';
    }
    function view_edit_complete()
    {
        include_once "app/model/user.php";
       
        if (isset($_POST['btn_cf'])) {
            $name = $_POST['name_user'];
            $id_user = $_POST['id_user'];
            $type = $_POST['type_user'];
            $description = $_POST['description'];
            $file_name = $_POST['file_user'];
           
            if (!file_exists("web/avatar/" . $_GET["id"] . "/" . $file_name)) {
                if (!is_dir("web/avatar/" . $_GET["id"] . "/")) {
                    mkdir("web/avatar/" . $_GET["id"] . "/");
                }
                rename('web/avatar/tmp/' . $file_name, "web/avatar/" . $_GET["id"] . "/" . $file_name);
            }
            include_once "app/model/user.php";
            $getUser = new User();
            $row = $getUser->GetSingle("users", $_GET["id"]);
            if($row['avatar']!==$file_name){
                unlink("web/avatar/" . $_GET["id"] . "/" . $row['avatar']);
            }
            $data = array(
                'name' => $name,
                'type' => $type,
                'user_id' => $id_user,
                'avatar' => $file_name,
                'description' => $description,
            );
            $update = new User();
            $update->Update('users', $data, 'id', $_GET['id']);
        }
        include_once 'app/view/user/user_edit_complete.php';
        unset($_SESSION['user_name']);
        unset($_SESSION['user_id']);
        unset($_SESSION['user_type']);
        unset($_SESSION['avatar']);
        unset($_SESSION['description']);
        unset($_SESSION['avatar']);
        unset($_SESSION['file_tmp_name']);
    }
}

$user_edit = new Library_edit();
$method = $_GET['method'];
$user_edit->$method();
