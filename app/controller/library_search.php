<?php
    class Library_search{
     
        function searchDataBook(){
            
            include_once "app/model/book.php";
            $category = 0;
            $name = '';
            if(isset( $_GET['category'])){
                $category =$_GET['category'];
            }
            if(isset( $_GET['name_book'])) {
                $name =$_GET['name_book'];
            }
            $getBook = new Book();
            $row = $getBook->getAll("books", $name,$category);
            include_once 'app/view/book/book_view.php';  
        }

        function view_detail_book(){
            $id =$_GET['id'];
            include_once "app/model/book.php";
            $getBook = new Book();
            $row = $getBook->getDetailBook("books",$id);
            include_once 'app/view/book/book_detail.php';  
        }
        
        function delete_book(){
            $id =$_GET['id'];
            include_once "app/model/book.php";
            $getBook = new Book();
            $row = $getBook->DeleteBook("books",$id);
            include_once 'app/view/book/book_view.php';  
            print_r('aaaaaaaaaaa');
            die();
           
        }
        function search_user(){
            
        }
    }
    $book = new Library_search();
    
    $method = $_GET['method'];
    $book->$method();