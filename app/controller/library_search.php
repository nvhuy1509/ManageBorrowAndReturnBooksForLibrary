<?php
    class Library_search{
      
        // function searchDataBook(){
        //     echo 'aaaaaaaaaaaâ';
        //     $category =$_GET['category'];
        //     $name =$_GET['name_book'];
        //     include_once "app/model/book.php";
        //     $getBook = new Book();
        //     $row = $getBook->getDataNoCate("books",$name);
        //     include_once 'app/view/book/book_view.php';  
        // }
        function view_detail_book(){
            $id =$_GET['id'];
            include_once "app/model/book.php";
            $getBook = new Book();
            $row = $getBook->getDetailBook("books",$id);
            include_once 'app/view/book/book_detail.php';  
        }
        function search_user(){
            
        }
    }
    $book = new Library_search();
    $method = $_GET['method'];
    $book->$method();