<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item">Thêm</li>
      <li class="breadcrumb-item active">Bệnh nhân</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <!-- <div class="col-lg-6"> -->

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Thêm thông tin bệnh nhân</h5>

          <?php
            //  echo var_dump($svone);
          ?>
          <!-- General Form Elements -->
          <form action="index.php?act=add_benhnhan" method="POST" enctype="multipart/form-data">


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label" >Tên bệnh nhân</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="partient_name" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Địa chỉ</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name = "pa_address" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Ngày sinh</label>
              <div class="col-sm-10">
                <input class="form-control" type="date" id="" name = "date_of_birth" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Giới tính</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="" name = "gender" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Số điện thoại</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="" name = "phone_number" value="">
              </div>
            </div>

            <div class="row mb-3">
                <label for="ten_chuyen_muc" class="col-sm-2 col-form-label">Tên người dùng</label>
                <div class="col-sm-10">
                <select class="form-control" id="" name="user_id">
                    <option value="0">Chọn tên người dùng</option>
                    <?php
                      if(isset($kqtaikhoan)){
                        foreach ($kqtaikhoan as $tk){
                          echo '<option value="'.$tk['user_id'].'"> '.$tk['user_name'].'</option>';
                        }
                      }

                    ?>
                   
                </select>
                    
                </div>
            </div>
            

            
       
            <div class="row mb-3">
              <div class="col-sm-10">
              <td><input type="submit" class="btn btn-primary" name="thembenhnhan" value ="Thêm mới"></input></td>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    <!-- </div> -->

  </div>
</section>

</main><!-- End #main -->