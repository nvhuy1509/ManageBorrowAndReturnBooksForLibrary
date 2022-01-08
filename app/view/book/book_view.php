<?php

?>
<section class="content-header">
    <h1>Quản lý sách</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-group"></i>Quản lý sách</a>
        </li>
    </ol>
</section>
<!-- Main content -->
<section class="content row">
    <div class="box box-primary">
        <div class="box-header with-border">
            <div class="box-header ">
                <h3 class="box-title">Danh sách ấn phẩm</h3>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- <div class="box-body my_box tab-content">
      <div class="row" style="margin-bottom: 5px">
        <div class="col-md-6">
          <button
            class="btn btn-sm btn-social btn-primary"
          >
            <i class="fa fa-plus"></i> Thêm mới
          </button>
        </div>
        <div class="col-md-6 text-right" style="position: relative">
          <input class="form-control" placeholder="Tìm kiếm..."/>
          <button
            style="position: absolute; top: 0px; right: 16px"
            class="btn btn-primary"
          >
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </div>
      </div> -->
        <div style="margin-top: 3%;" align="center">
            <label>Thể loại</label>
            <input style="width:50%; " type="select" id="search" name="search">
        </div>
        <div style="margin-top: 3%;" align="center">
            <label>Từ khóa</label>
            <input style="width:50%; " type="text" id="search" name="search">
        </div>
        <div style="margin-top: 3%;" align="center">
            <input type="submit" name="btn_submit" style="background-color: #5b9bd5" value="Tìm kiếm"></input>
        </div>

        <div style="margin-top: 3%;  margin-left: 1%;  margin-bottom: 5%">
            <?php echo 'Số quyển sách tìm thấy: XXX' ?>
        </div>
        <div id="" class="tab-pane fade in active">
            <table class="table table-bordered">
                <!-- <colgroup>
            <col width="5%" />
            <col width="20%" />
            <col width="15%" />
            <col width="5%" />
            <col width="15%" />
            <col width="15%" />
            <col width="20%" />
          </colgroup> -->
                <thead class="bg-orange">
                    <tr>
                        <th class="text-center align-middle">No.</th>
                        <th class="text-center align-middle">Tên sách</th>
                        <th class="text-center align-middle">Thể loại</th>
                        <th class="text-center align-middle">Mô tả chi tiết</th>
                        <th class="text-center align-middle">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
        foreach ($row as $values){
        ?>
                    <tr>
                        <td class="text-center align-middle"><?php echo $values['id'] ?></td>
                        <td class="text-left align-middle"><?php echo $values['name'] ?></td>
                        <td class="text-left align-middle"><?php echo $values['category'] ?></td>
                        <td class="text-center align-middle"><?php echo $values['author'] ?></td>
                        <td class="text-center align-middle">
                            <a type="button" class="btn btn-primary "  href="?url=library_edit_book&method=edit_book_input&id=<?php echo $values['id'] ?>">

                                Sửa
                            </a>
                            <button type="button" class="btn btn-danger">
                                Xóa
                            </button>
                            <a class="btn btn-default" title="Xem chi tiết" href="">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
        }
        ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
    </div>
</section>
<!-- /.content -->