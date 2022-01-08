<!-- Main content -->
<section class="content row">
  <div class="box box-primary">
    <div class="box-header with-border">
        <div class="box-header ">
            <h3 class="box-title">Danh sách các yêu cầu cấp lại mật khẩu</h3>
        </div>  
    </div>
    <div style="color: red;">
        <?php echo isset($error['newpw'])?$error['newpw']:"" ?>
    </div>
      <div id="" class="tab-pane fade in active">
          <table class="table table-bordered">
            <thead class="bg-orange">
              <tr>
                <th class="text-center align-middle">No.</th>
                <th class="text-center align-middle">Tên người dùng</th>
                <th class="text-center align-middle">Mật khẩu mới</th>
                <th class="text-center align-middle">Thao tác</th>
              </tr>
            </thead>
            <tbody>    
            <?php $stt = 1;
              foreach($row as $value){?>
              <tr>
                <form  action="?url=userRS&method=updatePassword" method="POST" enctype="multipart/form-data">
                    <td class="text-center align-middle"><?php echo $stt++ ?></td>
                    <td class="text-left align-middle"><?php echo $value['login_id'] ?><input type="text" hidden style="" name="user_name" value=<?php echo (isset( $value['login_id']) ?  $value['login_id'] : '')?>></td>
                    <td class="text-left align-middle" style="text-align: center;"><input type="text"  style="width:50%"  name="newpw" ></td>
                    <td class="text-center align-middle">
                    <input type="submit"  style="background-color: steelblue;width:50%" value="Reset"/>
                    </td>
                </form>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
   
  </div>
</section>
