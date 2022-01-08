<section class="content row edit_user">
    <div class="box box-primary">
        <div class="box-header with-border">

            <h3 class="box-title">Sửa người dùng</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body my_box tab-content">
            <div class="col-md-8">
                <form id="editForm" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group <?php echo (!empty($error['user_name']) ? 'has-error' : '') ?> ">
                        <label for="" class="col-sm-4 text-right">Họ và tên</label>
                        <div class="col-sm-8">
                            <input type="text" name="user_name" value="<?php echo $_SESSION['user_name']?>" class="form-control" id="" placeholder="Họ và tên">
                            <?php echo (!empty($error['user_name'])) ?  '<p class="text-validate"> * ' . $error['user_name'] . '</p>' : '' ?>
                        </div>
                        
                    </div>
                   
                    <div class="form-group <?php echo (!empty($error['user_type']) ? 'has-error' : '') ?>">
                        <label for="" class="col-sm-4 text-right">Phân loại</label>
                        <div class='form-check col-md-8'>
                            <?php foreach ($arr_type as $key => $value) { ?>
                                <input id="checkboxId" class="form-check-input" type="radio" value="<?php echo $key; ?>" name="user_type" <?php
                                                                                                                                                echo $_SESSION['user_type'] == $key ? 'checked' : "";
                                                                                                                                            ?>>
                                <label class="form-check-label margin-right" for=""><?php echo $value ?>
                                </label>
                            <?php } ?>
                            <?php echo (!empty($error['user_type'])) ?  '<p class="text-validate"> * ' . $error['user_type'] . '</p>' : '' ?>
                        </div>
                    </div>
                    
                    <div class="form-group <?php echo (!empty($error['user_id']) ? 'has-error' : '') ?>">
                        <label for="" class="col-sm-4 text-right">ID</label>
                        <div class="col-sm-8">
                            <input class="user_id form-control" type="text" name="user_id" value="<?php echo $_SESSION['user_id']?>" class="form-control" id="" placeholder="Nhập id">
                            <?php echo (!empty($error['user_id'])) ?  '<p class="text-validate"> * ' . $error['user_id'] . '</p>' : '' ?>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 text-right">Hình ảnh</label>
                        <div class="col-sm-8">
                            <img class="style-img" id="output" src="<?php
                                                                    if (isset($_SESSION['file_tmp_name'])) {
                                                                        echo FULL_SITE_ROOT . "web/avatar/tmp/" . $_SESSION['avatar'];
                                                                    } else {
                                                                        echo FULL_SITE_ROOT . "web/avatar/" . $row['id'] . "/" . $_SESSION['avatar'];
                                                                    }

                                                                    ?>" alt="">
                            <input type="file" class="inputfile" name="file_user" accept="image/jpg,image/png,image/jpeg,image/gif" onchange="loadFile(event)">
                            <input type="text" class="inputfile" name="file_user" value="<?php echo $_SESSION['avatar']; ?>">
                            <div class="custom-input">
                                <p id="file-name" class="file-box"><?php echo $_SESSION['avatar']; ?></p>
                                <p class="btn btn-default btn-file">
                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                    Brown
                                                                </p>
                                                                </div>
                        </div>
                    </div>
                    <?php echo (!empty($error['type'])) ?  '<p class="text-validate"> * ' . $error['type'] . '</p>' : '' ?>
                    <div class="form-group <?php echo (!empty($error['description']) ? 'has-error' : '') ?>">
                        <label for="" class="col-sm-4 text-right">Mô tả</label>
                        <div class="col-sm-8">
                            <input name="description" value="<?php echo $_SESSION['description']?>" class="form-control" id="" placeholder="Nhập mô tả">
                            <?php echo (!empty($error['description'])) ?  '<p class="text-validate"> * ' . $error['description'] . '</p>' : '' ?>
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