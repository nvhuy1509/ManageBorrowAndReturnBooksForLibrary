
<?php
$gioitinh = array(
 'Nam',
 'Nữ'
);
$khoa = array(
 'MAT'=>'Khoa học máy tính',
 'KDL'=>'Khoa học vật liệu'
);

if($_SERVER["REQUEST_METHOD"] == "POST"){
 $error= array();
 if(empty($_POST['username'])){
     $error['username'] = 'Hãy nhập tên' ;
 }
 else{
     $name = $_POST['username'];
 }
 if(empty($_POST['gt'])){
     $error['gt'] = 'Hãy chọn giới tính' ;
 }
 else{
     $gt = $_POST['gt'];
 }
 if($_POST['phan_khoa']==''){
     $error['phan_khoa'] = 'Hãy chọn khoa' ;
 }
 else{
     $phan_khoa = $_POST['phan_khoa'];
 }
 $namsinh=$_POST['namsinh'];
 if(empty($error)){
     header('Location: do_register.php');
     exit;
 }else{
 }
 
 
   <?php
        if(isset($error)&&empty($error)){
            ?>
            <form method='POST' action="do_register.php">
            <?php
        }else{
            ?>
            <form method='POST' action="">
            <?php
       }
        ?>
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./library/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bài 3</title>
</head>
<body>
    <div class="container">
    <form action="do_register.php" method='POST'>
        <div class="form">
            <p><?php echo (!empty($error))? '<span>' .$error['gt'].'</span>' :'' ?></p>
            <p><?php echo (!empty($error))? '<span>' .$error['username'].'</span>' :'' ?></p>
            <p><?php echo (!empty($error))? '<span>' .$error['phan_khoa'].'</span>' :'' ?></p>
            <div class='name'>
                <p class='name-text'>
                    Họ và Tên
                </p>
                <input class='name-input form-control' type='text' placeholder='Nhập họ tên' name='username'>
            </div>
            <div class='name'>
                <p class='name-text'>
                    Giới tính
                </p>
                <div class='checkbox'>
                <?php 
                    for ($i = 0; $i < count($gioitinh); $i++){
                    ?> 
                        <div class='form-check'>
                            <input class="form-check-input" type="radio" value="<?php echo $i ?>" required  name="gt[]" id="flexRadioDefault1_<?php echo $i ?>">
                            <label class="form-check-label margin-right" for="flexRadioDefault1_<?php echo $i ?>">
                                <?php echo $gioitinh[$i] ?>
                            </label>
                        </div>
                    <?php
                    }
                    ?>   
                </div>
                
            </div>
            <div class='select-form'>
                <p class='name-text'>
                    Phân Khoa
                </p>
                <select name="phan_khoa" id="" class='select form-control form-select'>
                        <option value="">------Mời chọn------</option>
                    <?php 
                    foreach($khoa as $key => $value){
                    ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>
            <div class='name'>
                <p class='name-text'>
                    Năm sinh
                </p>
                <input class='name-input form-control' type='text' placeholder='Nhập năm sinh' name='namsinh'>
            </div>
            <div style='text-align:center;'>
                <button class='register' type='submit'>
                    Đăng ký
                </button>
            </div>
        </div>
    </form>
    </div>
    
</body>
<script src="./library/js/bootstrap.min.js"></script>
</html>