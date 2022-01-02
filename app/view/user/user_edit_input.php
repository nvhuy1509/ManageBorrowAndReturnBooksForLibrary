
<section class="content row edit_user">
    <div class="box box-primary">
        <div class="box-header with-border">

            <h3 class="box-title">Danh sách người dùng</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body my_box tab-content">
            <div class="col-md-8">
                <form id="editForm" class="form-horizontal" action="?url=library_edit&method=view_edit_confirm" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Họ và tên</label>
                        <div class="col-sm-8">
                            <input type="text" name="name_user" value="<?php echo $row['name']?>" class="form-control" id="" placeholder="Họ và tên">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Phân loại</label>
                        <div class='form-check col-md-8'>
                            <?php foreach($type as $key => $value) {?> 
                            <input  class="form-check-input" type="radio" value="<?php echo $key; ?>" name="type_user" <?php echo $row['type']==$key?"checked":'hsdhja' ?>  >
                            <label class="form-check-label margin-right" for="" ><?php echo $value ?>
                            </label>
                            <?php }?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="id_user" value="<?php echo $row['user_id']?>" class="form-control" id="" placeholder="Nhập id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 text-right">Hình ảnh</label>
                        <div class="col-sm-8">
                        <img class="style-img" src="<?php echo FULL_SITE_ROOT."web/avatar/".$row['id']."/".$row['avatar'] ?>" alt="">
                            <input  type="file" name="file_user" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Mô tả</label>
                        <div class="col-sm-8">
                            <input  name="description" value="<?php echo $row['description']?>" class="form-control" id="" placeholder="Nhập mô tả">
                           
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