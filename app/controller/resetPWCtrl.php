<?php
    class ResetPWCtrl{

        function getView(){
            include_once 'app/view/resetPassWord/ResetPassWord.php';
           
        } 

        function submitRequestResetPass(){
            
            $error = array();
            include_once "app/model/resetPW.php";
            $user_login = $_POST["user_login"];
            if (empty($user_login) || strlen($user_login) == 0 ) {
                $error['user_login'] = 'Hãy nhập vào login_id';
               
            }
            else if(strlen(trim($user_login))<4){
                $error['user_login'] = 'Hãy nhập login_id có tối thiểu 4 ký tự';
            }
            else{
                $getResetPW = new Reset();
                $checked = $getResetPW->checkLogin_id("admins", $user_login );
                if (!isset($checked) || empty($checked)) {
                    $error['user_login'] = 'login_id không tồn tại trong hệ thống';
                    unset($user_login);
                
                }
                else {
                    $row = $getResetPW->setTokenPW("admins", $user_login);
                    $error['user_login'] = 'Yêu cầu cấp mật khẩu thành công';
                }
            }
            
            include_once 'app/view/resetPassWord/ResetPassWord.php';
         }


        function getDataResetPassword(){
            include_once "app/model/resetPW.php";
            $getResetPW = new Reset();
            $row = $getResetPW->getAll("admins");
            include_once 'app/view/resetPassWord/ResetPW_view.php';

        }

        function updatePassword(){
            include_once "app/model/resetPW.php";
            $user_login = $_POST["user_name"];
            $newpw = $_POST["newpw"];
            $error = array();
            $getResetPW = new Reset();
            
            if (!isset($newpw) || empty($newpw) || strlen(trim($newpw))==0 ) { 
                $error['newpw'] = 'Hãy nhập mật khẩu mới';
            }
            else if(strlen(trim($newpw))<6){
                $error['newpw'] = 'Hãy nhập mật khẩu có tối thiểu 6 ký tự';
            } else {
                $resetPW = $getResetPW->UpdatePW("admins",$user_login,$newpw);
            }
            $row = $getResetPW->getAll("admins");
            include_once 'app/view/resetPassWord/ResetPW_view.php';

        }
        
        function getBacktoLogin(){
            header('Location: login.php');
        }

    }

    $userRS = new ResetPWCtrl();
    $method = $_GET['method'];
    $userRS->$method();
