
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
    <form action="" method="GET">
       <div  style = "margin-top: 3%; " align="center" >
        <label>Thể loại </label>
        <select name='category'>
				<?php
          $category = array("" => "" ,1 => 'Khoa học', 2 => 'Tiểu thuyết',3 => 'Manga',  4 => 'Sách giáo khoa' );
            foreach($category as $x => $val) {
              echo "<option 'value'=".$x."> $val</option>";
            }
						?> 

					</select>
        <label style="margin-left: 3%" >Từ khóa</label>
        <input  style="width:30%; " type="text" name="name_book">

        <a class="btn btn-default" title="Xem chi tiết" href="?url=library_search&method=searchDataBook&category=&name_book=">Tìm kiếm<i class="fa fa-search"></i></a>
          <!-- <input  type="submit"  style="background-color: #5b9bd5; margin-left: 3%" value="Tìm kiếm"></input > -->
      </div>
      <input type="hidden" name="action" value="search_book">
    </form>
    
    <div style = "margin-top: 3%;  margin-left: 1%;  margin-bottom: 5%">
        <?php echo '<b>Số quyển sách tìm thấy: '.count($row).' </b>' ?>   
        <button class="btn btn-sm btn-social btn-primary" align="right" > <i class="fa fa-plus"></i> Thêm mới
          </button>
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
          <?php  foreach($row as $value){?>
            <tr>
              <td class="text-center align-middle"><?php echo $value['id'] ?></td>
              <td class="text-left align-middle"><?php echo $value['name'] ?></td>
              <td class="text-left align-middle"><?php echo $value['category'] ?></td>
              <td class="text-center align-middle"><?php echo $value['author'] ?></td>
              <td class="text-center align-middle"><?php echo $value['quantity'] ?></td>
              <td class="text-center align-middle">
              <a type="button" class="btn btn-primary" href="" > Sửa</a>
                <button type="button" class="btn btn-danger"> Xóa</button>
                <a class="btn btn-default" title="Xem chi tiết" href="?url=library_search&method=view_detail_book&id=<?php echo $value['id'] ?>">Chi tiết<i class="fa fa-eye"></i>
                </a>
              </td>
            </tr>
            <?php }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
