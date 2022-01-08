
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
    <form id="searchbookForm"  action="" method="GET" enctype="multipart/form-data">
      <div  style = "margin-top: 3%; " align="center" >
        <input  style="width:30%; " type="text" hidden name="url" value="library_search">
        <input  style="width:30%; " type="text" hidden name="method" value="searchDataBook">
        <label>Thể loại </label>

        <select name='category' value=<?php echo (isset( $category) ?  $category : '')?>  >
        <?php
          $datacate = array(0 => "" ,1 => 'Khoa học', 2 => 'Tiểu thuyết',3 => 'Manga',  4 => 'Sách giáo khoa' );
            foreach($datacate as $x => $val) {
              echo "<option value='".$x."'".(isset( $category) && $category == $x  ?  'selected' : '') ."  > $val</option>";
            }
            ?> 
          </select>
        <label style="margin-left: 3%" >Từ khóa</label>
        <input  style="width:30%; " type="text" name="name_book" value=<?php echo (isset( $name) ?  $name : '')?> >
        <input  type="submit" style="background-color: #5b9bd5; margin-left: 3%" value="Tìm kiếm"></input >
      </div>
    
    
      <div style = "margin-top: 3%;  margin-left: 1%;  margin-bottom: 5%">
            <div>
              <?php echo '<b>Số quyển sách tìm thấy: '.count($row).' </b>' ?>   
            </div>
            <div>
              <button class="btn btn-sm btn-social btn-primary" style = " right:10px; position:absolute;"> <i class="fa fa-plus"></i>
                <a style="color: #fff" href = "?url=library_add&method=book_view_add_input">Thêm mới</a>    
              </button>
            </div>
         
      </div>
    
      <div id="" class="tab-pane fade in active">
          <table class="table table-bordered">
            <thead class="bg-orange">
              <tr>
                <th class="text-center align-middle">No.</th>
                <th class="text-center align-middle">Tên sách</th>
                <th class="text-center align-middle">Thể loại</th>
                <th class="text-center align-middle">Tác giả</th>
                <th class="text-center align-middle">Số lượng</th>
                <th class="text-center align-middle">Thao tác</th>
              </tr>
            </thead>
            <tbody>    
            <?php $stt = 1;
              foreach($row as $value){?>
              <tr>
                <td class="text-center align-middle"><?php echo $stt++ ?></td>
                <td class="text-left align-middle"><?php echo $value['name'] ?></td>
                <td class="text-left align-middle"><?php echo $value['category'] ?></td>
                <td class="text-center align-middle"><?php echo $value['author'] ?></td>
                <td class="text-center align-middle"><?php echo $value['quantity'] ?></td>
                <td class="text-center align-middle">
                <a type="button" class="btn btn-primary "  href="?url=library_edit_book&method=edit_book_input&id=<?php echo $value['id'] ?>">

Sửa
</a>
                <a class="btn btn-danger" title="Xóa" href="?url=library_search&method=delete_book&id=<?php echo $value['id'] ?> " onclick="return confirm('Bạn có chắc chắn muốn xóa?')"> Xóa<i class="fa fa-trash "></i></a>
                <a class="btn btn-default" title="Xem chi tiết" href="?url=library_search&method=view_detail_book&id=<?php echo $value['id'] ?>">Chi tiết<i class="fa fa-eye"></i></a>
                </td>
              </tr>
              <?php }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </form>
  </div>
</section>

