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
                            <input type="text" name="name_user" value="<?php echo isset($name) ? $name : '' ?>" class="form-control" id="" placeholder="Họ và tên" >
                            <div style="color:red"><?php echo !empty($error['name_user']) ? $error['name_user'] : ''; ?></div>
                            
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
                            <div style="color:red">
                                <?php echo !empty($error['type_user']) ? $error['type_user'] : ''; ?>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="id_user" value="<?php echo isset($id) ? $id : '' ?>" class="form-control" id="id_user" placeholder="Nhập id" >
                            <div style="color:red">
                            <?php echo !empty($error['id_user']) ? $error['id_user'] : ''; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 text-right">Hình ảnh</label>
                        <div class="col-sm-8">
                        <!-- <img class="style-img" src="" alt=""> -->
                            <input  type="file" name="file_user" accept="image/*" >
                            <div style="color:red">
                            <?php echo !empty($error['file_user']) ? $error['file_user'] : ''; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Mô tả</label>
                        <div class="col-sm-8">
                            <textarea row='4' name="description" value="" class="form-control" id="" placeholder="Nhập mô tả"><?php echo isset($description) ? $description : '' ?></textarea>
                            <div style="color:red">
                            <?php echo !empty($error['description']) ? $error['description'] : ''; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-10">
                            <button type="submit"  class="btn btn-primary btn_input">Xác nhận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>