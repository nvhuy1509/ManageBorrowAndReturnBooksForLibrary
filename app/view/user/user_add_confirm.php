<section class="content row edit_user">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Đăng ký người dùng</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body my_box tab-content">
            <div class="col-md-8">
                <form id="completeForm" class="form-horizontal" action="?url=library_add&method=view_add_complete" method="POST">
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Họ và tên</label>
                        <div class="col-sm-8">
                            <input type="text" name="name_user" value="<?php echo isset($name) ? $name : '' ?>" class="form-control" id="" placeholder="Họ và tên" readonly="readonly" required maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Phân loại</label>
                        <?php foreach ($types as $key => $value) { ?>
                            <input class="form-check-input" type="radio" value="<?php echo isset($key) ? $key : ''; ?>" name="type_user" <?php echo isset($type) && isset($type) && $type== $key ? "checked":'' ?> " name="type_user">
                            <label class="form-check-label margin-right" for=""><?php echo isset($value) ? $value : '' ?></label>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="id_user" value="<?php echo isset($id) ? $id : '' ?>" class="form-control" id="" readonly="readonly" placeholder="Nhập id" required maxlength="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 text-right">Hình ảnh</label>
                        <div class="col-sm-8">
                            <?php if (isset($file_view)) { ?>
                                <img class="style-img" src="<?php echo FULL_SITE_ROOT . "web/avatar/tmp/" . $file_view ?>" alt="">
                            <?php } else { ?>
                                <img class="style-img" src="https://dised.danang.gov.vn/Images/noimage.png" alt="">
                            <?php } ?>
                            <input type="text" style="display:none" name="file_user" value='<?php echo isset($file_view) ? $file_view : '' ?>' required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Mô tả</label>
                        <div class="col-sm-8">
                            <textarea row='4' name="description" class="form-control" id="" placeholder="Nhập mô tả" readonly="readonly"><?php echo isset($description) ? $description : '' ?></textarea>
                        </div>
                    </div>

        
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-10">
                            <button type="submit" name="btn_cf" class="btn btn-primary">Đăng ký</button>
                            <button type="submit" name="btn_back" class="btn btn-warning">Chỉnh sửa</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>