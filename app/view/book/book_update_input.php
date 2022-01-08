<link rel="stylesheet" href="web/css/book_update_input.css">
<script src="web/js/jquery-lastest.min.js"></script>
<script src="web/js/shownameimage.js"></script>
<div id="wrapper">
    <form action="" enctype="multipart/form-data" method="POST">
        <!-- luc m submit, thì nó gàn method=edit_confirm_boo -->
        <div class="book-name">
            <label for="book_name">Tên sách</label>
            <input type="text" name="book_name" id="book_name" value="<?php echo isset($_SESSION['book_name']) ? $_SESSION['book_name'] : "" ?>">
            <p style="color: red; font-style:italic; margin-left: 88px"> <?php if(!empty($error['book_name'])) echo $error['book_name'] ?></p>
        </div>
        <div class="book-category">
            <label for="book_category">Thể loại</label>
            <select name="book_category" id="book_category">
            <option value=""></option>
            <?php foreach ($category as $key => $value) {
                ?>
                
                <option value="<?php echo $key ?>" <?php if(isset($_SESSION['book_category']) && $_SESSION['book_category'] == $key) echo "selected = 'selected'"?>><?php echo $value ?></option>
        
            
                <?php
            }
            ?>
               </select>
            <p style="color: red; font-style:italic; margin-left: 88px"><?php if(!empty($error['book_category'])) echo $error['book_category'] ?></p>
        </div>
        <div class="book-author">
            <label for="book_author">Tác giả</label>
            <input type="text" name="book_author" id="book_author" value="<?php echo isset($_SESSION['book_author']) ? $_SESSION['book_author'] : "" ?>">
            <p style="color: red; font-style:italic; margin-left: 88px"><?php echo (!empty($error['book_author']) ? $error['book_author'] : "") ?></p>
        </div>
        <div class="book-quantity">
            <label for="book_quantity">Số lượng</label>
            <input type="number" name="book_quantity" id="book_quantity" min=1 value="<?php echo isset($_SESSION['book_quantity']) ? $_SESSION['book_quantity'] : ""?>">
            <p style="color: red; font-style:italic; margin-left: 88px"><?php echo (!empty($error['book_quantity']) ? $error['book_quantity'] : "") ?></p>
        </div>
        <div class="book-description">
            <label for="book_description">Mô tả chi tiết</label>
            <textarea name="book_description" id="book_description" cols="60" rows="6"><?php echo isset($_SESSION['book_description']) ? $_SESSION['book_description'] : ""?></textarea>
            <p style="color: red; font-style:italic; margin-left: 88px"><?php echo (!empty($error['book_description']) ? $error['book_description'] : "") ?></p>
        </div>
        <div class="book-avatar">
            <label for="book_avatar_name">Avatar</label>
            <div class="file-name">
            <img class="style-img" src="<?php if(!empty($_SESSION['book_avatar'])) echo FULL_SITE_ROOT."web/avatar/tmp/".$_SESSION['book_avatar'] ?>" alt="" style='display: none'>
            <input type="hidden" name="abc" id="" value="<?php if(!empty($_SESSION['book_avatar'])) echo $_SESSION['book_avatar'] ?>" style='display: none'>    
            <?php echo (!empty($_SESSION['book_avatar'])) ? $_SESSION['book_avatar'] : "" ?>
            </div>
            <div class="upload">
                <label for="fileupload" class="fileupload">Browse</label>
                <input type="file" name="file" id="fileupload" value="">
            </div>

        </div>
        <p style="color: red; font-style:italic; margin-left: 88px"><?php echo (!empty($error['type']) ? $error['type'] : "") ?></p>
        <input type="submit" name="btn_update" value="Xác nhận">
    </form>
</div>
