<?php
class ledgerCtrl
{
    function getAll()
    {
        include_once "app/model/book_transactions.php";
        $getLedger = new book_transactions();
        if (!isset($_GET['book_id']) && !isset($_GET['user_id'])) { // trường hợp đầu tiên khi gọi đến trang tìm kiếm
            $rowBookTran = $getLedger->GetAll(-1, -1);
        }
        else{
            $book_id = $_GET['book_id'];
            $user_id = $_GET['user_id'];
            $rowBookTran = $getLedger->GetAll($book_id, $user_id);
            $getLedger -> Update(1);
        }

        if(isset($_GET['method'])=='giveBookBack'){ // nêu là trả sách
            $id = $_GET['id'];
            $getLedger -> Update($id);
            $rowUser = $getLedger->getCommonData("users");
            $rowBook = $getLedger->getCommonData("books");
            $rowBookTran = $getLedger->GetAll(-1, -1);
            include_once 'app/view/ledger/ledger_view.php';
        }
        else if(isset($_GET['chucnang'])=='reset'){
            $rowUser = $getLedger->getCommonData("users");
            $rowBook = $getLedger->getCommonData("books");
            $rowBookTran = $getLedger->GetAll(-1, -1);
            include_once 'app/view/ledger/ledger_view.php';
        } 
        else{
            $rowUser = $getLedger->getCommonData("users");
            $rowBook = $getLedger->getCommonData("books");
           
            include_once 'app/view/ledger/ledger_view.php';
        }
       
    }
}

$ledger = new ledgerCtrl();
$method = 'getAll';
$ledger->$method();
