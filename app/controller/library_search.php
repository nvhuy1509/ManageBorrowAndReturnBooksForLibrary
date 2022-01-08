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
            
            die();
           
        }
        function search_user(){
            include_once "app/model/user.php";
            $type = 0;
            $name = '';
            if(isset( $_GET['type'])){
                $type =$_GET['type'];
            }
            if(isset( $_GET['name_user'])) {
                $name =$_GET['name_user'];
            }
            $getUser = new User();
            $row = $getUser->getAll("users",$name,$type);
            include_once 'app/view/user/user_view.php';
            
        }
        function delete_user(){
            $id =$_GET['id'];
            include_once "app/model/user.php";
            $getUser = new User();
            $row = $getUser->DeleteUser("users",$id);
            include_once 'app/view/user/user_view.php';  
            die();
    
    }
 }
 $book = new Library_search();
    
 $method = $_GET['method'];
 $book->$method();

    $user = new Library_search();
    $method = $_GET['method'];
    $user -> $method();
    