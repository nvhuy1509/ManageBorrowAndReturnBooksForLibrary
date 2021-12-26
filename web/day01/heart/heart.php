<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<style>
    body {
        margin: 0;
        padding-top: 100px;
        display: flex;
        align-items: center;

       
   
    }
    .main{
        background-image: url('../img/duong.png');
        background-size: 100% 100%;
        background-repeat: no-repeat;
        height:auto;
    }
    .heart {
        margin: 100px auto;
        width: 80px;
        height: 80px;
        background-color: #f20044;
        position: relative;
        transform: rotate(-45deg);
        box-shadow: -10px 10px 90px #f20044;
        animation: heart 1s linear infinite;
        display: none;
    }

    @keyframes heart {
        0% {
            transform: rotate(-45deg) scale(1.5);
        }

        80% {
            transform: rotate(-45deg) scale(1);
        }

        100% {
            transform: rotate(-45deg) scale(0.5);
        }
    }

    .heart::before {
        content: "";
        position: absolute;
        width: 80px;
        height: 80px;
        background: #f20044;
        top: -50%;
        border-radius: 50px;
        box-shadow: -10px -10px 90px #f20044;
    }

    .heart::after {
        content: "";
        position: absolute;
        width: 80px;
        height: 80px;
        background: #f20044;
        right: -50%;
        border-radius: 50px;
        box-shadow: 10px 10px 90px #f20044;
    }

    .text {
       left: 28px;
       top: 4px;
       position: absolute;
       z-index: 9999;
       color: #00f234;
       transform: rotate(45deg);
       font-size: 23px;
    }

    .cl_form {
        display: flex;
    }
    #name{
        margin-left: 20px;
    }
    button{
        margin-right: 20px;
    }
</style>

<body>
    <div class="container main">
        <div class="col-md-4">
            <div class="cl_form">
                <input type="text" class="form-control" id="name" placeholder="Nhập tên...">
                <button class="btn" type="submit">
                    <i class="fas fa-heart" style="color: #f20044;font-size: 20px"></i>
                </button>
            </div>
        </div>
        


        <div class="heart">
            <p class="text"></p>
        </div>
    </div>


</body>
<script>
    $(document).ready(function () {
        $('.btn').click(function () {
            var a = $('#name').val();
            console.log(a);
            $('.text').text(a);
            $('.heart').css('display', 'inherit');
            $('.cl_form').css('display', 'none');

        });

    })
</script>

</html>


