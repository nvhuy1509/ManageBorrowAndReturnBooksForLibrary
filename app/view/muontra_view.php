<h1> Mượn trả sách tại đây</h1>
<!-- Content Header (Page header) -->
<link rel="stylesheet" href="web/css/style_advanced_search.css">
<section class="content-header">
    <h1>Quản lý mượn trả</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-group"></i>Mượn trả</a>
        </li>
    </ol>
</section>
<!-- Main content -->
<section class="content row edit_user">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tìm kiếm nâng cao</h3>
        </div>
        <!-- /.box-header -->
        
            
            <form action="" class="adv-search" method="GET">
            <input  style="width:30%; " type="text" hidden name="url" value="muontra">
            <input  style="width:30%; " type="text" hidden name="method" value="getAll">
                <div class="row" style="margin-bottom: 5px">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                Sách
                            </div>
                            <div class="col-md-9">
                            <select name="search-book" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <?php if(isset( $_GET['search-book'])){
                                ?>
                                    <option value="<?php echo $_GET['search-book'] ?>" selected><?php echo $_GET['search-book']?></option>
                                <?php
                                }else{
                                ?>
                                    <option selected></option>
                                <?php
                                }
                                ?>       
                            
                                <?php
                                foreach ($result_book as $item_book) {
                                ?>
                                <option value="<?php echo $item_book['name']; ?>">
                                    <?php echo $item_book['name']; ?>
                                </option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                Người dùng
                            </div>
                            <div class="col-md-9">
                            <select name="search-user" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <?php if(isset( $_GET['search-user'])){
                                ?>
                                    <option value="<?php echo $_GET['search-user'] ?>" selected><?php echo $_GET['search-user'] ?></option>
                                <?php
                                }else{
                                ?>
                                    <option selected></option>
                                <?php
                                }
                                ?>    
                            
                                <?php
                                foreach ($result_user as $item_user) {
                                ?>
                                <option value="<?php echo $item_user['name']; ?>">
                                    <?php echo $item_user['name']; ?>
                                </option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5px">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                Tình trạng mượn
                            </div>
                            <div class="col-md-9">
                            <select name="search-status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <?php if(isset( $_GET['search-status'])){
                                ?>
                                    <option value="<?php echo $_GET['search-status'] ?>" selected><?php echo $_GET['search-status'] ?></option>
                                <?php
                                }else{
                                ?>
                                    <option selected></option>
                                <?php
                                }
                                ?>

                                <?php
                                    for ($i = 0; $i < count($status); $i++) {
                                ?>
                                <option value="<?php echo $status[$i]; ?>">
                                    <?php echo $status[$i]; ?>
                                </option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                Số ngày quá hạn
                            </div>
                            <div class="col-md-9">
                            <select name="search-overdue" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <?php if(isset( $_GET['search-overdue'])){
                                ?>
                                    <option value="<?php echo $_GET['search-overdue'] ?>" selected><?php echo $_GET['search-overdue'] ?></option>
                                <?php
                                }else{
                                ?>
                                    <option selected></option>
                                <?php
                                }
                                ?>
                            
                                <?php
                                    for ($i = 0; $i < count($overdue_day); $i++) {
                                ?>
                                <option value="<?php echo $overdue_day[$i]; ?>">
                                    <?php echo $overdue_day[$i]; ?>
                                </option>
                                <?php } ?>
                            </select>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5px">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-2">
                        <button name="reset"  class="btn btn-primary btn-group" type="submit" >Reset</button>
                    </div>
                    <div class="col-md-2">
                        <button name="search"  class="btn btn-primary btn-group" type="submit" >Tìm kiếm</button>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5px">
                <div class="col-md-2">
                    Số bản ghi tìm thấy:
                </div>
                <div class="col-md-10">
                    <?php echo count($row) ?>
                </div>
            </div>
            <div id="" class="tab-pane fade in active">
                <table class="table table-bordered">
                    <colgroup>
                        <col width="10%" />
                        <col width="30%" />
                        <col width="35%" />
                        <col width="25%" />
                    </colgroup>
                    <thead class="bg-orange">
                        <tr>
                            <th class="text-center align-middle">No</th>
                            <th class="text-center align-middle">Tên sách</th>
                            <th class="text-center align-middle">Người dùng</th>
                            <th class="text-center align-middle">Tình trạng mượn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(count($row) > 0){
                            for($i = 0; $i < count($row); $i++){
                                $value = $row[$i];
                        ?>
                            <tr>
                                <td class="text-center align-middle"><?php echo $i+1  ?></td>
                                <td class="text-left align-middle"><?php echo $value['ten_sach'] ?></td>
                                <td class="text-left align-middle"><?php echo $value['nguoi_dung'] ?></td>
                                <?php
                                    if($value['status'] == "Quá hạn"){
                                ?>
                                        <td class="text-center align-middle"><?php echo $value['status'] ?> (<?php echo $value['delay'] ?> ngày)</td>
                                <?php   }
                                ?>
                                <?php
                                    if($value['status'] != "Quá hạn"){
                                ?>
                                        <td class="text-center align-middle"><?php echo $value['status'] ?></td>
                                <?php   }
                                ?>
                            </tr>
                        <?php }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
</section>
<!-- /.content -->