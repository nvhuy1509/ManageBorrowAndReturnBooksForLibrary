
<section class="content row edit_user">
    <div class="box box-primary">
        <div>
            <h2>Chi tiết sách <?php echo '<i>'.$row['name'].'</i>'?></h2>
        </div>
        <!-- /.box-header -->
        <div class="box-body my_box tab-content">
            <div class="col-md-8">
                <form id="editForm" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 text-right">Ảnh bìa</label>
                        <div class="col-sm-8">
                        <img class="img-responsive" src="<?php echo FULL_SITE_ROOT."web/avatar/".$row['id']."/".$row['avatar'] ?>" alt="">                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Tên sách</label>
                        <div class="col-sm-8">
                            <?php echo $row['name']?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Thể loại</label>
                        <div class='form-check col-md-8'>
                            <?php 
                            if ($row['category'] == 1) {
                                echo 'Khoa học';
                            } else if ($row['category'] == 2) {
                                echo 'Tiểu thuyết';
                            } else if ($row['category'] == 3) {
                                echo 'Manga';
                            }
                            else {
                                echo 'Sách giáo khoa';
                            }
                            
                             ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Tác giả</label>
                        <div class="col-sm-8">
                        <?php echo $row['author']?>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Số lượng</label>
                        <div class="col-sm-8">
                        <?php echo $row['quantity']?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 text-right">Mô tả</label>
                        <div class="col-sm-8">
                            <?php echo $row['description']?>
                        </div>
                    </div>
                </form>
                <div>
                    <a class="btn btn-default" title="Xem chi tiết" href="?url=library_search&method=searchDataBook">Quay lại<i class="fa fa-arrow-left"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>