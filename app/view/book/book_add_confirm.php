<div class="add-book">
    <h1 style="margin:0;">Xác nhận thêm sách</h1>

    <form action="" method="post" style="padding-left: 100px; margin-top:50px; padding-right:100px;">
        <div class="form-group row">
            <label style="font-size: large;" for="name" class="col-sm-4 col-form-label">Tên sách</label>
            <div style="font-size: larger;" class="col-sm-4">
                <input type="text" class="form-control" value="<?php echo $name; ?>" disabled>
            </div>
        </div>

        <div class="form-group row">
            <label style="font-size: large;" for="bookCategory" class="col-sm-4 col-form-label">Thể loại</label>
            <div style="font-size: larger;" class="col-sm-4">
                <input type="text" class="form-control" value="<?php echo $bookCategory_select[$category]; ?>" disabled>
            </div>
        </div>

        <div class="form-group row">
            <label style="font-size: large;" for="author" class="col-sm-4 col-form-label">Tác giả</label>
            <div style="font-size: larger;" class="col-sm-4 ">
                <input type="text" class="form-control" value="<?php echo $author; ?>" disabled>
            </div>
        </div>

        <div class="form-group row">
            <label style="font-size: large;" for="quantity" class="col-sm-4 col-form-label">Số lượng</label>
            <div style="font-size: larger;" class="col-sm-1 ">
                <input type="text" class="form-control" value="<?php echo $quantity; ?>" disabled>
            </div>
        </div>

        <div class="form-group row">
            <label style="font-size: large;" for="description" class="col-sm-4 col-form-label">Chi tiết sách</label>
            <div style="font-size: larger;" class="col-sm-8 description">
                <textarea class="form-control" rows="4" name="description" disabled> <?php echo $description; ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label style="font-size: large;" for="avatar" class="col-sm-4 col-form-label">Avatar</label>
            <div class="col-sm-8">
                <div style="font-size: larger;" class="custom-file">
                    <input type="hidden" id="avatar" name="avatar" value="<?php echo $_SESSION['avatar'] ?>">
                    <img src="web/avatar/tmp/<?php echo $_SESSION['avatar'] ?>" alt="" width="50%" height="auto">
                </div>
            </div>
        </div>
        <div style="text-align:center" class="add-submit">
            <input type="button" onclick="history.back()" value="Sửa lại">
            <input style="margin-left: 10px;" type="submit" name="addConfirm" value=" Xác nhận ">
        </div>
    </form>

</div>