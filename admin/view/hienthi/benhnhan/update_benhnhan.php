<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item">Sửa</li>
      <li class="breadcrumb-item active">Bệnh nhân</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <!-- <div class="col-lg-6"> -->

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sửa thông tin bệnh nhân</h5>

          <?php
            //  echo var_dump($svone);
          ?>
          <!-- General Form Elements -->
          <form action="index.php?act=sua_benhnhan" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="partient_id" value="<?= $bngetone[0]['partient_id'] ?>">


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label" >Tên bệnh nhân</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="partient_name" value="<?=trim($bngetone[0]['partient_name'])?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Địa chỉ</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name = "pa_address" value="<?=trim($bngetone[0]['pa_address'])?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Ngày sinh</label>
              <div class="col-sm-10">
                <input class="form-control" type="date" id="" name = "date_of_birth" value="<?=trim($bngetone[0]['date_of_birth'])?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Giới tính</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="" name = "gender" value="<?=trim($bngetone[0]['gender'])?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Số điện thoại</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="" name = "phone_number" value="<?=trim($bngetone[0]['phone_number'])?>">
              </div>
            </div>

            <div class="row mb-3">
                <label for="ten_chuyen_muc" class="col-sm-2 col-form-label">Tên người dùng</label>
                <div class="col-sm-10">
                <select class="form-control" id="" name="user_id">
                    <option value="0">Chọn tên người dùng</option>
                    <?php
                     $user_id = $bngetone[0]['user_id'];
                     if(isset($kqtaikhoan)){
                        foreach ($kqtaikhoan as $tk){
                            if($tk['user_id'] == $user_id){
                                echo '<option value="'.$tk['user_id'].'" selected>'.$tk['user_name'].'</option>';
                            }else{
                                echo '<option value="'.$tk['user_id'].'" >'.$tk['user_name'].'</option>';
                            }
                        }
                    }

                    ?>
                   
                </select>
                    
                </div>
            </div>
            

            
       
            <div class="row mb-3">
              <div class="col-sm-10">
              <td><input type="submit" class="btn btn-primary" name="capnhap" value ="Cập nhật"></input></td>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    <!-- </div> -->

  </div>
</section>

</main><!-- End #main -->