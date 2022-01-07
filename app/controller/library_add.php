<?php
class Library_add
{
    function book_view_add_input()
    {

        $data = array();
        $error = array();
        $bookCategory = array("1" =>  "Khoa học", "2" => "Tiểu Thuyết", "3" => "Manga", "4" => "Sách giáo khoa", "EMPTY" => "Chọn thể loại");
        if (!empty($_POST['addBook'])) {
            $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
            $data['category'] = isset($_POST['category']) ? $_POST['category'] : '';
            $data['author'] = isset($_POST['author']) ? $_POST['author'] : '';
            $data['quantity'] = isset($_POST['quantity']) ? $_POST['quantity'] : '';
            $data['description'] = isset($_POST['description']) ? $_POST['description'] : '';
            $data['avatar'] = isset($_FILES['avatar']['name']) ? $_FILES['avatar']['name'] : '';

            if (empty($data['name'])) {
                $error['name'] = 'Hãy nhập tên sách';
            }
            if (strlen($data['name']) > 100) {
                $error['name'] = 'Không nhập quá 100 ký tự';
            }
            if ($data['category'] === 'EMPTY') {
                $error['category'] = 'Hãy chọn thể loại';
            }
            if (empty($data['author'])) {
                $error['author'] = 'Hãy nhập tên tác giả';
            }
            if (strlen($data['author']) > 250) {
                $error['author'] = 'Không nhập quá 250 ký tự';
            }
            if (empty($data['quantity']) || $data['quantity'] < 0) {
                $error['quantity'] = 'Hãy nhập số lượng';
            }
            if ($data['quantity'] > 99) {
                $error['quantity'] = 'Hãy nhập số lượng ít hơn hoặc bằng 2 chữ số';
            }
            if (empty($data['description'])) {
                $error['description'] = 'Hãy nhập chi tiết sách';
            }
            if (strlen($data['description']) > 1000) {
                $error['description'] = 'Không nhập quá 1000 ký tự';
            }
            if (empty($data['avatar'])) {
                $error['avatar'] = 'Hãy chọn avatar';
            }

            if (empty($error)) {

                $dir = "web/avatar/tmp/";
                if (!file_exists($dir)) {
                    mkdir($dir);
                }
                $file = $_FILES['avatar']['tmp_name'];
                $full_filename = $_FILES['avatar']['name'];
                $name_file = pathinfo($full_filename, PATHINFO_FILENAME);
                $ext_file = pathinfo($full_filename, PATHINFO_EXTENSION);
                $make_filename = $name_file . "_" . time() . "." . $ext_file;
                move_uploaded_file($file, $dir . $make_filename);

                $_SESSION["name"] = $data['name'];
                $_SESSION["category"] = $data['category'];
                $_SESSION["author"] = $data['author'];
                $_SESSION["quantity"] = $data['quantity'];
                $_SESSION["description"] = $data['description'];
                $_SESSION["avatar"] = $make_filename;

                header("Location: ?url=library_add&method=book_view_add_confirm");
            }
        }
        include_once 'app/view/book/book_add_input.php';
    }

    function book_view_add_confirm()
    {
        include_once "app/model/book.php";
        $bookCategory_select = array("1" =>  "Khoa học", "2" => "Tiểu Thuyết", "3" => "Manga", "4" => "Sách giáo khoa");
        $name = $_SESSION['name'] ?? '';
        $category = $_SESSION['category'] ?? '';
        $author = $_SESSION['author'] ?? '';
        $quantity = $_SESSION['quantity'] ?? '';
        $description = $_SESSION['description'] ?? '';
        $avatar = $_SESSION['avatar'] ?? '';
        if (isset($_POST['addConfirm'])) {

            if (isset($name) && isset($category) && isset($author) && isset($quantity) && isset($description) && isset($avatar)) {
                $add = new Book();
                $last_id = $add->addBook('books', $name, $category, $author, $quantity, $description, $avatar);
                mkdir("web/avatar/book/" . (string)$last_id);
                rename("web/avatar/tmp/" . $_SESSION['avatar'], "web/avatar/book/" . (string)$last_id . "/" . $_SESSION['avatar']);
                $files = glob('web/avatar/tmp/*'); // get all file names
                foreach ($files as $file) { // iterate files
                    if (is_file($file))
                        unlink($file); // delete file
                }
                header("Location: ?url=library_add&method=book_view_add_complete");
            }
        }
        include_once 'app/view/book/book_add_confirm.php';
    }

    function book_view_add_complete()
    {
        unset($_SESSION['name']);
        unset($_SESSION['category']);
        unset($_SESSION['author']);
        unset($_SESSION['quantity']);
        unset($_SESSION['description']);
        unset($_SESSION['avatar']);

        include_once 'app/view/book/book_add_complete.php';
    }
    
    function view_add_input()
    {
        $types = array(
            1 => 'student',
            2 => 'teacher'
        );
        include_once 'app/view/user/user_add_input.php';
    }
    function view_add_confirm()
    {
        $types = array(
            1 => 'student',
            2 => 'teacher'
        );
        if (isset($_POST['btn_xac_nhan'])) {
            $name               = $_POST['name_user'];
            $id                 = $_POST['id_user'];
            $type               = $_POST['type_user'];
            $description        = $_POST['description'];
            $this->file_name    = $_FILES['file_user']['name'];
            $file_view          = $_FILES['file_user']['name'];
            move_uploaded_file($_FILES['file_user']['tmp_name'], "web/avatar/tmp/" . $_FILES['file_user']['name']);
            include_once 'app/view/user/user_add_confirm.php';
        }
    }

    function view_add_complete()
    {
        try {
            include_once "app/model/user.php";
            if (isset($_POST['btn_cf'])) {
                $name           = $_POST['name_user'];
                $id             = $_POST['id_user'];
                $type           = $_POST['type_user'];
                $description    = $_POST['description'];
                $file_name      = $_POST['file_user'];
                if (!is_dir("web/avatar/user")) {
                    mkdir("web/avatar/user");
                }
                rename('web/avatar/tmp/' . $file_name, "web/avatar/user/" . $file_name);
                $data = array(
                    'name'          =>  $name,
                    'type'          =>  $type,
                    'user_id'       =>  $id,
                    'avatar'        =>  $file_name,
                    'description'   =>  $description,
                );
                $insert = new User();
                $insert->Add('users', $data);
                include_once 'app/view/user/user_add_complete.php';
            }
            else if(isset($_POST['btn_back'])){
                $name               = $_POST['name_user'];
                $id                 = $_POST['id_user'];
                $type               = $_POST['type_user'];
                $description        = $_POST['description'];
                
                $types = array(
                    1 => 'student',
                    2 => 'teacher'
                );
                include_once 'app/view/user/user_add_input.php';
            }else{
                die('here');
            }
            
        } catch (Exception $e) {
            echo $e;
        }
    }


    function back_confirm(){
        $types = array(
            1 => 'student',
            2 => 'teacher'
        );
        if (isset($_POST['btn_back'])) {
            $name               = $_POST['name_user'];
            $id                 = $_POST['id_user'];
            $type               = $_POST['type_user'];
            $description        = $_POST['description'];
            $this->file_name    = $_FILES['file_user']['name'];
            $file_view          = $_FILES['file_user']['name'];
            move_uploaded_file($_FILES['file_user']['tmp_name'], "web/avatar/tmp/" . $_FILES['file_user']['name']);
        }
        include_once 'app/view/user/user_add_input.php';
    }
}
$user_add = new Library_add();
$method = $_GET['method'];
$user_add->$method();
