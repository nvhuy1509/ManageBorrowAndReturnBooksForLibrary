<?php
class Library_edit
{
    function edit_book()
    {
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
        session_destroy();
    }
}

$user_edit = new Library_edit();
$method = $_GET['method'];
$user_edit->$method();
