<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Quản lý người dùng</h1>
  <ol class="breadcrumb">
    <li>
      <a href="#"><i class="fa fa-group"></i>Quản lý người dùng</a>
    </li>
  </ol>
</section>
<!-- Main content -->
<section class="content row edit_user">
  <div class="box box-primary">
    <div class="box-header with-border">

      <h3 class="box-title">Danh sách người dùng</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body my_box tab-content">
      <div class="row" style="margin-bottom: 5px">
        <div class="col-md-6">
          <a href="?url=library_add&method=view_add_input" class="btn btn-sm btn-social btn-primary">
            <i class="fa fa-plus"></i> Thêm mới
          </a>
          
        </div>
        <div class="col-md-6 text-right" style="position: relative">
          <input class="form-control" placeholder="Tìm kiếm..." />
          <button style="position: absolute; top: 0px; right: 16px" class="btn btn-primary">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </div>
      </div>

      <div id="" class="tab-pane fade in active">
        <table class="table table-bordered">
          <colgroup>
            <col width="5%" />
            <col width="20%" />
            <col width="15%" />
            <col width="5%" />
            <col width="15%" />
            <col width="15%" />
            <col width="20%" />
          </colgroup>
          <thead class="bg-orange">
            <tr>
              <th class="text-center align-middle">STT</th>

              <th class="text-center align-middle">Tên</th>
              <th class="text-center align-middle">
                Chức vụ
              </th>
              <th class="text-center align-middle">Mã số</th>
              <th class="text-center align-middle">Ảnh hiển thị</th>
              <th class="text-center align-middle">Mô tả</th>
              <th class="text-center align-middle">Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <?php  foreach($row as $key => $value){?>
            <tr>
                <td class="text-center align-middle"><?php echo $key + 1 ?></td>

                <td class="text-left align-middle"><?php echo $value['name'] ?></td>
                <td class="text-left align-middle"><?php echo $value['type'] ?></td>
                <td class="text-center align-middle"><?php echo $value['user_id'] ?></td>
                <!-- <td class="text-center align-middle"><?php echo $value['avatar'] ?></td> -->
                <td>
                  <img width="50px" height="50px" src="<?php echo FULL_SITE_ROOT . "web/avatar/user/" . $value['avatar'] ?>" alt="" srcset="">
                </td>
                <td class="text-center align-middle"><?php echo $value['description'] ?></td>
                <td class="text-center align-middle">
                  <a type="button" class="btn btn-primary sua_sach" href="?url=library_edit&method=view_edit_input&id=<?php echo $value['id'] ?>">
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
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
</section>
<!-- /.content -->