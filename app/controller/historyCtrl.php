<?php

    class historyCtrl{
        function getAll(){
            include_once "app/model/history.php";
            $getBook = new History();
             $row = $getBook->GetAll("books");
             $user = $getBook->GetAll("users");
             if (isset($_GET['submit']))  {
                $_GET['url'] = 'history';
                $book = $getBook->getDataBook($_GET['book'],$_GET['user']);
                
             }
            
            include_once 'app/view/history/book_view.php';
        }
      
    }
    $muontra = new historyCtrl();
    $muontra->getAll();