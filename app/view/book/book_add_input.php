<div class="add-book">
    <h1 style="margin:0;">Thêm sách</h1>
    <!-- <br> -->
    <form action="" method="post" style="padding-left: 100px; margin-top:50px; padding-right:100px;" enctype="multipart/form-data">
        <div class="error"><?php echo isset($error['name']) ? $error['name'] : ''; ?></div>
        <div class="form-group row">
            <label style="font-size: large;" for="name" class="col-sm-4 col-form-label">Tên sách</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($data['name']) ? $data['name'] : ''; ?>">
            </div>
        </div>

        <div class="error"><?php echo isset($error['category']) ? $error['category'] : ''; ?></div>
        <div class="form-group row">
            <label style="font-size: large;" for="bookCategory" class="col-sm-4 col-form-label">Thể loại</label>
            <div class="col-sm-4">
                <select class="custom-select" id="inputGroupSelect01" name="category">
                    <?php

                    foreach ($bookCategory as $key => $value) {
                        echo "<option selected value='$key'> $value </option>";
                    }
                    // }
                    ?>
                </select>
            </div>
        </div>

        <div class="error"><?php echo isset($error['author']) ? $error['author'] : ''; ?></div>
        <div class="form-group row">
            <label style="font-size: large;" for="author" class="col-sm-4 col-form-label">Tác giả</label>
            <div class="col-sm-4 ">
                <input type="text" class="form-control" id="author" name="author" value="<?php echo isset($data['author']) ? $data['author'] : ''; ?>">
            </div>
        </div>

        <div class="error"><?php echo isset($error['quantity']) ? $error['quantity'] : ''; ?></div>
        <div class="form-group row">
            <label style="font-size: large;" for="quantity" class="col-sm-4 col-form-label">Số lượng</label>
            <div class="col-sm-1">
                <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo isset($data['quantity']) ? $data['quantity'] : ''; ?>">
            </div>
        </div>

        <div class="error"><?php echo isset($error['description']) ? $error['description'] : ''; ?></div>
        <div class="form-group row">
            <label style="font-size: large;" for="description" class="col-sm-4 col-form-label">Chi tiết sách</label>
            <div class="col-sm-8">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description" name="description"><?php echo isset($data['description']) ? $data['description'] : ''; ?></textarea>
            </div>
        </div>

        <div class="error"><?php echo isset($error['avatar']) ? $error['avatar'] : ''; ?></div>
        <div class="form-group row">
            <label style="font-size: large;" for="avatar" class="col-sm-4 col-form-label">Avatar</label>
            <div class="col-sm-5">
                <div class="file-upload-wrapper" data-text="Chọn ảnh">
                    <input id = "avatar" name="avatar" type="file" class="file-upload-field">
                </div>
                <!-- <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="avatar" accept="image/*">
                </div> -->
            </div>
        </div>
        <div style="text-align:center" class="add-submit">
            <input type="submit" name="addBook" value="Xác nhận">
        </div>
    </form>
    <div style="margin-left: 50px;">
        <a class="btn btn-default" title="Xem chi tiết" onclick="history.back()">Quay lại<i class="fa fa-arrow-left"></i></a>
    </div>
</div>
