<?php
    include('do_register.php');
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
    <form action="">
        <div class="form">
            <div class='name'>
                <p class='name-text'>
                    Họ và Tên
                </p>
                <input class='name-input form-control' type='text' placeholder='Nhập họ tên'>
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
                            <input class="form-check-input" type="radio" value="<?php echo $i ?>" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label margin-right" for="flexRadioDefault1">
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
                <select name="" id="" class='select form-control form-select'>
                        <option value=" ">------Mời chọn------</option>
                    <?php 
                    foreach($khoa as $key => $value){
                    ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php 
                    }
                    ?>
                </select>
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