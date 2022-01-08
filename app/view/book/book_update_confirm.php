<link rel="stylesheet" href="web/css/book_update_confirm.css">
<div id="wrapper">
    <form action="?url=library_edit&method=edit_book_complete&id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <div class="book-name">
            <label for="book_name">Tên sách</label>
            <input type="text" name="book_name" id="book-name" value="<?php echo $name ?>" style="pointer-events: none;">
        </div>
        <div class="book-category">
            <label for="book_category">Thể loại</label>

                <input type="text" name="book_category" id="book-category" value="<?php
                                                                                    echo $view_category;
                                                                                 ?>" style="pointer-events: none;">
           
       
             <input type="text" name="book_category" id="book-category" value="<?php echo  $category ?>" style="display: none;">
        </div>
        <div class="book-author">
            <label for="book_author">Tác giả</label>
            <input type="text" name="book_author" id="book-author" value="<?php echo  $author ?>" style="pointer-events: none;">
        </div>
        <div class="book-quantity">
            <label for="book_quantity">Số lượng</label>
            <input type="number" name="book_quantity" id="book-quantity" value="<?php echo $quantity ?>" style="pointer-events: none;">
        </div>
        <div class="book-description">
            <label for="book_description">Mô tả chi tiết</label>
            <input type="text" name="book_description" id="book-description" value="<?php echo $description ?>" style="pointer-events: none;">
        </div>
        <div class="book-avatar">
            <label for="book_avatar">Avatar</label>
            <input type="text" name="file" id="book-avatar" value="<?php echo $file_name ?>" style="display: none;">

            <img src="<?php echo FULL_SITE_ROOT . "web/avatar/tmp/" . $file_name ?>" alt="" width="100" height="100">
        </div>
        <a href="?url=library_edit&method=edit_book_input&id=<?php echo $id ?>&back" type="button" class="back">Sửa lại</a>
        <input type="submit" name="btn_confirm" value="Xác nhận">

    </form>
</div>