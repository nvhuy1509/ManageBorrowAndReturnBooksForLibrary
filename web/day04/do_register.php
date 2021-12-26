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

    if(!empty($_POST['username'])&&!empty($_POST['gt'])&&!empty($_POST['phan_khoa'])){
        $name = $_POST['username'];
        $gts = $_POST['gt'];
        
        
        $phan_khoas = $_POST['phan_khoa'];
        foreach($phan_khoas as $gt){
            $phan_khoa=$gt;
        }
    }
 $namsinh=$_POST['namsinh'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin</title>
</head>
<body>
        <div class='name'>
                <p class='name-text'>
                    Họ và Tên
                </p>
                <p><?php echo $name?></p>
            </div>
            <div class='name'>
                <p class='name-text'>
                    Giới tính
                </p>
                <?php foreach($gts as $gt=>$value){
                    ?>
                 <p><?php echo $khoa[$value]?></p>
                 <?php
                }
                ?>
                
               
                
            </div>
            <div class='select-form'>
                <p class='name-text'>
                    Phân Khoa
                </p>
                <p><?php echo $phan_khoa?></p>
            </div>
            <div class='name'>
                <p class='name-text'>
                    Năm sinh
                </p>
                <p><?php echo $namsinh?></p>
            </div>
            <div style='text-align:center;'>
                <button class='register' type='submit'>
                    Đăng ký
                </button>
            </div>
</body>
</html>
   
    