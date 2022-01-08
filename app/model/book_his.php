<?php
include "../common/db.php";
        function search_user_borrow($book_name, $user_id)
        {
            global $conn;
            if($book_name == "" && $user_id = ""){
                $sql = "SELECT books.name as book_name,
                                book_transactions.borrowed_date as book_transaction_borrow, 
                                book_transactions.return_plan_date as book_transaction_return_plan,
                                book_transactions.return_actual_date as book_transacton_return_actual,
                                users.name as users_name
                        FROM    `book_transactions`, `books`, `users`
                        WHERE   books.id = book_transactions.book_id AND book_transactions.user_id = users.id";
            }
            else if($user_id == ""){
                $sql = "SELECT books.name as book_name,
                                book_transactions.borrowed_date as book_transaction_borrow, 
                                book_transactions.return_plan_date as book_transaction_return_plan,
                                book_transactions.return_actual_date as book_transacton_return_actual,
                                users.name as users_name
                        FROM    `book_transactions`, `books`, `users`
                        WHERE   books.name LIKE '%".$book_name."%' AND books.id = book_transactions.book_id AND book_transactions.user_id = users.id";
            }
            else if($book_name == ""){
                $sql = "SELECT books.name as book_name,
                                book_transactions.borrowed_date as book_transaction_borrow, 
                                book_transactions.return_plan_date as book_transaction_return_plan,
                                book_transactions.return_actual_date as book_transacton_return_actual,
                                users.name as users_name
                        FROM    `book_transactions`, `books`, `users`
                        WHERE   users.user_id =".$user_id." AND books.id = book_transactions.book_id AND book_transactions.user_id = users.id";
            }
            else{
                $sql = "SELECT books.name as book_name,
                                
                                book_transactions.borrowed_date as book_transaction_borrow, 
                                book_transactions.return_plan_date as book_transaction_return_plan,
                                book_transactions.return_actual_date as book_transacton_return_actual,
                                users.name as users_name
                        FROM    `book_transactions`, `books`, `users`
                        WHERE   users.user_id =".$user_id." AND books.name LIKE '%".$book_name."%' AND books.id = book_transactions.book_id AND book_transactions.user_id = users.id";
            }

            // print($sql); 
            $statement = $conn->prepare($sql);

            
            $statement -> execute();
            $list_books = $statement -> fetchAll(PDO::FETCH_ASSOC);
            // print_r ($list_books); // check value  
            return $list_books;

        }
?>