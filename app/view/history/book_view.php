
<section class="content-header">
<h1>Lịch sử mượn sách</h1>
  <ol class="breadcrumb">
    <li>
      <a href="#"><i class="fa fa-group"></i>Lịch sử mượn sách</a>
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


    <form action="?url=history" method="GET">
      <input type="text" name='url' value="history" style="display:none">
       <div  style = "margin-top: 3%; margin-left: 40px " align="center" >
        <label>Sách </label>
        <select name='book' style= "width: 138px; height: 30px; margin-bottom: 10px;">
        <!-- <option value="<?php echo $val['id'] ?>"></option>; -->
        <?php
          foreach($row as $x => $val) {
            ?>
            <option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>;
            <?php
          }
        ?> 
				</select>
      </div>

      <div style="text-align: center">
      <label>Người dùng </label>
        <select name='user' style= "width: 138px; height: 30px; margin-bottom: 10px;">
        <!-- <option value="<?php echo $val['id'] ?>"></option>; -->
          <?php
          
              foreach($user as $x => $val) {
                ?>
                <option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>;
                <?php
              }
          ?> 
				</select>
        </div>
        <div style=" width: 4%;display: inline; margin-left: 580px;" > 
          <button class="btn btn-default" title="Reset" style="background-color: #2775c4;" >Reset</button>
          <button  class="btn btn-default" title="search"name ="submit" type="submit" style="background-color: #2775c4;">Tìm kiếm</button>
        </div>
    </form>
    <div style = "margin-top: 3%;  margin-left: 1%;  margin-bottom: 5%">
        <?php if(isset($book)){echo '<b>Số quyển sách tìm thấy: '.count($book).' </b>';} else {echo '<b>Số quyển sách tìm thấy: 0 </b>';} ?>   
    </div>

    <div id="" class="tab-pane fade in active">
        <table class="table table-bordered">
          <thead class="bg-orange">
            <tr>
              <th class="text-center align-middle">No.</th>
              <th class="text-center align-middle">Tên sách</th>
              <th class="text-center align-middle">Số lần mượn</th>
              <th class="text-center align-middle">Thời gian dự kiến muộn</th>
              <th class="text-center align-middle">Thời điểm trả</th>
              <th class="text-center align-middle">Ngư mượn</th>
            </tr>
          </thead>
          <tbody>    
            <?php 
            $count=1;
            ?>
          <?php  if(isset($book)) foreach($book as $value){?>
            <tr>
              <td class="text-center align-middle"><?php echo $count++ ?></td>
              <td class="text-left align-middle"><?php echo $value['book_name'] ?></td>
              <td class="text-left align-middle"><?php echo $value['count'] ?></td>
              <td class="text-center align-middle"><?php echo $value['borrowed_date'] ?></td>
              <td class="text-center align-middle"><?php echo $value['return_plan_date']  ?></td>
              <td class="text-center align-middle"><?php echo $value['user_name'] ?></td>
            </tr>
            <?php }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
