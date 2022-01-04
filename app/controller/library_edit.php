<?php
    class Library_edit{
        function edit_book(){
            
        }

        // quản lý người dùng-> sửa
        function view_edit_input(){
            $id =$_GET['id'];
            include_once "app/model/user.php";
            $getUser = new User();
            $row = $getUser->GetSingle("users",$id);
            $type = array(
            1 => 'student',
            2 => 'teacher'
            );
            include_once 'app/view/user/user_edit_input.php';  
        }
        function view_edit_confirm(){
            $type = array(
                1 => 'student',
                2 => 'teacher'
                );
            if(isset($_POST['btn_xac_nhan'])){
            $name = $_POST['name_user'];
            $id = $_POST['id_user'];
            $type = $_POST['type_user'];
            $description = $_POST['description'];
            $this->file_name = $_FILES['file_user']['name'];
            $file_view = $_FILES['file_user']['name'];
            move_uploaded_file($_FILES['file_user']['tmp_name'],"web/avatar/tmp/".$_FILES['file_user']['name']);
            }
            include_once 'app/view/user/user_edit_confirm.php';
        }
        function view_edit_complete(){
            include_once "app/model/user.php";
            if(isset($_POST['btn_cf'])){
                $name = $_POST['name_user'];
                $id = $_POST['id_user'];
                $type = $_POST['type_user'];
                $description = $_POST['description'];
                $file_name = $_POST['file_user'];
                if(!is_dir("web/avatar/". $_GET["id"] ."/")) {
                    mkdir("web/avatar/". $_GET["id"] ."/");
                }
                rename('web/avatar/tmp/'.$file_name,"web/avatar/". $_GET["id"] ."/".$file_name);
                $data = array(
                    'name'=>$name,
                    'type'=>$type,
                    'user_id'=>$id,
                    'avatar'=>$file_name,
                    'description'=>$description,
                );
                $update = new User();
                $update->Update('users',$data,'id', $_GET['id']);
            }
            include_once 'app/view/user/user_edit_complete.php';
        }
    }
    
    $user_edit = new Library_edit();
    $method = $_GET['method'];
    $user_edit->$method();