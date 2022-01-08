<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="web/css/styleadmin.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="web/images/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="web/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/css/stylebook.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="web/css/AdminLTE.min.css">
    <link rel="stylesheet" href="web/css/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <link rel="stylesheet" href="../../web/css/book_borrow.css">
    <title>History Borrow Books</title>
</head>
<body>

    <div class="container">

        <form action="../controller/history_user.php" method="get">
            <div class="search">
                <!-- button search -->
                <div class="row">
                    <span class="keyword_content"style=" width: 15%;">Tên sách</span>
                    <input type="text" name="book_name">
                        
                    
                </div>
                <div class="row">
                    <span class="keyword_content" style=" width: 15%;">Người dùng</span>
                    <select name="user_id" id="">
                        <option value=""></option>
                        <?php 
                            foreach ($list_user as $key => $value) {
                                echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';  
                            }
                        ?>
                    </select>
                </div>
                <div class="submit">
                    <input type="submit" id="finding" value="Reset">
                    <input type="submit" id="finding" value="Tìm kiếm">
                    
                </div>
            </div>

            <div class="result">
                <div class="row">
                    <span class="">Số kết quả tìm thấy: <?php echo (count($list_books)); ?></span>
                    
                </div>
                <table>
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th style="width: 20%">Người dùng</th>
                            <th style="width: 10%">Số lần mượn</th>
                            <th style="width: 35%">Thời gian dự kiến mượn</th>
                            <th style="width: 20%">Thời điểm trả</th>
                            <th style="width: 20%">Tên sách</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        
                        for ($i = 0; $i <= count($list_books)-1; $i++) {
                            $list_books[$i]['book_transaction_borrow'] = formatDate($list_books[$i]['book_transaction_borrow']);
                            $list_books[$i]['book_transaction_return_plan'] = formatDate($list_books[$i]['book_transaction_return_plan']);
                            $list_books[$i]['book_transacton_return_actual'] = formatDate($list_books[$i]['book_transacton_return_actual']);

                            echo '
                                <tr>
                                    <td>'.($i+1).'</td>
                                    <td>'.$list_books[$i]['users_name'].'</td>
                                    <td>'.(1).'</td>
                                    <td>'.$list_books[$i]['book_transaction_borrow'].' ~ '.$list_books[$i]['book_transaction_return_plan'].'</td>
                                    <td>'.$list_books[$i]['book_transacton_return_actual'].'</td>
                                    <td>'.$list_books[$i]['book_name'].'</td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </form> 
    </div>
</body>


</html>