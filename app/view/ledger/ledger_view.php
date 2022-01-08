<!-- Content Header (Page header) -->
<style>
  button {
    color: #fff;
    background-color: #4088d6d0;
    border: 1px solid #366aa5;
    width: 120px;
    display: inline-block;
    padding: 10px 0 5px;
    /* border-radius: 50px; */
    margin: 10px 10px 10px 10px;
    text-align: center;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 30%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
  }

  /* Add Animation */
  @-webkit-keyframes animatetop {
    from {
      top: -300px;
      opacity: 0
    }

    to {
      top: 0;
      opacity: 1
    }
  }

  @keyframes animatetop {
    from {
      top: -300px;
      opacity: 0
    }

    to {
      top: 0;
      opacity: 1
    }
  }

  /* The Close Button */
  .close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  .modal-header {
    padding: 2px 10px;
    background-color: #5cb85c;
    color: white;
  }

  .modal-body {
    padding: 2px 10px;
  }

  .modal-footer {
    padding: 2px 10px;
    background-color: #5cb85c;
    color: white;
  }
</style>
<section class="content-header">
  <h1>Quản lý sổ cái</h1>
  <ol class="breadcrumb">
    <li>
      <a href="#"><i class="fa fa-group"></i>Sổ cái</a>
    </li>
  </ol>
</section>
<!-- Main content -->
<section class="content row edit_user">
  <div class="box box-primary">
    <div class="box-header with-border">

      <h3 class="box-title">Danh sách mượn trả</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body my_box tab-content">
      <div>
        <form action="" method="GET">
          <input type="hidden" name='url' value='ledger'>
          <div style="text-align: center; width: 90%;">
            <div style="margin: 20px;">
              <label style="width: 100px;">Người dùng</label>
              <select name="user_id" style="width: 250px;height: 30px;">
                <option value="-1" selected="selected"> chọn người dùng</option>
                <?php foreach ($rowUser as $value) : ?>
                  <option value='<?php echo $value['id'] ?>'>
                    <?php echo $value['name'] ?>
                  </option>
                <?php endforeach; ?>
              </select>

            </div>

            <div>
              <label style="width: 100px;">Tên sách</label>
              <select name="book_id" style="width: 250px;height: 30px;">
                <option value="-1" selected="selected">chọn sách</option>
                <?php foreach ($rowBook as $value) : ?>
                  <option value='<?php echo $value['id'] ?>'>
                    <?php echo $value['name'] ?>
                  </option>
                <?php endforeach; ?>
              </select>

            </div>
            
            <button id="btnReset" type='submit' name='chucnang' value='reset' style="display: inline;">Reset</button>
            <button id="btnSubmit" type='submit'  style="display: inline;">Tìm kiếm</button>
          </div>

        </form>
      </div>
      <div>
        Số thiết bị tìm thấy: <?php echo count($rowBookTran); ?>
      </div>
      <div id="" class="tab-pane fade in active">
        <table class="table table-bordered">
          <colgroup>
            <col width="5%" />
            <col width="30%" />
            <col width="30%" />
            <col width="15%" />
            <col width="20%" />
            <col width="10%" />
          </colgroup>
          <thead class="bg-orange">
            <tr>
              <th class="text-center align-middle">No</th>
              <th class="text-center align-middle">Tên sách</th>
              <th class="text-center align-middle">Người mượn</th>
              <th class="text-center align-middle">Tình trạng mượn</th>
              <th class="text-center align-middle">Ngày dự kiến trả</th>
              <th class="text-center align-middle">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($rowBookTran as $value) {

            ?>

              <tr>
                <td class="text-center align-middle"><?php echo $i;
                                                      $i = $i + 1;   ?></td>

                <td class="text-left align-middle"><?php echo $value['name'] ?></td>
                <td class="text-left align-middle"><?php echo $value['bookname'] ?></td>
                <td class="text-center align-middle">
                  <?php
                  $date = date('Y-m-d', time());

                  if ($date >= $value['return_plan_date'] && $value['return_actual_date'] == "0000-00-00") {
                    echo 'Quá hạn';
                  } else if ($value['return_actual_date'] != "0000-00-00") {
                    echo 'Đã trả';
                  } else {
                    echo 'Đang mượn';
                  }

                  ?>
                </td>
                <td class="text-left align-middle"><?php echo $value['return_plan_date'] ?></td>
                <td class="text-center align-middle">
                  <?php
                  if ($value['return_actual_date'] == '0000-00-00') {

                  ?>
                    <a type="button" class="btn btn-primary sua_sach" onclick="myFunction(<?php echo $value['id'] ?>)">
                      Trả sách
                    </a>

                  <?php
                  }
                  ?>

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


  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h3>Bạn có chắc chắn trả sách</h3>
      </div>
      <div class="modal-body">
        <a style="float: right;" type="button" class="btn btn-danger ">
          không
        </a>
      </div>
      <div class="modal-footer">
        <h6>@byKhiem</h6>
      </div>
    </div>

  </div>
  <script>
    function myFunction(id) {
      $("#traSach").remove();
      var modal = document.getElementById("myModal");
      var span = document.getElementsByClassName("close")[0];
      var span = document.getElementsByClassName("btn btn-danger")[0];

      modal.style.display = "block";

      span.onclick = function() {
        modal.style.display = "none";
      }

      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      $(".modal-body").prepend("<a type='button' id ='traSach' class='btn btn-primary sua_sach' href='?url=ledger&method=giveBookBack&id=" + id + "'>Trả sách</a> ");
    }
  </script>
</section>
<!-- /.content -->