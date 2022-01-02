
<section class="content row edit_user">
    <div class="box box-primary">
        <div class="box-header with-border">

            <h3 class="box-title">Danh sách người dùng</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body my_box tab-content">
            <div class="col-md-8">
                <form id="completeForm" class="form-horizontal" action="?url=library_edit&method=view_edit_complete&id=1" method="POST" >
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Họ và tên</label>
                        <div class="col-sm-8">
                            <input type="text" name="name_user" value="<?php echo $name ?>" class="form-control" id="" placeholder="Họ và tên"readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Phân loại</label>
                        <div class='form-check col-md-8'>
                            <input  class="form-check-input form-control" value="<?php echo ($id==1?"student":'teacher') ?>" name="type_user" disabled>
                            <input  class="form-check-input" value="<?php echo $id?>" name="type_user" style="display:none">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="id_user" value="<?php echo $id ?>" class="form-control" id=""readonly="readonly" placeholder="Nhập id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 text-right">Hình ảnh</label>
                        
                        <div class="col-sm-8">
                        <img class="style-img" src="<?php echo FULL_SITE_ROOT."web/avatar/tmp/".$file_view ?>" alt="">
                            <input type="text" style="display:none" name="file_user" value='<?php echo $file_view?>'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Mô tả</label>
                        <div class="col-sm-8">
                            <textarea row='4' name="description" value="<?php echo $description ?>" class="form-control" id="" placeholder="Nhập mô tả" readonly="readonly">
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-10">
                            <button type="submit" name="btn_cf" class="btn btn-primary">Đăng ký</button>
                            <a href="">Sửa lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>