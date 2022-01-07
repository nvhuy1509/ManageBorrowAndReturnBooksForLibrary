
<section class="content row edit_user">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Đăng ký người dùng</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body my_box tab-content">
            <div class="col-md-8">
                <form id="editForm" class="form-horizontal" action="?url=library_add&method=view_add_confirm" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Họ và tên</label>
                        <div class="col-sm-8">
                            <input type="text" name="name_user" value="<?php echo isset($name) ? $name : '' ?>" class="form-control" id="" placeholder="Họ và tên" required maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Phân loại</label>
                        <div class='form-check col-md-8'>
                            <?php foreach($types as $key => $value) {?> 
                            <input  class="form-check-input" type="radio" value="<?php echo $key; ?>" name="type_user" <?php echo isset($type) && $type == $key ? "checked": '' ?> >
                            <label class="form-check-label margin-right" for="" ><?php echo $value ?>
                            </label>
                            <?php }?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="id_user" value="<?php echo isset($id) ? $id : '' ?>" class="form-control" id="id_user" placeholder="Nhập id" required maxlength="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 text-right">Hình ảnh</label>
                        <div class="col-sm-8">
                        <!-- <img class="style-img" src="" alt=""> -->
                            <input  type="file" name="file_user" accept="image/*" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Mô tả</label>
                        <div class="col-sm-8">
                            <textarea row='4' name="description" value="" class="form-control" id="" placeholder="Nhập mô tả"><?php echo isset($description) ? $description : '' ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-10">
                            <button type="submit" name="btn_xac_nhan" class="btn btn-primary btn_input">Xác nhận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>